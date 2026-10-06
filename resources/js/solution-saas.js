import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 12. Quieter than Business Software.
 * Hero product 0.9s settle. Optional product-state beat ~1.6s. Everything else still.
 */
export function initSolutionSaas() {
    const root = document.querySelector('[data-saas]');

    if (!root || root.dataset.saasReady === 'true') {
        return;
    }

    root.dataset.saasReady = 'true';

    const lightStates = () => {
        root.querySelectorAll('[data-saas-state]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightStates();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-saas-reveal]');

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

    const states = root.querySelector('[data-saas-states]');

    if (states) {
        const steps = [...states.querySelectorAll('[data-saas-state]')];
        const stepDuration = motion.story / steps.length;

        ScrollTrigger.create({
            trigger: states,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                const timeline = gsap.timeline();

                steps.forEach((step, index) => {
                    timeline.call(
                        () => {
                            steps.forEach((item) => item.classList.remove('is-lit'));
                            step.classList.add('is-lit');
                        },
                        null,
                        index === 0 ? 0 : `+=${stepDuration}`,
                    );
                });

                timeline.call(lightStates, null, `+=${stepDuration}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
