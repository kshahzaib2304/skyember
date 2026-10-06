{{--
    Chunk 18 - Web Development service.
    Deliver the product experience through the web — not “we code websites.”
    Cross-links to UI/UX Design and Product Engineering are live.
--}}
@extends('layouts.app')

@php
    $title = 'Web Development Services | SKYEMBER';
    $description = 'Responsive web development focused on application behavior, performance, accessibility, SEO, and production-ready frontend experiences.';
    $canonical = route('services.web-development');

    $problems = [
        [
            'index' => '01',
            'title' => 'Space changes',
            'body' => 'A layout designed for a large canvas has to become intentional at smaller widths rather than simply collapsing.',
        ],
        [
            'index' => '02',
            'title' => 'Content changes',
            'body' => 'Real content has different lengths, images fail, records grow, states vary, and users arrive from many contexts.',
        ],
        [
            'index' => '03',
            'title' => 'Conditions change',
            'body' => 'Network speed, browser behavior, device capabilities, accessibility settings, and interaction methods all affect the experience.',
        ],
    ];

    $when = [
        'The product needs a responsive web application, not a static presentation.',
        'The interface has to work consistently across desktop, tablet, mobile, and different browsers.',
        'Performance, accessibility, SEO, or content behavior are part of the product requirement.',
        'A designed experience now needs production-quality implementation and ongoing iteration.',
    ];

    $activities = [
        [
            'index' => '01',
            'id' => 'web-responsive',
            'title' => 'Responsive implementation',
            'body' => 'Layouts, components, content, interactions, and states adapt intentionally to the viewport — responsive web development that keeps hierarchy intact.',
            'visual' => 'responsive',
        ],
        [
            'index' => '02',
            'id' => 'web-behavior',
            'title' => 'Application behavior',
            'body' => 'Forms, navigation, data states, loading, validation, errors, and user actions behave correctly in the browser during web application development.',
            'visual' => 'behavior',
        ],
        [
            'index' => '03',
            'id' => 'web-performance',
            'title' => 'Performance',
            'body' => 'Images, fonts, scripts, rendering, caching, and network behavior are treated as part of the experience — web performance as product quality.',
            'visual' => 'performance',
        ],
        [
            'index' => '04',
            'id' => 'web-accessibility',
            'title' => 'Accessibility',
            'body' => 'Keyboard behavior, focus, semantics, labels, contrast, motion preferences, and assistive technology support are designed into accessible websites.',
            'visual' => 'accessibility',
        ],
        [
            'index' => '05',
            'id' => 'web-content',
            'title' => 'Content + discoverability',
            'body' => 'Important content remains crawlable, structured, linkable, and understandable — technical SEO as part of frontend development.',
            'visual' => 'content',
        ],
    ];

    $conditions = [
        [
            'label' => 'Wide',
            'detail' => 'Full navigation, multiple columns, rich context',
        ],
        [
            'label' => 'Compact',
            'detail' => 'Reduced navigation, rebalanced content, same core task',
        ],
        [
            'label' => 'Mobile',
            'detail' => 'Focused hierarchy, touch-first actions, same product intent',
        ],
    ];

    $perf = [
        ['title' => 'Load', 'body' => 'Render what matters first.'],
        ['title' => 'Respond', 'body' => 'Keep interactions immediate.'],
        ['title' => 'Stabilize', 'body' => 'Prevent layout movement.'],
        ['title' => 'Deliver', 'body' => 'Use the right asset at the right time.'],
    ];

    $a11y = [
        ['title' => 'Keyboard', 'body' => 'Every important flow can be operated without a mouse.'],
        ['title' => 'Focus', 'body' => 'The current interaction remains visible.'],
        ['title' => 'Semantics', 'body' => 'The structure makes sense beyond the visual layer.'],
        ['title' => 'Motion', 'body' => 'Reduced-motion preferences are respected.'],
        ['title' => 'Targets', 'body' => 'Touch interactions have enough room to work.'],
    ];

    $states = ['Ready', 'Loading', 'Empty', 'Validation', 'Error', 'Success', 'Offline / Retry'];

    $frontend = [
        'Component architecture',
        'Responsive behavior',
        'Data states',
        'Browser compatibility',
        'Performance',
        'Accessibility',
        'Testing',
        'Error recovery',
    ];

    $stack = [
        'Interface',
        'Application behavior',
        'API / data',
        'Authentication',
        'Business rules',
        'Web response',
    ];

    $engage = [
        ['title' => 'Understand', 'body' => 'What needs to happen?'],
        ['title' => 'Structure', 'body' => 'What must the browser render?'],
        ['title' => 'Build', 'body' => 'Turn the design into resilient web behavior.'],
        ['title' => 'Validate', 'body' => 'Test devices, browsers, states, and edge cases.'],
        ['title' => 'Refine', 'body' => 'Improve performance and interaction quality.'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Web development services',
                'serviceType' => 'Web development',
                'description' => $description,
                'url' => $canonical,
                'provider' => [
                    '@type' => 'Organization',
                    'name' => 'SKYEMBER',
                    'url' => url('/'),
                ],
            ],
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => url('/'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => 'Services',
                        'item' => route('services'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Web Development',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="web-page" data-web aria-labelledby="web-heading">
        <header class="web-hero">
            <div class="container-sky">
                <nav class="web-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Web Development</li>
                    </ol>
                </nav>

                <div class="web-hero-grid">
                    <div class="web-hero-copy">
                        <p class="text-eyebrow">Web Development</p>
                        <h1 id="web-heading" class="web-title">
                            Web experiences built for the real world.
                        </h1>
                        <p class="text-body web-support">
                            We build responsive web applications and digital experiences that remain clear, fast, accessible, and dependable across browsers, devices, content, and real-world conditions.
                        </p>
                        <div class="web-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Start a conversation
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            <a class="solutions-cta solutions-cta-secondary" href="{{ route('work') }}">
                                See our work
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <figure class="web-surface" data-web-reveal aria-label="One web product adapting from wide to compact">
                        <div class="web-surface-bar">
                            <p class="web-surface-name">Web experience</p>
                            <p class="web-muted">The design survives the browser</p>
                        </div>
                        <div class="web-hero-adapt" data-web-adapt>
                            <div class="web-adapt-wide">
                                <p class="web-kicker">Wide</p>
                                <div class="web-adapt-cols">
                                    <div>
                                        <p class="web-mini">Nav</p>
                                        <p class="web-surface-title">Orders</p>
                                    </div>
                                    <div>
                                        <p class="web-mini">Task</p>
                                        <p class="web-surface-title">Review OR-2841</p>
                                    </div>
                                    <div>
                                        <p class="web-mini">Context</p>
                                        <p class="web-surface-title">Northline Co.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="web-adapt-compact">
                                <p class="web-kicker">Compact</p>
                                <p class="web-surface-title">Review OR-2841</p>
                                <p class="web-primary-action">Continue</p>
                                <p class="web-muted">Same product. Adapted experience.</p>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="web-band" aria-labelledby="web-problem-heading">
            <div class="container-sky">
                <h2 id="web-problem-heading" class="text-h2 web-measure">
                    The design changes when the screen becomes real.
                </h2>
                <ol class="web-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="web-index">{{ $item['index'] }}</p>
                            <h3 class="web-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-when-heading">
            <div class="container-sky">
                <h2 id="web-when-heading" class="text-h2 web-measure">
                    Bring Web Development in when the experience has to work beyond the mockup.
                </h2>
                <ol class="web-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="web-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-place-heading">
            <div class="container-sky">
                <div class="web-measure">
                    <h2 id="web-place-heading" class="text-h2">The web is part of the product, not the delivery format.</h2>
                    <p class="text-body web-lead">
                        Web development and web app development that treat the browser as the environment the product has to survive — not a wrapper around a design file.
                    </p>
                </div>

                <div class="web-anatomy">
                    @foreach ($activities as $item)
                        <article class="web-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="web-beat-copy">
                                <p class="web-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>
                            <figure class="web-panel" aria-hidden="true">
                                @if ($item['visual'] === 'responsive')
                                    <p class="web-kicker">Viewport</p>
                                    <ul class="web-list">
                                        <li><span>Three columns</span><span>Wide</span></li>
                                        <li class="is-current"><span>One column</span><span>Compact</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'behavior')
                                    <p class="web-kicker">Action</p>
                                    <ol class="web-steps">
                                        <li class="is-done">Ready</li>
                                        <li class="is-current">Loading</li>
                                        <li>Success / failure</li>
                                    </ol>
                                @elseif ($item['visual'] === 'performance')
                                    <p class="web-kicker">Priority</p>
                                    <ol class="web-steps">
                                        <li class="is-current">Content</li>
                                        <li>Assets</li>
                                        <li>Deferred</li>
                                    </ol>
                                @elseif ($item['visual'] === 'accessibility')
                                    <p class="web-kicker">Input</p>
                                    <ul class="web-list">
                                        <li class="is-current"><span>Focus</span><span>Visible</span></li>
                                        <li><span>Keyboard</span><span>Operable</span></li>
                                        <li><span>Pointer</span><span>Available</span></li>
                                    </ul>
                                @else
                                    <p class="web-kicker">Document</p>
                                    <ul class="web-list">
                                        <li class="is-current"><span>Heading</span><span>H1</span></li>
                                        <li><span>Section</span><span>H2</span></li>
                                        <li><span>Path</span><span>Link</span></li>
                                    </ul>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-signature-heading">
            <div class="container-sky">
                <div class="web-measure">
                    <h2 id="web-signature-heading" class="text-h2">One experience. Different conditions.</h2>
                    <p class="text-body web-lead">
                        Same interface logic adapting. Not three devices. The product intent stays; the composition changes.
                    </p>
                </div>
                <ol class="web-signature" data-web-signature aria-label="Same product adapting across conditions">
                    @foreach ($conditions as $step)
                        <li data-web-step>
                            <p class="web-step-label">{{ $step['label'] }}</p>
                            <p class="web-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-fast-heading">
            <div class="container-sky">
                <div class="web-measure">
                    <h2 id="web-fast-heading" class="text-h2">Fast is part of the interface.</h2>
                    <p class="text-body web-lead">
                        Performance is not a score added after development. It changes how pages are structured, what loads first, how images are delivered, and how interaction is implemented.
                    </p>
                </div>
                <ul class="web-perf">
                    @foreach ($perf as $item)
                        <li>
                            <p class="web-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-a11y-heading">
            <div class="container-sky">
                <h2 id="web-a11y-heading" class="text-h2 web-measure">
                    The browser should not decide who can use the product.
                </h2>
                <ul class="web-a11y">
                    @foreach ($a11y as $item)
                        <li>
                            <p class="web-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-seo-heading">
            <div class="container-sky">
                <div class="web-measure">
                    <h2 id="web-seo-heading" class="text-h2">Search should understand what the visitor can see.</h2>
                    <p class="text-body web-lead">
                        Important content belongs in semantic HTML, not inside a canvas or an interaction the crawler cannot meaningfully interpret.
                    </p>
                </div>
                <figure class="web-seo" aria-label="Representative page with semantic structure">
                    <p class="web-kicker">Document</p>
                    <p class="web-panel-title">H1 · Order review</p>
                    <ul class="web-list">
                        <li class="is-current"><span>Article</span><span>Structure</span></li>
                        <li><span>H2</span><span>Exception</span></li>
                        <li><span>Link</span><span>Related</span></li>
                        <li><span>Image</span><span>Named</span></li>
                        <li><span>Structured data</span><span>Service</span></li>
                    </ul>
                    <p class="web-muted">Content → semantic structure → internal links → metadata → crawlable page.</p>
                </figure>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-states-heading">
            <div class="container-sky">
                <div class="web-measure">
                    <h2 id="web-states-heading" class="text-h2">Real web products have states.</h2>
                    <p class="text-body web-lead">
                        Those states have to actually work in the browser — not only in the design file.
                    </p>
                </div>
                <figure class="web-states" data-web-states aria-label="One web interaction across product states">
                    <p class="web-kicker">Submit review</p>
                    <ul class="web-state-list">
                        @foreach ($states as $state)
                            <li @if ($state === 'Ready') class="is-active" data-web-state="ready" @elseif ($state === 'Loading') data-web-state="loading" @elseif ($state === 'Success') data-web-state="success" @endif>{{ $state }}</li>
                        @endforeach
                    </ul>
                    <p class="web-state-copy" data-web-state-copy>Ready · Review can be submitted.</p>
                </figure>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-front-heading">
            <div class="container-sky web-measure">
                <h2 id="web-front-heading" class="text-h2">Production frontend is more than markup.</h2>
                <p class="text-body web-lead">
                    Frontend engineering covers the production concerns that keep a web application coherent after launch.
                </p>
                <ul class="web-chips">
                    @foreach ($frontend as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-system-heading">
            <div class="container-sky web-measure">
                <h2 id="web-system-heading" class="text-h2">The web experience depends on the system behind it.</h2>
                <p class="text-body web-lead">
                    Browser experience and application behavior meet here — the interface is only the first expression of the response.
                </p>
                <ol class="web-layers">
                    @foreach ($stack as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative web experience</p>
                <div class="web-rep-grid">
                    <div class="web-rep-copy">
                        <h2 id="web-rep-heading" class="text-h2">Designed to survive outside the happy path.</h2>
                        <p class="text-body">
                            Navigation, realistic content, a form action, loading, validation, and a successful response — in one representative web application.
                        </p>
                        <p class="web-disclosure">Representative interface — not a published client engagement.</p>
                    </div>
                    <figure class="web-surface web-surface-deep" aria-label="Representative interface">
                        <div class="web-surface-bar">
                            <p class="web-surface-name">Representative interface</p>
                            <p class="web-muted">Order review</p>
                        </div>
                        <div class="web-surface-body">
                            <p class="web-kicker">Nav · Orders · OR-2841</p>
                            <p class="web-surface-title">Shipping exception</p>
                            <p class="web-muted">Item 2 of 3 · Address incomplete</p>
                            <p class="web-field">Confirm destination</p>
                            <p class="web-muted">Loading · Checking address…</p>
                            <p class="web-primary-action">Saved · Continue</p>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-ux-heading">
            <div class="container-sky web-measure">
                <h2 id="web-ux-heading" class="text-h2">Design and implementation should agree.</h2>
                <p class="text-body web-lead">
                    We work from the interaction model and design system into production behavior, so visual decisions remain coherent when real data, states, responsive constraints, and browser behavior enter the product.
                </p>
                <a class="solutions-cta" href="{{ route('services.ui-ux-design') }}">
                    See UI/UX Design
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-pe-heading">
            <div class="container-sky web-measure">
                <h2 id="web-pe-heading" class="text-h2">When the web is part of the larger product.</h2>
                <p class="text-body web-lead">
                    For systems with deeper product, domain, backend, or architectural requirements, Web Development can work as one part of a broader product-engineering effort.
                </p>
                <a class="solutions-cta" href="{{ route('services.product-engineering') }}">
                    See Product Engineering
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="web-band web-band-tight" aria-labelledby="web-honest-heading">
            <div class="container-sky web-measure">
                <h2 id="web-honest-heading" class="text-h2">Sometimes the web is not the right surface.</h2>
                <p class="text-body">
                    If the primary experience belongs in a native mobile workflow, an internal system, or an existing platform, forcing it into a web application may add friction rather than remove it.
                </p>
            </div>
        </section>

        <section class="web-band" aria-labelledby="web-engage-heading">
            <div class="container-sky web-measure">
                <h2 id="web-engage-heading" class="text-h2">Start with the experience the browser needs to deliver.</h2>
                <ol class="web-engage">
                    @foreach ($engage as $item)
                        <li>
                            <p class="web-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="web-close" aria-labelledby="web-cta-heading">
            <div class="container-sky web-close-band">
                <div>
                    <h2 id="web-cta-heading" class="text-h2">Have a web experience worth building properly?</h2>
                    <p class="text-body web-close-copy">
                        Tell us what the product needs to do in the browser. We'll help shape the right implementation.
                    </p>
                </div>
                <a class="solutions-cta" href="{{ route('contact') }}">
                    Start a conversation
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>
    </article>
@endsection
