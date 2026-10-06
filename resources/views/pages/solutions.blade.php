{{--
    Chunk 10 - Solutions index. A decision page, not a four-card grid.
    Child Explore links render only when those GET routes exist.
--}}
@extends('layouts.app')

@php
    $featured = [
        'index' => '01',
        'title' => 'Business software',
        'when' => 'The operation is the system of record — inventory, purchasing, finance, and the workflows between them.',
        'place' => 'A connected business software system with explicit states a company can trust.',
        'href' => '/solutions/business-software',
        'proof' => route('work.business-operations-platform'),
        'proof_label' => 'See how we think',
    ];

    $paths = [
        [
            'index' => '02',
            'title' => 'SaaS products',
            'when' => 'Customers (or staff) must open your product every day to start, track, and finish work.',
            'place' => 'A web application / SaaS product whose interface has one job: make that work clear.',
            'href' => '/solutions/saas-products',
        ],
        [
            'index' => '03',
            'title' => 'Custom platforms',
            'when' => 'Several teams, channels, or experiences need one shared foundation — not a pile of disconnected tools.',
            'place' => 'A custom platform that connects workflows, users, data, and experiences as one system.',
            'href' => '/solutions/custom-platforms',
        ],
        [
            'index' => '04',
            'title' => 'AI & automation',
            'when' => 'The work contains a repeatable decision that can be bounded by context, rules, and human oversight.',
            'place' => 'AI automation and agentic workflows that act inside the process — with evaluation and control.',
            'href' => '/solutions/ai-automation',
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

    $featuredReady = $routeExists($featured['href']);

    $title = 'SKYEMBER - Solutions';
    $description = 'Choose the SKYEMBER system shape that matches your work: business software, SaaS products, custom platforms, or AI automation.';
    $canonical = route('solutions');

    $listItems = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => $featured['title'],
            'description' => $featured['place'],
            ...($featuredReady ? ['url' => url($featured['href'])] : []),
        ],
    ];

    foreach ($paths as $i => $path) {
        $pathReady = $routeExists($path['href']);

        $listItems[] = [
            '@type' => 'ListItem',
            'position' => $i + 2,
            'name' => $path['title'],
            'description' => $path['place'],
            ...($pathReady ? ['url' => url($path['href'])] : []),
        ];
    }
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'CollectionPage',
                'name' => 'SKYEMBER Solutions',
                'url' => $canonical,
                'description' => $description,
                'isPartOf' => [
                    '@type' => 'WebSite',
                    'name' => 'SKYEMBER',
                    'url' => url('/'),
                ],
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => $listItems,
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
                        'name' => 'Solutions',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <section class="solutions-page" aria-labelledby="solutions-heading" data-solutions>
        <div class="container-sky">
            <nav class="solutions-crumb" aria-label="Breadcrumb">
                <ol>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <span aria-hidden="true">/</span>
                    </li>
                    <li aria-current="page">Solutions</li>
                </ol>
            </nav>

            <div class="solutions-lead">
                <div class="solutions-lead-main">
                    <p class="text-eyebrow">Solutions</p>
                    <h1 id="solutions-heading" class="solutions-title">
                        <span>Software for the decision</span>
                        <span>in front of you.</span>
                    </h1>
                </div>
                <p class="text-body solutions-summary">
                    The homepage showed the systems. This page helps you choose which shape matches the work you need to put in place.
                </p>
            </div>

            <p class="solutions-prompt">What are you trying to put in place?</p>

            <article class="solutions-featured" aria-labelledby="solutions-business-heading">
                <div class="solutions-featured-copy">
                    <p class="solutions-indexline">
                        <span class="solutions-index">{{ $featured['index'] }}</span>
                        <span>Featured path</span>
                    </p>
                    <h2 id="solutions-business-heading" class="text-h2">{{ $featured['title'] }}</h2>

                    <dl class="solutions-chooser">
                        <div>
                            <dt>Choose this when</dt>
                            <dd>{{ $featured['when'] }}</dd>
                        </div>
                        <div>
                            <dt>What we put in place</dt>
                            <dd>{{ $featured['place'] }}</dd>
                        </div>
                    </dl>

                    <div class="solutions-actions">
                        <a class="solutions-cta" href="{{ $featured['proof'] }}">
                            {{ $featured['proof_label'] }}
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                        @if ($featuredReady)
                            <a class="solutions-cta solutions-cta-secondary" href="{{ $featured['href'] }}">
                                Explore this solution
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        @endif
                    </div>
                </div>

                <figure class="solutions-proof" data-solutions-visual aria-hidden="true">
                    <p class="solutions-proof-kicker">Proof · representative system</p>
                    <p class="solutions-proof-title">SO-10482</p>
                    <p class="solutions-proof-detail">City Care Clinic · Panadol 500mg · B-441 · FEFO</p>
                    <ul class="solutions-proof-states">
                        <li>Payment confirmed</li>
                        <li class="is-current">24 reserved</li>
                        <li>Dispatch waiting</li>
                    </ul>
                </figure>
            </article>

            <div class="solutions-more-intro">
                <p class="text-eyebrow">Additional paths</p>
                <p class="text-body solutions-more-note">Three other system shapes. Deep pages open when each is written.</p>
            </div>

            <div class="solutions-paths">
                @foreach ($paths as $path)
                    @php($pathReady = $routeExists($path['href']))
                    <article class="solutions-path" aria-labelledby="solutions-path-{{ $path['index'] }}">
                        <p class="solutions-indexline">
                            <span class="solutions-index">{{ $path['index'] }}</span>
                            <span>Path</span>
                        </p>
                        <h2 id="solutions-path-{{ $path['index'] }}" class="solutions-path-title">{{ $path['title'] }}</h2>
                        <dl class="solutions-chooser solutions-chooser-compact">
                            <div>
                                <dt>Choose this when</dt>
                                <dd>{{ $path['when'] }}</dd>
                            </div>
                            <div>
                                <dt>What we put in place</dt>
                                <dd>{{ $path['place'] }}</dd>
                            </div>
                        </dl>
                        @if ($pathReady)
                            <a class="solutions-cta" href="{{ $path['href'] }}">
                                Explore this solution
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        @endif
                    </article>
                @endforeach
            </div>

            <p class="solutions-delivery">
                Cloud, infrastructure, and engineering practices are how these systems ship. That delivery story belongs under
                <a href="{{ route('services') }}">Services</a>
                — not as another solution tile.
            </p>

            <div class="solutions-close">
                <h2 class="text-h2">Not sure which path fits?</h2>
                <a class="solutions-cta" href="{{ route('contact') }}">
                    Start a conversation
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection
