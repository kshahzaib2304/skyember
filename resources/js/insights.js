import { ensureMotion, motion, prefersReducedMotion, ScrollTrigger } from './motion';

/**
 * Chunk 25. Insights index — mostly still.
 * Featured thesis 0.9s settle. Rows static. Filter is a quiet state change.
 */
export function initInsights() {
    const root = document.querySelector('[data-ins]');

    if (!root || root.dataset.insReady === 'true') {
        return;
    }

    root.dataset.insReady = 'true';

    const filters = root.querySelectorAll('[data-ins-filter]');
    const rows = root.querySelectorAll('[data-ins-row]');

    filters.forEach((button) => {
        button.addEventListener('click', () => {
            const value = button.dataset.insFilter || 'all';

            filters.forEach((item) => {
                const active = item === button;
                item.classList.toggle('is-active', active);
                item.setAttribute('aria-pressed', active ? 'true' : 'false');
            });

            rows.forEach((row) => {
                const category = row.dataset.insCategory || '';
                const show = value === 'all' || category === value;
                row.hidden = !show;
            });
        });
    });

    if (prefersReducedMotion()) {
        return;
    }

    const gsap = ensureMotion();
    const visual = root.querySelector('[data-ins-reveal]');

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

    document.fonts.ready.then(() => ScrollTrigger.refresh());
}
