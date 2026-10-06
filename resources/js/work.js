import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 8. One settle on the featured plate, then still.
 * Queries [data-works-visual] only. Does not touch the homepage spread.
 */
export function initWork() {
    const root = document.querySelector('[data-works]');

    if (!root || root.dataset.worksReady === 'true' || prefersReducedMotion()) {
        return;
    }

    root.dataset.worksReady = 'true';

    const visual = root.querySelector('[data-works-visual]');

    if (!visual) {
        return;
    }

    const gsap = ensureMotion();
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
