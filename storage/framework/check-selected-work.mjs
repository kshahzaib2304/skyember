import { spawn } from 'node:child_process';
import { mkdirSync, writeFileSync, rmSync } from 'node:fs';
import { setTimeout as delay } from 'node:timers/promises';

const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
const userData = 'E:\\Work\\skyember\\storage\\framework\\chrome-work';
const outDir = 'E:\\Work\\skyember\\storage\\framework\\screenshots';
const port = 9340;
const widths = [390, 768, 1440];

rmSync(userData, { recursive: true, force: true });
mkdirSync(outDir, { recursive: true });

const chrome = spawn(chromePath, [
    '--headless=new',
    '--disable-gpu',
    `--remote-debugging-port=${port}`,
    `--user-data-dir=${userData}`,
    '--no-first-run',
    '--no-default-browser-check',
    'about:blank',
], { stdio: 'ignore' });

let seq = 0;
const pending = new Map();

function send(ws, method, params = {}) {
    const id = ++seq;
    ws.send(JSON.stringify({ id, method, params }));
    return new Promise((resolve, reject) => {
        pending.set(id, { resolve, reject });
    });
}

async function waitForJson() {
    for (let i = 0; i < 40; i += 1) {
        try {
            const response = await fetch(`http://127.0.0.1:${port}/json/list`);
            const pages = await response.json();
            const page = pages.find((entry) => entry.type === 'page');
            if (page?.webSocketDebuggerUrl) {
                return page.webSocketDebuggerUrl;
            }
        } catch {
            // Chrome is still starting.
        }
        await delay(250);
    }
    throw new Error('Chrome debugging port did not open');
}

const wsUrl = await waitForJson();
const ws = new WebSocket(wsUrl);

await new Promise((resolve, reject) => {
    ws.addEventListener('open', resolve, { once: true });
    ws.addEventListener('error', reject, { once: true });
});

ws.addEventListener('message', (event) => {
    const message = JSON.parse(event.data);
    if (message.id && pending.has(message.id)) {
        const { resolve, reject } = pending.get(message.id);
        pending.delete(message.id);
        if (message.error) {
            reject(new Error(JSON.stringify(message.error)));
        } else {
            resolve(message.result);
        }
    }
});

const errors = [];
ws.addEventListener('message', (event) => {
    const message = JSON.parse(event.data);
    if (message.method === 'Runtime.exceptionThrown') {
        errors.push(message.params.exceptionDetails?.exception?.description || message.params.exceptionDetails?.text);
    }
    if (message.method === 'Runtime.consoleAPICalled' && message.params.type === 'error') {
        errors.push(message.params.args.map((arg) => arg.value || arg.description).join(' '));
    }
});

await send(ws, 'Page.enable');
await send(ws, 'Runtime.enable');
await send(ws, 'Page.navigate', { url: 'http://127.0.0.1:8000/' });
await delay(1800);

const report = [];

for (const width of widths) {
    await send(ws, 'Emulation.setDeviceMetricsOverride', {
        width,
        height: 1200,
        deviceScaleFactor: 1,
        mobile: width < 768,
    });
    await delay(300);
    await send(ws, 'Runtime.evaluate', {
        expression: `document.documentElement.style.scrollBehavior = 'auto'; document.getElementById('selected-work')?.scrollIntoView({ block: 'start', behavior: 'instant' });`,
    });
    await delay(400);

    const measured = await send(ws, 'Runtime.evaluate', {
        expression: `(() => {
            const section = document.getElementById('selected-work');
            const visual = document.querySelector('[data-work-visual]');
            const stage = document.querySelector('.work-stage');
            const sheet = document.querySelector('.work-sheet');
            const style = getComputedStyle(sheet);
            const box = (selector) => {
                const el = section.querySelector(selector);
                const r = el.getBoundingClientRect();
                return { top: r.top, left: r.left, right: r.right, bottom: r.bottom };
            };
            const overlaps = (a, b) => a.left < b.right - 4 && a.right > b.left + 4 && a.top < b.bottom - 4 && a.bottom > b.top + 4;
            const orders = box('.work-orders');
            const thread = box('.work-thread');
            const slips = [...section.querySelectorAll('.work-slip')].map((el) => el.getBoundingClientRect());
            const hits = [];
            if (overlaps(orders, thread)) hits.push('orders-thread');
            slips.forEach((slip, index) => {
                if (overlaps(orders, slip)) hits.push('orders-slip-' + index);
                if (overlaps(thread, slip)) hits.push('thread-slip-' + index);
            });
            return {
                width: ${width},
                overflow: document.documentElement.scrollWidth - document.documentElement.clientWidth,
                exploreLinks: document.querySelectorAll('#selected-work a').length,
                h2: document.getElementById('selected-work-heading')?.innerText.trim(),
                visualOpacity: getComputedStyle(visual).opacity,
                visualTransform: getComputedStyle(visual).transform,
                innerWidth: window.innerWidth,
                sheetDisplay: style.display,
                sheetGap: style.gap,
                sheetPadding: style.paddingTop,
                cssHits: (() => {
                    const found = [];
                    for (const sheet of document.styleSheets) {
                        let rules;
                        try { rules = [...sheet.cssRules]; } catch (error) { found.push(error.message); continue; }
                        for (const rule of rules) {
                            if (rule.cssText && rule.cssText.includes('.work-sheet')) found.push(rule.cssText.slice(0, 140));
                        }
                    }
                    return found.slice(0, 4);
                })(),
                stageHeight: Math.round(stage.getBoundingClientRect().height),
                sectionTop: Math.round(section.getBoundingClientRect().top + window.scrollY),
                sectionHeight: Math.round(section.offsetHeight),
                hits,
            };
        })()`,
        returnByValue: true,
    });

    report.push(measured.result.value);
    const metrics = measured.result.value;

    const shot = await send(ws, 'Page.captureScreenshot', { format: 'png' });
    writeFileSync(`${outDir}/selected-work-${width}.png`, Buffer.from(shot.data, 'base64'));
}

console.log(JSON.stringify({ errors, report }, null, 2));

ws.close();
chrome.kill();
await delay(500);
try {
    rmSync(userData, { recursive: true, force: true });
} catch {
    // Chrome may still be releasing the profile.
}
