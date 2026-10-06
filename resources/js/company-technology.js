import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 24. Quietest technical page.
 * Hero 0.9s. Representative record 0.9s. Optional ~1.6s trade-off beat.
 */
export function initCompanyTechnology() {
    const root = document.querySelector('[data-cot]');

    if (!root || root.dataset.cotReady === 'true') {
        return;
    }

    root.dataset.cotReady = 'true';

    const showChosen = () => {
        root.querySelectorAll('[data-cot-option]').forEach((option) => {
            if (option.classList.contains('is-chosen')) {
                option.classList.add('is-lit');
            }
        });
    };

    if (prefersReducedMotion()) {
        showChosen();
        return;
    }

    const gsap = ensureMotion();

    const reveal = (selector) => {
        const visual = root.querySelector(selector);

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
    };

    reveal('[data-cot-hero]');
    reveal('[data-cot-reveal]');

    const trade = root.querySelector('[data-cot-trade]');

    if (trade) {
        ScrollTrigger.create({
            trigger: trade,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                gsap.delayedCall(motion.story, showChosen);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
