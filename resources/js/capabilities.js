import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

const gsap = ensureMotion();

/**
 * Chunk 2. Each proof settles, pauses, then changes state.
 * Copy is already on the page. Durations come from motion.js.
 */
function whenVisible(trigger, animation) {
    return ScrollTrigger.create({
        trigger,
        start: 'top 78%',
        once: true,
        onEnter: animation,
    });
}

function initLedger(root) {
    const visual = root.querySelector('[data-cap-visual="ledger"]');
    const steps = visual?.querySelectorAll('[data-cap-steps] .cap-step');

    if (!visual || !steps?.length) {
        return;
    }

    whenVisible(visual, () => {
        const timeline = gsap.timeline({ defaults: { ease: motion.ease } });
        const statesAt = motion.reveal + motion.pause;

        timeline.fromTo(visual, { y: 10 }, { y: 0, duration: motion.reveal, immediateRender: false }, 0);

        steps.forEach((step, index) => {
            timeline.call(() => {
                steps.forEach((item, itemIndex) => {
                    item.classList.toggle('is-active', itemIndex === index);
                });
            }, null, statesAt + index * motion.hold);
        });
    });
}

function initProduct(root) {
    const visual = root.querySelector('[data-cap-visual="product"]');
    const status = visual?.querySelector('[data-cap-status]');
    const progress = visual?.querySelector('[data-cap-progress]');

    if (!visual || !status || !progress) {
        return;
    }

    const states = (status.dataset.states || '')
        .split(',')
        .map((state) => state.trim())
        .filter(Boolean);

    if (!states.length) {
        return;
    }

    whenVisible(visual, () => {
        const timeline = gsap.timeline({ defaults: { ease: motion.ease } });
        const statesAt = motion.reveal + motion.pause;
        const span = Math.max(states.length - 1, 1) * motion.workflow;

        timeline.fromTo(visual, { y: 8 }, { y: 0, duration: motion.reveal, immediateRender: false }, 0);
        timeline.fromTo(
            progress,
            { scaleX: 0.18 },
            { scaleX: 1, duration: span, ease: motion.easeInOut, immediateRender: false },
            statesAt,
        );

        states.forEach((state, index) => {
            timeline.call(() => {
                status.textContent = state;
            }, null, statesAt + index * motion.workflow);
        });
    });
}

function initPipeline(root) {
    const visual = root.querySelector('[data-cap-visual="pipeline"]');

    if (!visual) {
        return;
    }

    const lineX = visual.querySelector('[data-cap-line-x]');
    const lineY = visual.querySelector('[data-cap-line-y]');

    whenVisible(visual, () => {
        const timeline = gsap.timeline();

        if (lineX) {
            timeline.fromTo(
                lineX,
                { scaleX: 0 },
                { scaleX: 1, duration: motion.story, ease: motion.easeInOut, immediateRender: false },
                motion.pause,
            );
        }

        if (lineY) {
            timeline.fromTo(
                lineY,
                { scaleY: 0 },
                { scaleY: 1, duration: motion.story, ease: motion.easeInOut, immediateRender: false },
                motion.pause,
            );
        }
    });
}

function initStack(root) {
    const visual = root.querySelector('[data-cap-visual="stack"]');
    const layers = visual?.querySelectorAll('[data-cap-layer]');

    if (!visual || !layers?.length) {
        return;
    }

    whenVisible(visual, () => {
        gsap.from(layers, {
            y: 14,
            duration: motion.reveal,
            ease: motion.ease,
            delay: motion.pause,
            stagger: { each: motion.stagger, from: 'end' },
            immediateRender: false,
        });
    });
}

export function initCapabilities() {
    const root = document.querySelector('[data-capabilities]');

    if (!root || root.dataset.capReady === 'true' || prefersReducedMotion()) {
        return;
    }

    root.dataset.capReady = 'true';

    initLedger(root);
    initProduct(root);
    initPipeline(root);
    initStack(root);

    if (document.fonts?.ready) {
        document.fonts.ready.then(() => ScrollTrigger.refresh());
    }
}
