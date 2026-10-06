import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 9. Quieter than Product Proof.
 * Reveals large surfaces (0.9s). Optional logic-trail highlight (~1.6s), then still.
 * Queries data-study hooks only.
 */
export function initCaseBop() {
    const root = document.querySelector('[data-study]');

    if (!root || root.dataset.studyReady === 'true') {
        return;
    }

    root.dataset.studyReady = 'true';

    const lightTrail = () => {
        root.querySelectorAll('[data-study-trail-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
        root.querySelectorAll('[data-study-dep]').forEach((dep) => {
            dep.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightTrail();
        return;
    }

    const gsap = ensureMotion();

    root.querySelectorAll('[data-study-reveal]').forEach((el) => {
        const below = el.getBoundingClientRect().top > window.innerHeight * 0.85;

        gsap.set(el, { transformOrigin: '50% 55%' });

        if (below) {
            gsap.set(el, { scale: 0.94, opacity: 0 });
        }

        ScrollTrigger.create({
            trigger: el,
            start: 'top 82%',
            once: true,
            onEnter: () => {
                gsap.to(el, {
                    scale: 1,
                    opacity: 1,
                    duration: motion.reveal,
                    ease: motion.ease,
                    onComplete: () => gsap.set(el, { clearProps: 'transform,opacity' }),
                });
            },
        });
    });

    const trail = root.querySelector('[data-study-trail]');

    if (trail) {
        const steps = [...trail.querySelectorAll('[data-study-trail-step]')];
        const deps = [...root.querySelectorAll('[data-study-dep]')];
        const depKeys = [null, 'payment', 'batch', 'stock', 'dispatch'];
        const stepDuration = motion.story / steps.length;

        ScrollTrigger.create({
            trigger: trail,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                const timeline = gsap.timeline();

                steps.forEach((step, index) => {
                    timeline.call(
                        () => {
                            steps.forEach((item) => item.classList.remove('is-lit'));
                            step.classList.add('is-lit');

                            deps.forEach((dep) => dep.classList.remove('is-lit'));

                            const key = depKeys[index];

                            if (key) {
                                const match = root.querySelector(`[data-study-dep="${key}"]`);

                                if (match) {
                                    match.classList.add('is-lit');
                                }
                            }
                        },
                        null,
                        index === 0 ? 0 : `+=${stepDuration}`,
                    );
                });

                timeline.call(lightTrail, null, `+=${stepDuration}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
