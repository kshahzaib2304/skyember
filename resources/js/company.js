import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 21. Among the quietest pages.
 * Hero 0.9s. Optional subtle signature light. Mostly still.
 */
export function initCompany() {
    const root = document.querySelector('[data-co]');

    if (!root || root.dataset.coReady === 'true') {
        return;
    }

    root.dataset.coReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-co-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightSteps();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-co-reveal]');

    if (visual) {
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
    }

    const signature = root.querySelector('[data-co-signature]');

    if (signature) {
        ScrollTrigger.create({
            trigger: signature,
            start: 'top 78%',
            once: true,
            onEnter: lightSteps,
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
