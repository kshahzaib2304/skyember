import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 10. Optional one settle on the featured proof crop.
 * No capability-style state sequences.
 */
export function initSolutions() {
    const root = document.querySelector('[data-solutions]');

    if (!root || root.dataset.solutionsReady === 'true' || prefersReducedMotion()) {
        return;
    }

    root.dataset.solutionsReady = 'true';

    const visual = root.querySelector('[data-solutions-visual]');

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
