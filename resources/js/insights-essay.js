import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 27. Insights essay — mostly still.
 * Hero visual 0.9s settle. Body and related rows static.
 */
export function initInsightsEssay() {
    const root = document.querySelector('[data-inse]');

    if (!root || root.dataset.inseReady === 'true') {
        return;
    }

    root.dataset.inseReady = 'true';

    if (prefersReducedMotion()) {
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-inse-reveal]');

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
