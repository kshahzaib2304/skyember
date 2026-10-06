import gsap from 'gsap';
import { motion, prefersReducedMotion } from './motion';

export function initHero() {
    const root = document.querySelector('[data-hero]');
    if (!root) {
        return;
    }

    const animated = root.querySelectorAll('[data-hero-animate]');
    const panels = root.querySelectorAll('[data-hero-panel], [data-hero-panel-secondary]');
    const path = root.querySelector('[data-hero-path]');
    const arrow = root.querySelector('[data-hero-arrow]');
    const visual = root.querySelector('[data-hero-visual]');

    if (prefersReducedMotion()) {
        gsap.set([animated, panels, visual, path, arrow].filter(Boolean), {
            clearProps: 'all',
            opacity: 1,
            y: 0,
            scale: 1,
        });
        return;
    }

    const pathLength = path ? path.getTotalLength() : 0;

    if (path && pathLength) {
        gsap.set(path, {
            strokeDasharray: pathLength,
            strokeDashoffset: pathLength,
            opacity: 0.9,
        });
    }

    gsap.set(animated, { opacity: 0, y: 22 });
    gsap.set(panels, { opacity: 0, y: 28 });
    gsap.set(visual, { opacity: 0.35 });
    if (arrow) {
        gsap.set(arrow, { opacity: 0, scale: 0.85, transformOrigin: 'center' });
    }

    const timeline = gsap.timeline({ defaults: { ease: motion.ease } });

    timeline.to(animated, {
        opacity: 1,
        y: 0,
        duration: motion.entrance,
        stagger: motion.stagger,
    });

    timeline.to(
        visual,
        { opacity: 1, duration: motion.reveal },
        motion.reveal,
    );

    timeline.to(
        panels,
        {
            opacity: 1,
            y: 0,
            duration: motion.reveal,
            stagger: motion.stagger,
        },
        motion.entrance,
    );

    if (path && pathLength) {
        timeline.to(
            path,
            {
                strokeDashoffset: 0,
                duration: motion.story,
                ease: motion.easeInOut,
            },
            motion.entrance + motion.pause,
        );
    }

    if (arrow) {
        timeline.to(
            arrow,
            { opacity: 1, scale: 1, duration: motion.pause },
            motion.entrance + motion.pause + motion.story - 0.2,
        );
    }
}

export function initMobileNav() {
    const toggle = document.querySelector('[data-nav-toggle]');
    const panel = document.querySelector('[data-mobile-nav]');

    if (!toggle || !panel) {
        return;
    }

    const setOpen = (open) => {
        panel.classList.toggle('hidden', !open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    };

    toggle.addEventListener('click', () => {
        setOpen(panel.classList.contains('hidden'));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !panel.classList.contains('hidden')) {
            setOpen(false);
            toggle.focus();
        }
    });

    panel.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener('click', () => setOpen(false));
    });
}
