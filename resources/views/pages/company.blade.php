{{--
    Chunk 21 - Company.
    Principle-led institutional page — why SKYEMBER chooses to work this way.
    About live when routed. Process / Technology remain gated. Careers absent.
--}}
@extends('layouts.app')

@php
    $title = 'About SKYEMBER | Software Company & Product Engineering';
    $description = 'Learn how SKYEMBER approaches software, product design, engineering, and technology—and the principles behind the systems we build.';
    $canonical = route('company');

    $beliefs = [
        [
            'index' => '01',
            'title' => 'Start with the problem',
            'body' => 'The software should be shaped around a real need before technology determines the answer.',
        ],
        [
            'index' => '02',
            'title' => 'Make complexity understandable',
            'body' => 'A sophisticated system does not have to become a confusing experience.',
        ],
        [
            'index' => '03',
            'title' => 'Prove the important parts',
            'body' => 'Interfaces, workflows, decisions, and architecture become stronger when they are made visible and tested.',
        ],
        [
            'index' => '04',
            'title' => 'Build for what comes next',
            'body' => 'The first release matters, but so do the changes, new users, new requirements, and maintenance that follow it.',
        ],
    ];

    $system = [
        'The problem',
        'The people',
        'The flow',
        'The product',
        'The system',
        'The outcome',
    ];

    $disciplines = [
        [
            'title' => 'Product Engineering',
            'line' => 'The product has to become real.',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'UI/UX Design',
            'line' => 'The experience has to make sense.',
            'href' => route('services.ui-ux-design'),
        ],
        [
            'title' => 'Web Development',
            'line' => 'The experience has to survive the browser.',
            'href' => route('services.web-development'),
        ],
        [
            'title' => 'Mobile Development',
            'line' => 'The product has to work in the moment.',
            'href' => route('services.mobile-development'),
        ],
        [
            'title' => 'Cloud & DevOps',
            'line' => 'The software has to remain dependable in production.',
            'href' => route('services.cloud-devops'),
        ],
    ];

    $connected = [
        [
            'title' => 'Stay close to the problem',
            'body' => 'Understanding comes before implementation.',
        ],
        [
            'title' => 'Make decisions visible',
            'body' => 'Important assumptions should become things the team can inspect, prototype, test, or discuss.',
        ],
        [
            'title' => 'Leave the system better than we found it',
            'body' => "New work should improve the product's ability to evolve rather than quietly increase its complexity.",
        ],
    ];

    $dont = [
        'No technology chosen just because it is fashionable.',
        'No interface polished before the underlying problem is understood.',
        'No automation added simply because it is possible.',
        'No larger system sold when a smaller answer is enough.',
    ];

    $explore = [
        [
            'title' => 'About',
            'body' => 'The company, its story, and the people behind the work.',
            'href' => '/company/about',
        ],
        [
            'title' => 'Process',
            'body' => 'How we move from problem to production.',
            'href' => '/company/process',
        ],
        [
            'title' => 'Technology',
            'body' => 'How we think about tools, architecture, and technical choices.',
            'href' => '/company/technology',
        ],
    ];

    $routeExists = function (string $path): bool {
        foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
            $matchesPath = trim($route->uri(), '/') === trim($path, '/');
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
        '@graph' => [
            [
                '@type' => 'WebSite',
                'name' => 'SKYEMBER',
                'url' => url('/'),
                'description' => $description,
                'publisher' => [
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
                        'name' => 'Company',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="co-page" data-co aria-labelledby="co-heading">
        <header class="co-hero">
            <div class="container-sky">
                <nav class="co-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Company</li>
                    </ol>
                </nav>

                <div class="co-hero-grid">
                    <div class="co-hero-copy">
                        <p class="text-eyebrow">The company behind the software</p>
                        <h1 id="co-heading" class="co-title">
                            We build software with a long-term view.
                        </h1>
                        <p class="text-body co-support">
                            SKYEMBER designs and engineers custom software, digital products, platforms, and intelligent workflows around the way people and organizations actually work.
                        </p>
                        <div class="co-hero-actions">
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

                    <figure class="co-brand" data-co-reveal aria-label="Different disciplines, one standard of work">
                        <p class="co-brand-mark">SKYEMBER</p>
                        <ul class="co-brand-grid" aria-hidden="true">
                            <li>Product</li>
                            <li>Design</li>
                            <li>Engineering</li>
                            <li>Delivery</li>
                        </ul>
                        <p class="co-muted">Different disciplines. One standard of work.</p>
                    </figure>
                </div>
            </div>
        </header>

        <section class="co-band" aria-labelledby="co-why-heading">
            <div class="container-sky co-measure">
                <h2 id="co-why-heading" class="text-h2">
                    Software should fit the work, not force the work to fit the software.
                </h2>
                <p class="text-body co-lead">
                    We started from a simple observation: software becomes valuable when it understands the people, decisions, constraints, and workflows around it. That means looking beyond individual screens and features to the system those pieces create together.
                </p>
            </div>
        </section>

        <section class="co-band co-band-tight" aria-labelledby="co-beliefs-heading">
            <div class="container-sky">
                <h2 id="co-beliefs-heading" class="text-h2 co-measure">
                    What we believe about software.
                </h2>
                <ol class="co-beliefs">
                    @foreach ($beliefs as $item)
                        <li>
                            <p class="co-index">{{ $item['index'] }}</p>
                            <h3 class="co-belief-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="co-band" aria-labelledby="co-system-heading">
            <div class="container-sky">
                <div class="co-measure">
                    <h2 id="co-system-heading" class="text-h2">Look at the whole system.</h2>
                    <p class="text-body co-lead">
                        SKYEMBER looks beyond the screen — from the problem and the people through the product to the system that has to keep working.
                    </p>
                </div>
                <ol class="co-system" data-co-signature aria-label="From problem to system">
                    @foreach ($system as $step)
                        <li data-co-step @class(['is-system' => $step === 'The system'])>
                            {{ $step }}
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="co-band co-band-tight" aria-labelledby="co-disc-heading">
            <div class="container-sky">
                <div class="co-measure">
                    <h2 id="co-disc-heading" class="text-h2">Different disciplines. Shared responsibility.</h2>
                    <p class="text-body co-lead">
                        Product, design, engineering, and delivery are different disciplines, but the user experiences one system. Software engineering and product engineering stay connected to the experience.
                    </p>
                </div>
                <ul class="co-disciplines">
                    @foreach ($disciplines as $item)
                        <li>
                            <a href="{{ $item['href'] }}">
                                <h3 class="co-disc-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['line'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="co-band" aria-labelledby="co-work-heading">
            <div class="container-sky">
                <div class="co-measure">
                    <h2 id="co-work-heading" class="text-h2">We keep the work connected.</h2>
                    <p class="text-body co-lead">
                        Fewer disconnected handoffs. Clearer decisions. Close attention to the relationship between product intent, design, engineering, and what eventually runs in production.
                    </p>
                </div>
                <ul class="co-connected">
                    @foreach ($connected as $item)
                        <li>
                            <h3 class="co-connected-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="co-band co-band-tight" aria-labelledby="co-character-heading">
            <div class="container-sky co-measure">
                <h2 id="co-character-heading" class="text-h2">Serious about the work. Easy to work with.</h2>
                <p class="text-body co-lead">
                    We care about craft, but not for craft's own sake. We care about clear communication, thoughtful decisions, honest constraints, and software that continues to make sense after it leaves the design file.
                </p>
            </div>
        </section>

        <section class="co-band" aria-labelledby="co-dont-heading">
            <div class="container-sky">
                <h2 id="co-dont-heading" class="text-h2 co-measure">
                    We don't build complexity for the sake of it.
                </h2>
                <ul class="co-dont">
                    @foreach ($dont as $line)
                        <li class="text-body">{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="co-band co-band-tight" aria-labelledby="co-proof-heading">
            <div class="container-sky">
                <div class="co-measure">
                    <h2 id="co-proof-heading" class="text-h2">The best description of us is still the work.</h2>
                    <p class="text-body co-lead">
                        One example of how we think — not a claim that this system defines the entire company.
                    </p>
                </div>
                <div class="co-proof">
                    <p class="text-eyebrow">Representative system</p>
                    <h3 class="co-proof-title">Business Operations Platform</h3>
                    <p class="text-body">Product · UX · Engineering</p>
                    <p class="co-muted">Pharmacy / Operations</p>
                    <div class="co-proof-actions">
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

        <section class="co-band" aria-labelledby="co-explore-heading">
            <div class="container-sky">
                <h2 id="co-explore-heading" class="text-h2 co-measure">Explore SKYEMBER</h2>
                <ul class="co-explore">
                    @foreach ($explore as $item)
                        @php($ready = $routeExists($item['href']))
                        <li>
                            @if ($ready)
                                <a href="{{ $item['href'] }}">
                                    <h3 class="co-explore-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['body'] }}</p>
                                </a>
                            @else
                                <h3 class="co-explore-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="co-close" aria-labelledby="co-cta-heading">
            <div class="container-sky co-close-band">
                <div>
                    <h2 id="co-cta-heading" class="text-h2">Let's build something that matters.</h2>
                    <p class="text-body co-close-copy">
                        Tell us what you're trying to change, improve, or put in place.
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
