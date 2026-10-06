import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 11. Quieter than Product Proof.
 * Reveals surfaces (0.9s). Optional related-records highlight (~1.6s), then still.
 */
export function initSolutionBusinessSoftware() {
    const root = document.querySelector('[data-bizsoft]');

    if (!root || root.dataset.bizsoftReady === 'true') {
        return;
    }

    root.dataset.bizsoftReady = 'true';

    const lightChain = () => {
        root.querySelectorAll('[data-bizsoft-chain-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    if (prefersReducedMotion()) {
        lightChain();
        return;
    }

    const gsap = ensureMotion();

    root.querySelectorAll('[data-bizsoft-reveal]').forEach((el) => {
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

    const chain = root.querySelector('[data-bizsoft-chain]');

    if (chain) {
        const steps = [...chain.querySelectorAll('[data-bizsoft-chain-step]')];
        const stepDuration = motion.story / steps.length;

        ScrollTrigger.create({
            trigger: chain,
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

                timeline.call(lightChain, null, `+=${stepDuration}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
