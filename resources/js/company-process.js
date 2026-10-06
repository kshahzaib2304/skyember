import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 23. Almost entirely still.
 * Optional 0.9s decision-record reveal only.
 */
export function initCompanyProcess() {
    const root = document.querySelector('[data-cop]');

    if (!root || root.dataset.copReady === 'true') {
        return;
    }

    root.dataset.copReady = 'true';

    if (prefersReducedMotion()) {
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-cop-reveal]');

    if (!visual) {
        return;
    }

    const below = visual.getBoundingClientRect().top > window.innerHeight * 0.85;

    gsap.set(visual, { transformOrigin: '50% 55%' });

    if (below) {
        gsap.set(visual, { scale: 0.94, opacity: 0 });
    }

    ScrollTrigger.create({
        trigger: visual,
        start: 'top 80%',
        once: true,
        onEnter: () => {
            gsap.to(visual, {
                scale: 1,
                opacity: 1,
                duration: motion.reveal,
                ease: motion.ease,
                onComplete: () => gsap.set(visual, { clearProps: 'transform,opacity' }),
            });
        },
    });

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
