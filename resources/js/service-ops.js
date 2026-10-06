import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 20. Quietest service child.
 * Hero 0.9s. Optional ~1.6s trail. One observability transition.
 */
export function initServiceOps() {
    const root = document.querySelector('[data-ops]');

    if (!root || root.dataset.opsReady === 'true') {
        return;
    }

    root.dataset.opsReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-ops-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    const showHealth = () => {
        const health = root.querySelector('[data-ops-health]');

        if (health) {
            health.textContent = 'Visible';
        }

        root.querySelector('[data-ops-observe]')?.classList.add('is-shown');
    };

    if (prefersReducedMotion()) {
        lightSteps();
        showHealth();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-ops-reveal]');

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

    const signature = root.querySelector('[data-ops-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-ops-step]')];
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

    const observe = root.querySelector('[data-ops-observe]');

    if (observe) {
        ScrollTrigger.create({
            trigger: observe,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                gsap.timeline().call(showHealth, null, `+=${motion.workflow}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
