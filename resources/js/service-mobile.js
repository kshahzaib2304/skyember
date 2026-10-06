import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 19. Quieter than Web Development.
 * Hero 0.9s. Optional ~1.6s interruption→continuity. One offline→sync beat.
 */
export function initServiceMobile() {
    const root = document.querySelector('[data-mob]');

    if (!root || root.dataset.mobReady === 'true') {
        return;
    }

    root.dataset.mobReady = 'true';

    const lightSteps = () => {
        root.querySelectorAll('[data-mob-step]').forEach((step) => {
            step.classList.add('is-lit');
        });
    };

    const showSynced = () => {
        const surface = root.querySelector('[data-mob-offline]');
        const conn = surface?.querySelector('[data-mob-conn]');
        const action = surface?.querySelector('[data-mob-sync]');

        if (conn) {
            conn.textContent = 'Synced';
        }

        if (action) {
            action.textContent = 'Synced · Continue';
        }

        surface?.classList.add('is-synced');
    };

    if (prefersReducedMotion()) {
        lightSteps();
        showSynced();
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-mob-reveal]');

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

    const signature = root.querySelector('[data-mob-signature]');

    if (signature) {
        const steps = [...signature.querySelectorAll('[data-mob-step]')];
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

    const offline = root.querySelector('[data-mob-offline]');

    if (offline) {
        ScrollTrigger.create({
            trigger: offline,
            start: 'top 78%',
            once: true,
            onEnter: () => {
                gsap.timeline().call(showSynced, null, `+=${motion.workflow}`);
            },
        });
    }

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
