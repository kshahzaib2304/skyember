<section class="relative" aria-labelledby="hero-heading" data-hero>
    {{-- Light intro band: brand-level wordmark + positioning --}}
    <!-- <div class="container-sky pb-8 pt-10 md:pb-10 md:pt-14 lg:pt-16">
        <div class="flex flex-col gap-6 md:max-w-3xl">
            <div class="hero-brand flex items-center gap-3" data-hero-animate>
                <img
                    src="{{ asset('images/brand/mark.png') }}"
                    alt="SKYEMBER mark"
                    width="48"
                    height="48"
                    class="h-12 w-12 object-contain md:h-14 md:w-14"
                    decoding="async"
                    fetchpriority="high"
                >
                <div>
                    <p class="font-display text-xl font-bold tracking-[0.12em] text-foreground md:text-2xl">
                        SKYEMBER
                    </p>
                    <p class="mt-1 text-[0.7rem] font-medium tracking-[0.14em] text-muted uppercase md:tracking-[0.18em]">
                        Software solutions for a smarter tomorrow
                    </p>
                </div>
            </div>
        </div>
    </div> -->

    {{-- Dark atmospheric plane: headline + system visual (hybrid) --}}
    <div class="hero-plane">
        <div class="container-sky relative z-[1] grid gap-12 py-14 md:gap-14 md:py-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,1fr)] lg:items-center lg:gap-16 lg:py-20">
            <div class="flex flex-col items-start">
                <p class="text-eyebrow mb-5 text-accent" data-hero-animate>
                    Custom software · Platforms · Products
                </p>

                <h1 id="hero-heading" class="text-display text-dark-foreground" data-hero-animate>
                    Software built for the way business actually works.
                </h1>

                <p class="text-body mt-6 max-w-xl text-base text-dark-muted md:text-lg" data-hero-animate>
                    We design and engineer reliable digital products, business software,
                    and custom platforms for organizations ready to move beyond off-the-shelf tools.
                </p>

                <div class="mt-9 flex flex-wrap items-center gap-3" data-hero-animate>
                    <x-button href="#final-cta" variant="on-dark">
                        Start a Project
                    </x-button>
                    <x-button href="#product-proof" variant="secondary-on-dark">
                        Explore Our Work
                    </x-button>
                </div>
            </div>

            {{-- Dominant system visual - proves we build software --}}
            <div class="relative min-h-[320px] md:min-h-[380px] lg:min-h-[420px]" data-hero-visual aria-hidden="true">
                <svg class="pointer-events-none absolute inset-0 h-full w-full" viewBox="0 0 560 420" fill="none" role="presentation">
                    <defs>
                        <linearGradient id="skyember-path-gradient" x1="40" y1="360" x2="520" y2="40" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0B3FAE"/>
                            <stop offset="0.45" stop-color="#1B6CFF"/>
                            <stop offset="1" stop-color="#38B6FF"/>
                        </linearGradient>
                    </defs>
                    <path
                        class="hero-path"
                        data-hero-path
                        d="M48 340 C120 340, 140 260, 210 250 S320 280, 340 200 S420 120, 500 90"
                    />
                    <path
                        d="M486 68 L520 88 L492 112"
                        stroke="#38B6FF"
                        stroke-width="2.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        fill="none"
                        data-hero-arrow
                    />
                </svg>

                <div class="hero-ui-frame absolute left-0 top-6 w-[86%] max-w-[360px] p-4 md:left-2 md:top-8 md:p-5" data-hero-panel>
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="h-2 w-2 rounded-full bg-accent"></span>
                            <span class="text-xs font-semibold tracking-wide text-dark-foreground">Operations</span>
                        </div>
                        <span class="text-[11px] text-dark-muted">Live</span>
                    </div>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="hero-metric">
                            <p class="text-[10px] uppercase tracking-wider text-dark-muted">Revenue</p>
                            <p class="mt-1 font-display text-sm font-bold text-dark-foreground">Rs 4.8M</p>
                        </div>
                        <div class="hero-metric">
                            <p class="text-[10px] uppercase tracking-wider text-dark-muted">Orders</p>
                            <p class="mt-1 font-display text-sm font-bold text-dark-foreground">12,840</p>
                        </div>
                        <div class="hero-metric">
                            <p class="text-[10px] uppercase tracking-wider text-dark-muted">Customers</p>
                            <p class="mt-1 font-display text-sm font-bold text-dark-foreground">3,921</p>
                        </div>
                    </div>
                    <div class="mt-4 h-20 overflow-hidden rounded-lg border border-dark-border/80 bg-dark/50 p-3">
                        <svg viewBox="0 0 280 64" class="h-full w-full" fill="none" aria-hidden="true">
                            <path
                                d="M0 48 C28 48, 36 22, 64 28 S110 56, 140 34 S190 8, 220 22 S260 40, 280 18"
                                stroke="#1B6CFF"
                                stroke-width="2"
                                fill="none"
                            />
                            <path
                                d="M0 48 C28 48, 36 22, 64 28 S110 56, 140 34 S190 8, 220 22 S260 40, 280 18 V64 H0 Z"
                                fill="url(#skyember-path-gradient)"
                                opacity="0.18"
                            />
                        </svg>
                    </div>
                </div>

                <div class="hero-ui-frame absolute bottom-2 right-0 w-[72%] max-w-[280px] p-4 md:bottom-6 md:right-2" data-hero-panel-secondary>
                    <p class="text-[10px] uppercase tracking-[0.16em] text-dark-muted">System layers</p>
                    <ul class="mt-3 space-y-2.5">
                        <li class="flex items-center justify-between text-sm text-dark-foreground">
                            <span>Interface</span>
                            <span class="h-px w-10 bg-gradient-to-r from-accent to-primary"></span>
                        </li>
                        <li class="flex items-center justify-between text-sm text-dark-muted">
                            <span>Application</span>
                            <span class="h-px w-14 bg-primary/70"></span>
                        </li>
                        <li class="flex items-center justify-between text-sm text-dark-muted">
                            <span>Services</span>
                            <span class="h-px w-12 bg-primary-deep/80"></span>
                        </li>
                        <li class="flex items-center justify-between text-sm text-dark-muted">
                            <span>Infrastructure</span>
                            <span class="h-px w-16 bg-dark-border"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
