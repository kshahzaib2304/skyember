{{--
    Chunk 15 - Services index.
    Engineering practice / disciplines — not a Solutions replay or five equal cards.
    Child Explore links render only when those GET routes exist.
--}}
@extends('layouts.app')

@php
    $title = 'Software Development Services | SKYEMBER';
    $description = 'Product engineering, UI/UX design, web and mobile development, and cloud & DevOps services for custom software and digital products.';
    $canonical = route('services');

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

    $featured = [
        'index' => '01',
        'title' => 'Product Engineering',
        'line' => 'From product intent to production software.',
        'body' => 'We design and engineer complete digital products and business systems, from the core domain model and workflows through the interfaces and production environment.',
        'href' => '/services/product-engineering',
    ];

    $disciplines = [
        [
            'index' => '02',
            'title' => 'UI/UX Design',
            'line' => 'Experiences people can understand, navigate, and trust.',
            'href' => '/services/ui-ux-design',
            'fragment' => 'Flow',
        ],
        [
            'index' => '03',
            'title' => 'Web Development',
            'line' => 'Fast, responsive web applications engineered around the product.',
            'href' => '/services/web-development',
            'fragment' => 'App',
        ],
        [
            'index' => '04',
            'title' => 'Mobile Development',
            'line' => 'Native-quality mobile experiences connected to the same product system.',
            'href' => '/services/mobile-development',
            'fragment' => 'Mobile',
        ],
        [
            'index' => '05',
            'title' => 'Cloud & DevOps',
            'line' => 'Delivery and infrastructure designed for reliable software in production.',
            'href' => '/services/cloud-devops',
            'fragment' => 'Deploy',
        ],
    ];

    $featuredReady = $routeExists($featured['href']);

    $changes = [
        [
            'title' => 'Product Engineering',
            'body' => 'Turns requirements into maintainable software systems.',
        ],
        [
            'title' => 'UI/UX Design',
            'body' => 'Turns complexity into clear experiences and usable interfaces.',
        ],
        [
            'title' => 'Web Development',
            'body' => 'Turns product behavior into fast, responsive web applications.',
        ],
        [
            'title' => 'Mobile Development',
            'body' => 'Extends the product into focused mobile experiences.',
        ],
        [
            'title' => 'Cloud & DevOps',
            'body' => 'Creates the path from code to reliable production operation.',
        ],
    ];

    $bringIn = [
        [
            'title' => 'Starting from an idea',
            'body' => 'Product Engineering + UI/UX',
        ],
        [
            'title' => 'Replacing an existing application',
            'body' => 'Engineering + UX + Web/Mobile',
        ],
        [
            'title' => 'Extending a working product',
            'body' => 'Specialist engineering',
        ],
        [
            'title' => 'Preparing software for production',
            'body' => 'Cloud & DevOps',
        ],
    ];

    $fidelity = [
        'Problem',
        'Flow',
        'Interface',
        'Working application',
        'Mobile experience',
        'Production',
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Software development services',
                'serviceType' => 'Software development services',
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
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="svc-page" data-svc aria-labelledby="svc-heading">
        <header class="svc-hero">
            <div class="container-sky">
                <nav class="svc-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Services</li>
                    </ol>
                </nav>

                <div class="svc-hero-grid">
                    <div class="svc-hero-copy">
                        <p class="text-eyebrow">Services</p>
                        <h1 id="svc-heading" class="svc-title">
                            The disciplines behind software that works.
                        </h1>
                        <p class="text-body svc-support">
                            From product thinking and interface design to engineering, mobile applications, and production infrastructure, we bring the disciplines together around the system being built.
                        </p>
                        <div class="svc-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Start a conversation
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            <a class="solutions-cta solutions-cta-secondary" href="{{ route('work') }}">
                                Explore our work
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <figure class="svc-composite" data-svc-reveal aria-label="Disciplines contributing to one product">
                        <div class="svc-composite-center">
                            <p class="svc-kicker">Product</p>
                            <p class="svc-composite-title">Workspace</p>
                            <p class="svc-muted">One system in use</p>
                            <ul class="svc-composite-list">
                                <li class="is-current"><span>Active work</span><span>Open</span></li>
                                <li><span>Next step</span><span>Ready</span></li>
                                <li><span>Record</span><span>Linked</span></li>
                            </ul>
                        </div>
                        <ul class="svc-fragments" aria-hidden="true">
                            <li><span>UX</span><span>Flow</span></li>
                            <li><span>Code</span><span>Domain</span></li>
                            <li><span>Mobile</span><span>Viewport</span></li>
                            <li><span>Cloud</span><span>Deploy</span></li>
                        </ul>
                    </figure>
                </div>
            </div>
        </header>

        <section class="svc-band" aria-labelledby="svc-thesis-heading">
            <div class="container-sky svc-measure">
                <h2 id="svc-thesis-heading" class="text-h2">One system. The disciplines it needs.</h2>
                <p class="text-body svc-lead">
                    A product does not become successful because one team wrote the most code. It works when product thinking, experience design, engineering, and infrastructure reinforce one another.
                </p>
            </div>
        </section>

        <section class="svc-band svc-band-tight" aria-labelledby="svc-featured-heading">
            <div class="container-sky">
                <p class="text-eyebrow">01 / Featured</p>
                <div class="svc-featured">
                    <div class="svc-featured-copy">
                        <h2 id="svc-featured-heading" class="text-h2">{{ $featured['title'] }}</h2>
                        <p class="svc-featured-line">{{ $featured['line'] }}</p>
                        <p class="text-body">{{ $featured['body'] }}</p>
                        @if ($featuredReady)
                            <a class="solutions-cta" href="{{ $featured['href'] }}">
                                Explore service
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        @else
                            <p class="svc-cta-quiet">
                                Explore service
                                <span aria-hidden="true">→</span>
                            </p>
                        @endif
                    </div>
                    <figure class="svc-panel" data-svc-featured aria-hidden="true">
                        <p class="svc-kicker">Product engineering</p>
                        <p class="svc-panel-title">Intent → production</p>
                        <ul class="svc-composite-list">
                            <li><span>Domain</span><span>Modeled</span></li>
                            <li class="is-current"><span>Workflow</span><span>Shaped</span></li>
                            <li><span>Interface</span><span>In place</span></li>
                            <li><span>Environment</span><span>Ready</span></li>
                        </ul>
                    </figure>
                </div>
            </div>
        </section>

        <section class="svc-band" aria-labelledby="svc-other-heading">
            <div class="container-sky">
                <h2 id="svc-other-heading" class="text-h2">Other disciplines</h2>
                <ol class="svc-records">
                    @foreach ($disciplines as $item)
                        @php($ready = $routeExists($item['href']))
                        <li>
                            <div class="svc-record-main">
                                <p class="svc-index">{{ $item['index'] }}</p>
                                <div>
                                    <h3 class="svc-record-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['line'] }}</p>
                                    @if ($ready)
                                        <a class="solutions-cta" href="{{ $item['href'] }}">
                                            Explore service
                                            <span class="solutions-arrow" aria-hidden="true">→</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <figure class="svc-record-frag" aria-hidden="true">
                                <p class="svc-kicker">{{ $item['fragment'] }}</p>
                                <p class="svc-muted">Discipline</p>
                            </figure>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="svc-band svc-band-tight" aria-labelledby="svc-signature-heading">
            <div class="container-sky">
                <div class="svc-measure">
                    <h2 id="svc-signature-heading" class="text-h2">The disciplines change. The system stays one.</h2>
                    <p class="text-body svc-lead">
                        One product surface gaining fidelity as design, engineering, mobile, and delivery work around the same system.
                    </p>
                </div>
                <ol class="svc-fidelity" data-svc-fidelity aria-label="Product gaining fidelity across disciplines">
                    @foreach ($fidelity as $step)
                        <li data-svc-step>
                            <p class="svc-step-label">{{ $step }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="svc-band" aria-labelledby="svc-changes-heading">
            <div class="container-sky">
                <h2 id="svc-changes-heading" class="text-h2 svc-measure">
                    What each discipline changes.
                </h2>
                <ul class="svc-changes">
                    @foreach ($changes as $item)
                        <li>
                            <h3 class="svc-change-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="svc-band svc-band-tight" aria-labelledby="svc-bring-heading">
            <div class="container-sky">
                <h2 id="svc-bring-heading" class="text-h2 svc-measure">
                    Bring us in where the product needs more than a specification.
                </h2>
                <ul class="svc-bring">
                    @foreach ($bringIn as $item)
                        <li>
                            <p class="svc-bring-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="svc-band" aria-labelledby="svc-integrate-heading">
            <div class="container-sky svc-measure">
                <h2 id="svc-integrate-heading" class="text-h2">Specialist when it matters. Integrated when it counts.</h2>
                <p class="text-body svc-lead">
                    A strong product still needs specialist depth. But specialists should understand the system around their part of the work.
                </p>
                <p class="svc-integrate" aria-label="Disciplines connected without isolated handoffs">
                    UX <span aria-hidden="true">↔</span> Product <span aria-hidden="true">↔</span> Web <span aria-hidden="true">↔</span> Mobile <span aria-hidden="true">↔</span> Cloud
                </p>
            </div>
        </section>

        <section class="svc-band svc-band-tight" aria-labelledby="svc-proof-heading">
            <div class="container-sky">
                <div class="svc-proof">
                    <div>
                        <h2 id="svc-proof-heading" class="text-h2">See the work behind the disciplines.</h2>
                        <p class="text-body svc-lead">
                            See one system built across product, experience, and engineering.
                        </p>
                        <p class="svc-proof-meta">Business Operations Platform</p>
                        <p class="svc-muted">Product · UX · Engineering · Web application</p>
                        <a class="solutions-cta" href="{{ route('work.business-operations-platform') }}">
                            Explore the work
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="svc-band" aria-labelledby="svc-honest-heading">
            <div class="container-sky svc-measure">
                <h2 id="svc-honest-heading" class="text-h2">Not every project needs every discipline.</h2>
                <p class="text-body">
                    A focused web application may not need mobile development. An existing product may need cloud engineering without a redesign. We assemble the disciplines around the problem rather than adding work for the sake of a larger engagement.
                </p>
            </div>
        </section>

        <section class="svc-close" aria-labelledby="svc-cta-heading">
            <div class="container-sky svc-close-band">
                <div>
                    <h2 id="svc-cta-heading" class="text-h2">Know what needs to be built?</h2>
                    <p class="text-body svc-close-copy">
                        Tell us what you need help with. We'll bring the right disciplines around the problem.
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
