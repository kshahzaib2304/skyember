import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 18. Quieter than UI/UX.
 * Hero 0.9s. Optional ~1.6s condition change. One state transition.
 */
export function initServiceWeb() {
    const root = document.querySelector('[data-web]');

    if (!root || root.dataset.webReady === 'true') {
        return;
    }

    root.dataset.webReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-web-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    const showSuccess = () => {
        const states = root.querySelector('[data-web-states]');

        if (!states) {
            return;
        }

        states.querySelectorAll('[data-web-state]').forEach((item) => {
            item.classList.toggle('is-active', item.dataset.webState === 'success');
        });

        const copy = states.querySelector('[data-web-state-copy]');

        if (copy) {
            copy.textContent = 'Success · Review saved.';
        }
    };

    if (prefersReducedMotion()) {
        lightSteps();
        showSuccess();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-web-reveal]');

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

    const signature = root.querySelector('[data-web-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-web-step]')];
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

    const states = root.querySelector('[data-web-states]');

    if (states) {
        const loading = states.querySelector('[data-web-state="loading"]');
        const copy = states.querySelector('[data-web-state-copy]');

        ScrollTrigger.create({
            trigger: states,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                const timeline = gsap.timeline();

                timeline.call(
                    () => {
                        states.querySelectorAll('[data-web-state]').forEach((item) => {
                            item.classList.toggle('is-active', item.dataset.webState === 'loading');
                        });

                        if (copy) {
                            copy.textContent = 'Loading · Checking address…';
                        }

                        loading?.classList.add('is-active');
                    },
                    null,
                    motion.pause,
                );

                timeline.call(showSuccess, null, `+=${motion.workflow}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
