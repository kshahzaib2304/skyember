import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 4. One settle, then still.
 * The spread is complete in HTML. Motion only eases the plate into place.
 */
export function initSelectedWork() {
    const root = document.querySelector('[data-selected-work]');

    if (!root || root.dataset.workReady === 'true' || prefersReducedMotion()) {
        return;
    }

    root.dataset.workReady = 'true';

    const visual = root.querySelector('[data-work-visual]');
    const copy = root.querySelector('[data-work-copy]');

    if (!visual) {
        return;
    }

    const gsap = ensureMotion();
    const below = visual.getBoundingClientRect().top > window.innerHeight * 0.85;

    gsap.set(visual, { transformOrigin: '50% 55%' });

    if (below) {
        gsap.set(visual, { scale: 0.94, opacity: 0 });

        if (copy) {
            gsap.set(copy, { y: 14 });
        }
    }

    ScrollTrigger.create({
        trigger: visual,
        start: 'top 80%',
        once: true,
        onEnter: () => {
            const timeline = gsap.timeline({ defaults: { ease: motion.ease, duration: motion.reveal } });

            timeline.to(visual, {
                scale: 1,
                opacity: 1,
                onComplete: () => gsap.set(visual, { clearProps: 'transform,opacity' }),
            });

            if (copy) {
                timeline.to(copy, {
                    y: 0,
                    onComplete: () => gsap.set(copy, { clearProps: 'transform' }),
                }, 0);
            }
        },
    });

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
