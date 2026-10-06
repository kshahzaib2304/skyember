import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 17. Quieter than Product Engineering.
 * Hero 0.9s. Optional ~1.6s signature. Validation one state change.
 */
export function initServiceUiUx() {
    const root = document.querySelector('[data-ux]');

    if (!root || root.dataset.uxReady === 'true') {
        return;
    }

    root.dataset.uxReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-ux-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightSteps();
        root.querySelector('[data-ux-response]')?.classList.add('is-shown');
        root.querySelector('[data-ux-retest]')?.classList.add('is-shown');
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-ux-reveal]');

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

    const signature = root.querySelector('[data-ux-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-ux-step]')];
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

    const validation = root.querySelector('[data-ux-validation]');

    if (validation) {
        const response = validation.querySelector('[data-ux-response]');
        const retest = validation.querySelector('[data-ux-retest]');

        ScrollTrigger.create({
            trigger: validation,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                const timeline = gsap.timeline();

                timeline.call(() => response?.classList.add('is-shown'), null, motion.pause);
                timeline.call(() => retest?.classList.add('is-shown'), null, `+=${motion.workflow}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
