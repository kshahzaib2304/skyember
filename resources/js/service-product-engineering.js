import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 16. Restrained.
 * Hero 0.9s. Optional ~1.6s signature beat. One interface-state transition.
 */
export function initServiceProductEngineering() {
    const root = document.querySelector('[data-pe]');

    if (!root || root.dataset.peReady === 'true') {
        return;
    }

    root.dataset.peReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-pe-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    const lightStates = () => {
        root.querySelectorAll('[data-pe-state]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightSteps();
        lightStates();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-pe-reveal]');

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

    const signature = root.querySelector('[data-pe-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-pe-step]')];
        const stepDuration = motion.story / steps.length;

        ScrollTrigger.create({
            trigger: signature,
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

                timeline.call(lightSteps, null, `+=${stepDuration}`);
            },
        });
    }

    const states = root.querySelector('[data-pe-states]');

    if (states) {
        const steps = [...states.querySelectorAll('[data-pe-state]')];
        const label = states.querySelector('[data-pe-state-label]');
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
                            steps.forEach((item) => item.classList.remove('is-active'));
                            step.classList.add('is-active');

                            if (label) {
                                label.textContent = step.textContent.trim();
                            }
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
