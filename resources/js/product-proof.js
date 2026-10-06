import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

const gsap = ensureMotion();

/**
 * Chunk 3. The record is already complete in HTML.
 * Frame settles, workflow advances with a hold on each step,
 * the document pulls back so its relationships can be read, then returns. Still.
 */
function desktopLayout() {
    return window.matchMedia('(min-width: 1024px)').matches;
}

export function initProductProof() {
    const root = document.querySelector('[data-product-proof]');

    if (!root || root.dataset.proofReady === 'true' || prefersReducedMotion()) {
        return;
    }

    root.dataset.proofReady = 'true';

    const frame = root.querySelector('[data-proof-frame]');
    const steps = root.querySelectorAll('[data-proof-steps] [data-proof-step]');
    const links = root.querySelector('[data-proof-links]');

    if (!frame || !steps.length) {
        return;
    }

    const showPullback = desktopLayout() && links;

    if (showPullback) {
        gsap.set(links, { maxHeight: 0, opacity: 0, overflow: 'hidden' });
    }

    ScrollTrigger.create({
        trigger: frame,
        start: 'top 78%',
        once: true,
        onEnter: () => {
            const timeline = gsap.timeline({ defaults: { ease: motion.ease } });
            const reservedAt = [...steps].findIndex((step) => step.dataset.proofStep === 'reserved');
            const last = reservedAt === -1 ? 0 : reservedAt;
            let cursor = motion.entrance + motion.pause;

            timeline.fromTo(
                frame,
                { y: 16 },
                { y: 0, duration: motion.entrance, immediateRender: false },
                0,
            );

            for (let index = 0; index <= last; index += 1) {
                timeline.call(() => {
                    steps.forEach((step, stepIndex) => {
                        step.classList.toggle('is-current', stepIndex === index);
                    });
                }, null, cursor);
                cursor += motion.workflow;
            }

            if (showPullback) {
                const pullbackAt = cursor + motion.pause;
                const returnAt = pullbackAt + motion.transition + motion.hold;

                timeline.to(
                    frame,
                    { scale: 0.985, duration: motion.transition, transformOrigin: 'center top' },
                    pullbackAt,
                );
                timeline.to(links, { maxHeight: 120, opacity: 1, duration: motion.transition }, pullbackAt);
                timeline.to(frame, { scale: 1, duration: motion.transition }, returnAt);
                timeline.to(links, { maxHeight: 0, opacity: 0, duration: motion.transition }, returnAt);
            }

            timeline.call(() => {
                gsap.set(frame, { clearProps: 'transform' });
            });
        },
    });
}
