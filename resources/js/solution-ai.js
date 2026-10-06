import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 14. Quieter than Custom Platforms.
 * Hero console 0.9s settle. Optional ~1.6s workflow beat. Evaluation cases light once.
 */
export function initSolutionAi() {
    const root = document.querySelector('[data-aiauto]');

    if (!root || root.dataset.aiautoReady === 'true') {
        return;
    }

    root.dataset.aiautoReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-aiauto-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    const lightEvals = () => {
        root.querySelectorAll('[data-aiauto-eval-case]').forEach((item) => {
            item.classList.add('is-shown');
        });
    };

    if (prefersReducedMotion()) {
        lightSteps();
        lightEvals();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-aiauto-reveal]');

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

    const signature = root.querySelector('[data-aiauto-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-aiauto-step]')];
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

    const evalSurface = root.querySelector('[data-aiauto-eval]');

    if (evalSurface) {
        const cases = [...evalSurface.querySelectorAll('[data-aiauto-eval-case]')];

        ScrollTrigger.create({
            trigger: evalSurface,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                const timeline = gsap.timeline();

                cases.forEach((item, index) => {
                    timeline.call(
                        () => item.classList.add('is-shown'),
                        null,
                        index === 0 ? 0 : `+=${motion.workflow}`,
                    );
                });
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
