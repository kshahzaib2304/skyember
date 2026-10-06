import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export { ScrollTrigger };

/**
 * Shared motion scale. Sections import these values instead of inventing durations.
 * The eye needs time to see what appeared, what changed, and why.
 * After a sequence: stillness. Reduced motion skips the sequence entirely.
 */
export const motion = {
    ease: 'power2.out',
    easeInOut: 'power2.inOut',
    hover: 0.22,
    stagger: 0.18,
    reveal: 0.9,
    entrance: 1.1,
    story: 1.6,
    transition: 0.8,
    pause: 0.45,
    hold: 0.7,
    workflow: 0.65,
};

let registered = false;

export function ensureMotion() {
    if (!registered) {
        gsap.registerPlugin(ScrollTrigger);
        registered = true;
    }

    return gsap;
}

export function prefersReducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
}
