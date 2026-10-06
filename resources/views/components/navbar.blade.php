@php
    $onHome = request()->routeIs('home');
    $onContact = request()->routeIs('contact');
    $onSolutions = request()->routeIs('solutions')
        || request()->routeIs('solutions.business-software')
        || request()->routeIs('solutions.saas-products')
        || request()->routeIs('solutions.custom-platforms')
        || request()->routeIs('solutions.ai-automation');
    $onServices = request()->routeIs('services')
        || request()->routeIs('services.product-engineering')
        || request()->routeIs('services.ui-ux-design')
        || request()->routeIs('services.web-development')
        || request()->routeIs('services.mobile-development')
        || request()->routeIs('services.cloud-devops');
    $onWork = request()->routeIs('work') || request()->routeIs('work.business-operations-platform');
    $onCompany = request()->routeIs('company')
        || request()->routeIs('company.about')
        || request()->routeIs('company.process')
        || request()->routeIs('company.technology');
    $onInsights = request()->routeIs('insights') || request()->routeIs('insights.show');

    $links = [
        ['label' => 'Solutions', 'href' => route('solutions'), 'current' => $onSolutions],
        ['label' => 'Services', 'href' => route('services'), 'current' => $onServices],
        ['label' => 'Work', 'href' => route('work'), 'current' => $onWork],
        ['label' => 'Company', 'href' => route('company'), 'current' => $onCompany],
        ['label' => 'Insights', 'href' => route('insights'), 'current' => $onInsights],
    ];

    $talkHref = $onContact ? '#brief' : ($onHome ? '#final-cta' : route('contact'));
@endphp

<header class="sticky top-0 z-50 border-b border-border/80 bg-background/85 backdrop-blur-md">
    <div class="container-sky flex h-16 items-center justify-between gap-4 md:h-[4.25rem]">
        <a href="{{ url('/') }}" class="group flex items-center gap-2.5" aria-label="SKYEMBER home">
            <img
                src="{{ asset('images/brand/mark.png') }}"
                alt=""
                width="36"
                height="36"
                class="h-9 w-9 object-contain"
                decoding="async"
            >
            <span class="font-display text-[1.05rem] font-bold tracking-[0.04em] text-foreground md:text-[1.125rem]">
                SKYEMBER
            </span>
        </a>

        <nav class="hidden items-center gap-8 lg:flex" aria-label="Primary">
            @foreach ($links as $link)
                <a
                    href="{{ $link['href'] }}"
                    @if (! empty($link['coming'])) aria-disabled="true" tabindex="-1" @endif
                    @if (! empty($link['current'])) aria-current="page" @endif
                    class="text-sm font-medium transition-colors {{ ! empty($link['current']) ? 'text-foreground' : 'text-muted hover:text-foreground' }} {{ ! empty($link['coming']) ? 'pointer-events-none opacity-55' : '' }}"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <x-button href="{{ $talkHref }}" variant="primary" class="!px-4 !py-2.5 text-sm" :aria-current="$onContact ? 'page' : null">
                Let’s Talk
            </x-button>

            <button
                type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-md border border-border text-foreground lg:hidden"
                data-nav-toggle
                aria-expanded="false"
                aria-controls="mobile-nav"
                aria-label="Open menu"
            >
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path d="M3 5h14M3 10h14M3 15h14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-nav" class="hidden border-t border-border bg-background lg:hidden" data-mobile-nav>
        <nav class="container-sky flex flex-col gap-1 py-4" aria-label="Mobile">
            @foreach ($links as $link)
                <a
                    href="{{ $link['href'] }}"
                    @if (! empty($link['coming'])) aria-disabled="true" tabindex="-1" @endif
                    @if (! empty($link['current'])) aria-current="page" @endif
                    class="rounded-md px-3 py-3 text-sm font-medium {{ ! empty($link['current']) ? 'text-foreground' : 'text-muted' }} {{ ! empty($link['coming']) ? 'pointer-events-none opacity-55' : 'hover:bg-surface-hover hover:text-foreground' }}"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="{{ $talkHref }}" @if ($onContact) aria-current="page" @endif class="rounded-md px-3 py-3 text-sm font-semibold text-primary">
                Let’s Talk
            </a>
        </nav>
    </div>
</header>
