import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 13. Quieter than SaaS Products.
 * Hero platform 0.9s settle. Optional same-foundation beat ~1.6s. Everything else still.
 */
export function initSolutionPlatforms() {
    const root = document.querySelector('[data-plat]');

    if (!root || root.dataset.platReady === 'true') {
        return;
    }

    root.dataset.platReady = 'true';

    const lightContexts = () => {
        root.querySelectorAll('[data-plat-context]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightContexts();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-plat-reveal]');

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

    const signature = root.querySelector('[data-plat-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-plat-context]')];
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

                timeline.call(lightContexts, null, `+=${stepDuration}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
