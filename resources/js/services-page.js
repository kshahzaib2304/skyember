import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 15. Quieter than solution pages.
 * Hero + featured 0.9s. Optional ~1.6s fidelity beat. Rows stay still.
 */
export function initServices() {
    const root = document.querySelector('[data-svc]');

    if (!root || root.dataset.svcReady === 'true') {
        return;
    }

    root.dataset.svcReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-svc-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightSteps();
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

    reveal('[data-svc-reveal]');
    reveal('[data-svc-featured]');

    const fidelity = root.querySelector('[data-svc-fidelity]');

    if (fidelity) {
        const steps = [...fidelity.querySelectorAll('[data-svc-step]')];
        const stepDuration = motion.story / steps.length;

        ScrollTrigger.create({
            trigger: fidelity,
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

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
