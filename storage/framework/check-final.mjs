import { spawn } from 'node:child_process';
import { mkdirSync, writeFileSync } from 'node:fs';
import { setTimeout as delay } from 'node:timers/promises';

const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
const userData = 'E:\\Work\\skyember\\storage\\framework\\chrome-final';
const outDir = 'E:\\Work\\skyember\\storage\\framework\\screenshots';
const port = 9350;
const widths = [1440];

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
            if (page?.webSocketDebuggerUrl) return page.webSocketDebuggerUrl;
        } catch {
            // Chrome is still starting.
        }
        await delay(250);
    }
    throw new Error('Chrome debugging port did not open');
}

const ws = new WebSocket(await waitForJson());
await new Promise((resolve, reject) => {
    ws.addEventListener('open', resolve, { once: true });
    ws.addEventListener('error', reject, { once: true });
});
ws.addEventListener('message', (event) => {
    const message = JSON.parse(event.data);
    if (message.id && pending.has(message.id)) {
        const { resolve, reject } = pending.get(message.id);
        pending.delete(message.id);
        if (message.error) reject(new Error(JSON.stringify(message.error)));
        else resolve(message.result);
    }
});
const errors = [];
ws.addEventListener('message', (event) => {
    const message = JSON.parse(event.data);
    if (message.method === 'Runtime.exceptionThrown') errors.push(message.params.exceptionDetails?.text || 'exception');
    if (message.method === 'Runtime.consoleAPICalled' && message.params.type === 'error') errors.push('console');
});

await send(ws, 'Page.enable');
await send(ws, 'Runtime.enable');
await send(ws, 'Page.navigate', { url: 'http://127.0.0.1:8000/' });
await delay(1600);

const report = [];
for (const width of widths) {
    await send(ws, 'Emulation.setDeviceMetricsOverride', {
        width,
        height: width >= 1024 ? 900 : 1100,
        deviceScaleFactor: 1,
        mobile: width < 768,
    });
    await delay(250);
    await send(ws, 'Runtime.evaluate', {
        expression: `document.documentElement.style.scrollBehavior='auto'; const s=document.getElementById('process'); window.scrollTo(0, s.getBoundingClientRect().top + window.scrollY + s.offsetHeight - 220);`,
    });
    await delay(300);
    const measured = await send(ws, 'Runtime.evaluate', {
        expression: `(() => {
            const close = document.getElementById('final-cta');
            const footer = document.querySelector('footer');
            const action = close.querySelector('.final-cta');
            const title = close.querySelector('.final-title');
            const band = getComputedStyle(close.querySelector('.final-band'));
            const process = document.getElementById('process');
            const gap = Math.round(close.getBoundingClientRect().top - process.getBoundingClientRect().bottom);
            return {
                width: ${width},
                innerWidth: window.innerWidth,
                overflow: document.documentElement.scrollWidth - document.documentElement.clientWidth,
                h2: title.innerText.replace(/\\s+/g, ' ').trim(),
                lines: title.querySelectorAll('span').length,
                action: action.innerText.replace(/\\s+/g, ' ').trim(),
                actionTag: action.tagName,
                contactHref: !!close.querySelector('a[href="/contact"]'),
                talk: document.querySelector('header a[href="#final-cta"], header a.inline-flex') ? document.querySelector('[href="#final-cta"]')?.getAttribute('href') : null,
                talkCount: document.querySelectorAll('[href="#final-cta"]').length,
                footerQuestion: footer.innerText.includes('worth building'),
                footerEmail: footer.innerText.includes('hello@skyember.com'),
                columns: band.gridTemplateColumns,
                gapAfterProcess: gap,
                errors: ${JSON.stringify(errors)},
            };
        })()`,
        returnByValue: true,
    });
    report.push(measured.result.value);
    const shot = await send(ws, 'Page.captureScreenshot', { format: 'png' });
    writeFileSync(`${outDir}/final-${width}.png`, Buffer.from(shot.data, 'base64'));
}

console.log(JSON.stringify({ errors, report }, null, 2));
ws.close();
chrome.kill();
