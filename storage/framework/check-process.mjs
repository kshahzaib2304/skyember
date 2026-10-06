import { spawn } from 'node:child_process';
import { mkdirSync, writeFileSync } from 'node:fs';
import { setTimeout as delay } from 'node:timers/promises';

const chromePath = 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';
const userData = 'E:\\Work\\skyember\\storage\\framework\\chrome-process';
const outDir = 'E:\\Work\\skyember\\storage\\framework\\screenshots';
const port = 9346;
const widths = [320, 390, 768, 1440];

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
        errors.push(message.params.exceptionDetails?.text || 'exception');
    }
    if (message.method === 'Runtime.consoleAPICalled' && message.params.type === 'error') {
        errors.push('console');
    }
});

await send(ws, 'Page.enable');
await send(ws, 'Runtime.enable');
await send(ws, 'Page.navigate', { url: 'http://127.0.0.1:8000/' });
await delay(1600);

const report = [];

for (const width of widths) {
    await send(ws, 'Emulation.setDeviceMetricsOverride', {
        width,
        height: 1100,
        deviceScaleFactor: 1,
        mobile: width < 768,
    });
    await delay(200);
    await send(ws, 'Runtime.evaluate', {
        expression: `document.documentElement.style.scrollBehavior = 'auto'; const s = document.getElementById('process'); window.scrollTo(0, s.getBoundingClientRect().top + window.scrollY - 88);`,
    });
    await delay(350);

    const measured = await send(ws, 'Runtime.evaluate', {
        expression: `(() => {
            const section = document.getElementById('process');
            const h2 = document.getElementById('process-heading');
            const rows = [...section.querySelectorAll('.how-row')];
            const first = rows[0].getBoundingClientRect();
            const name = rows[0].querySelector('.how-name').getBoundingClientRect();
            const detail = rows[0].querySelector('.how-detail').getBoundingClientRect();
            const list = section.querySelector('ol');
            const h2Lines = Math.round(h2.getClientRects().length);
            return {
                width: ${width},
                overflow: document.documentElement.scrollWidth - document.documentElement.clientWidth,
                tag: list.tagName,
                count: rows.length,
                h2: h2.innerText.replace(/\\s+/g, ' ').trim(),
                innerWidth: window.innerWidth,
                columns: getComputedStyle(rows[0]).gridTemplateColumns,
                h2Lines,
                stacked: detail.top > name.bottom - 2,
                sameLine: Math.abs(detail.top - name.top) < 8,
                eyebrow: section.querySelector('.text-eyebrow')?.innerText.trim(),
                names: rows.map((row) => row.querySelector('.how-name').innerText.trim()),
                scripts: !!document.querySelector('script[src*="process"]'),
                bg: getComputedStyle(section).backgroundColor,
            };
        })()`,
        returnByValue: true,
    });

    report.push(measured.result.value);
    const shot = await send(ws, 'Page.captureScreenshot', { format: 'png' });
    writeFileSync(`${outDir}/process-${width}.png`, Buffer.from(shot.data, 'base64'));
}

console.log(JSON.stringify({ errors, report }, null, 2));
ws.close();
chrome.kill();
