{{--
    Chunk 22 - Company About.
    Factual/human company profile — who and what SKYEMBER is.
    People section absent until approved. Process live when routed. Technology gated.
--}}
@extends('layouts.app')

@php
    $title = 'About SKYEMBER | Software Company';
    $description = 'Learn what SKYEMBER is, who we work with, how we approach software, and the principles behind our product, design, and engineering practice.';
    $canonical = route('company.about');

    $build = [
        'Custom software',
        'Digital products',
        'Business platforms',
        'AI-powered workflows',
    ];

    $how = [
        'Product',
        'Design',
        'Engineering',
        'Delivery',
    ];

    $model = [
        [
            'title' => 'Direct',
            'body' => 'The work stays close to the people making the decisions.',
        ],
        [
            'title' => 'Connected',
            'body' => 'Product, design, and engineering understand the same problem.',
        ],
        [
            'title' => 'Accountable',
            'body' => 'The software we build has to make sense after the handoff.',
        ],
    ];

    $audiences = [
        [
            'title' => 'Growing businesses',
            'body' => 'Existing processes are becoming too complex for disconnected tools.',
        ],
        [
            'title' => 'Product teams',
            'body' => 'A digital product needs product design, engineering, or a stronger technical foundation.',
        ],
        [
            'title' => 'Organizations modernizing systems',
            'body' => 'Legacy workflows need to become clearer, connected software.',
        ],
        [
            'title' => 'Teams exploring intelligent automation',
            'body' => 'A repeatable decision or handoff may benefit from automation or AI.',
        ],
    ];

    $feel = [
        [
            'title' => 'Direct',
            'body' => "We say what we understand, what we don't, and what still needs to be decided.",
        ],
        [
            'title' => 'Practical',
            'body' => 'We prefer useful software decisions over elaborate process for its own sake.',
        ],
        [
            'title' => 'Honest',
            'body' => 'Not every problem requires custom software, AI, mobile, or a large platform.',
        ],
    ];

    $orbit = [
        [
            'title' => 'Product',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'Design',
            'href' => route('services.ui-ux-design'),
        ],
        [
            'title' => 'Engineering',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'Web',
            'href' => route('services.web-development'),
        ],
        [
            'title' => 'Mobile',
            'href' => route('services.mobile-development'),
        ],
        [
            'title' => 'Cloud',
            'href' => route('services.cloud-devops'),
        ],
    ];

    $toward = [
        'Better products',
        'Better engineering practice',
        'Better relationships',
    ];

    $areas = [
        [
            'title' => 'About',
            'body' => 'Who we are.',
            'href' => route('company.about'),
            'current' => true,
        ],
        [
            'title' => 'Process',
            'body' => 'How we work.',
            'href' => '/company/process',
            'current' => false,
        ],
        [
            'title' => 'Technology',
            'body' => 'How we make technical decisions.',
            'href' => '/company/technology',
            'current' => false,
        ],
    ];

    $routeExists = function (string $path): bool {
        $normalized = trim(parse_url($path, PHP_URL_PATH) ?: $path, '/');

        foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
            $matchesPath = trim($route->uri(), '/') === $normalized;
            $isGet = in_array('GET', $route->methods(), true);

            if ($matchesPath && $isGet) {
                return true;
            }
        }

        return false;
    };
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@'.'context' => 'https://schema.org',
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
                'name' => 'Company',
                'item' => route('company'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'About',
                'item' => $canonical,
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="coa-page" data-coa aria-labelledby="coa-heading">
        <header class="coa-hero">
            <div class="container-sky">
                <nav class="coa-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('company') }}">Company</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">About</li>
                    </ol>
                </nav>

                <div class="coa-hero-grid">
                    <div class="coa-hero-copy">
                        <p class="text-eyebrow">About SKYEMBER</p>
                        <h1 id="coa-heading" class="coa-title">
                            A software company built around the work.
                        </h1>
                        <p class="text-body coa-support">
                            SKYEMBER designs and engineers software for businesses that need technology shaped around their people, workflows, products, and systems.
                        </p>
                        <div class="coa-hero-actions">
                            <a class="solutions-cta" href="{{ route('work') }}">
                                See our work
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            <a class="solutions-cta solutions-cta-secondary" href="{{ route('contact') }}">
                                Start a conversation
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <figure class="coa-portrait" data-coa-reveal aria-label="SKYEMBER company portrait">
                        <span class="coa-ribbon" aria-hidden="true"></span>
                        <p class="coa-portrait-mark">SKYEMBER</p>
                        <ul class="coa-portrait-words" aria-hidden="true">
                            <li>Software</li>
                            <li>Product</li>
                            <li>Engineering</li>
                            <li>Design</li>
                            <li>Systems</li>
                        </ul>
                        <p class="coa-portrait-line">Serious about the work.</p>
                    </figure>
                </div>
            </div>
        </header>

        <section class="coa-band" aria-labelledby="coa-identity-heading">
            <div class="container-sky">
                <div class="coa-measure">
                    <h2 id="coa-identity-heading" class="text-h2">
                        A technology company with a product mindset.
                    </h2>
                    <p class="text-body coa-lead">
                        We work across software engineering, product design, business systems, digital products, platforms, and intelligent automation. The common thread is not the technology category. It is the problem being solved.
                    </p>
                </div>
                <div class="coa-identity">
                    <div>
                        <p class="coa-kicker">What we build</p>
                        <ul class="coa-identity-list">
                            @foreach ($build as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <p class="coa-kicker">How we work</p>
                        <ul class="coa-identity-list">
                            @foreach ($how as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="coa-band coa-band-tight" aria-labelledby="coa-story-heading">
            <div class="container-sky coa-measure">
                <h2 id="coa-story-heading" class="text-h2">
                    Software should solve the real problem.
                </h2>
                <p class="text-body coa-lead">
                    SKYEMBER exists to build software that fits the reality around it. Businesses rarely experience their problems as isolated screens or features. They experience people, decisions, handoffs, constraints, and changing requirements. We believe the software should understand that whole picture.
                </p>
            </div>
        </section>

        <section class="coa-band" aria-labelledby="coa-model-heading">
            <div class="container-sky">
                <h2 id="coa-model-heading" class="text-h2 coa-measure">
                    How the company stays close to the work.
                </h2>
                <ul class="coa-model">
                    @foreach ($model as $item)
                        <li>
                            <h3 class="coa-model-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="coa-band coa-band-tight" aria-labelledby="coa-audience-heading">
            <div class="container-sky">
                <h2 id="coa-audience-heading" class="text-h2 coa-measure">
                    We work where software has to fit the business.
                </h2>
                <ul class="coa-audience">
                    @foreach ($audiences as $item)
                        <li>
                            <h3 class="coa-audience-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="coa-band" aria-labelledby="coa-feel-heading">
            <div class="container-sky">
                <h2 id="coa-feel-heading" class="text-h2 coa-measure">
                    Clear conversations. Serious decisions.
                </h2>
                <ul class="coa-feel">
                    @foreach ($feel as $item)
                        <li>
                            <h3 class="coa-feel-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="coa-band coa-band-tight" aria-labelledby="coa-orbit-heading">
            <div class="container-sky">
                <div class="coa-measure">
                    <h2 id="coa-orbit-heading" class="text-h2">
                        The company is broader than any one service.
                    </h2>
                    <p class="text-body coa-lead">
                        Product, design, engineering, web, mobile, and cloud are disciplines inside one company — not separate promises.
                    </p>
                </div>
                <div class="coa-orbit" aria-label="SKYEMBER disciplines">
                    <p class="coa-orbit-center">SKYEMBER</p>
                    <ul class="coa-orbit-list">
                        @foreach ($orbit as $item)
                            <li>
                                <a href="{{ $item['href'] }}">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>

        <section class="coa-band" aria-labelledby="coa-toward-heading">
            <div class="container-sky">
                <div class="coa-measure">
                    <h2 id="coa-toward-heading" class="text-h2">
                        Built to become better as the company grows.
                    </h2>
                    <p class="text-body coa-lead">
                        The company will evolve. The standard doesn't need to.
                    </p>
                </div>
                <ul class="coa-toward">
                    @foreach ($toward as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="coa-band coa-band-tight" aria-labelledby="coa-proof-heading">
            <div class="container-sky">
                <h2 id="coa-proof-heading" class="text-h2 coa-measure">
                    The work still says the most.
                </h2>
                <div class="coa-proof">
                    <p class="text-eyebrow">Representative system</p>
                    <h3 class="coa-proof-title">Business Operations Platform</h3>
                    <p class="text-body">Product · UX · Engineering</p>
                    <p class="coa-muted">Pharmacy / Operations</p>
                    <div class="coa-proof-actions">
                        <a class="solutions-cta" href="{{ route('work.business-operations-platform') }}">
                            Explore the work
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                        <a class="solutions-cta solutions-cta-secondary" href="{{ route('work') }}">
                            See all work
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="coa-band" aria-labelledby="coa-areas-heading">
            <div class="container-sky">
                <h2 id="coa-areas-heading" class="text-h2 coa-measure">Company</h2>
                <ul class="coa-areas">
                    @foreach ($areas as $item)
                        @php($ready = $routeExists($item['href']))
                        <li @class(['is-current' => $item['current']])>
                            @if ($item['current'])
                                <h3 class="coa-areas-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @elseif ($ready)
                                <a href="{{ $item['href'] }}">
                                    <h3 class="coa-areas-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['body'] }}</p>
                                </a>
                            @else
                                <h3 class="coa-areas-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="coa-close" aria-labelledby="coa-cta-heading">
            <div class="container-sky coa-close-band">
                <div>
                    <h2 id="coa-cta-heading" class="text-h2">
                        Good work starts with being understood.
                    </h2>
                    <p class="text-body coa-close-copy">
                        Tell us what you're trying to build, change, or improve. We'll start with the problem.
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
