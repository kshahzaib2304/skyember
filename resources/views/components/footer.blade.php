<footer class="border-t border-border bg-surface">
    <div class="container-sky flex flex-col gap-6 py-10 sm:flex-row sm:items-center sm:justify-between md:py-12">
        <a href="{{ url('/') }}" class="flex items-center gap-2.5" aria-label="SKYEMBER home">
            <img
                src="{{ asset('images/brand/mark.png') }}"
                alt=""
                width="28"
                height="28"
                class="h-7 w-7 object-contain"
                loading="lazy"
                decoding="async"
            >
            <span class="font-display text-sm font-bold tracking-[0.08em] text-foreground">SKYEMBER</span>
        </a>

        <a href="mailto:hello@skyember.com" class="text-sm font-medium text-foreground">
            hello@skyember.com
        </a>
    </div>

    <div class="border-t border-border">
        <div class="container-sky flex flex-col gap-2 py-5 text-small sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} SKYEMBER. All rights reserved.</p>
            <p class="tracking-[0.12em] uppercase">Software solutions for a smarter tomorrow</p>
        </div>
    </div>
</footer>
