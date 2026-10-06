{{--
    Chunk 8 - Work index. A curated contents page, not a card grid.
    01 is the main editorial entry. 02 and 03 are evidence of range.
    The case-study anchor renders only when that GET route exists.
--}}
@extends('layouts.app')

@php
    $featured = [
        'index' => '01',
        'category' => 'Featured project',
        'title' => 'Business Operations Platform',
        'industry' => 'Pharmacy / Operations',
        'scope' => 'Product · UX · Engineering',
        'platform' => 'Web application',
        'summary' => 'A connected platform that brings orders, inventory, workflows and daily operations into one system.',
        'disclosure' => 'Representative project',
        'href' => '/work/business-operations-platform',
        'orders' => [
            ['name' => 'Morning run', 'place' => 'Counter'],
            ['name' => 'Counter refill', 'place' => 'Desk', 'open' => true],
            ['name' => 'Floor restock', 'place' => 'Stores'],
        ],
        'workflow' => [
            ['label' => 'Collected'],
            ['label' => 'Checked'],
            ['label' => 'Staged', 'current' => true],
            ['label' => 'Handed over'],
        ],
        'customer' => [
            'title' => 'Counter desk',
            'detail' => 'Hold for collection',
        ],
        'operations' => [
            'title' => 'Afternoon batch',
            'detail' => 'Queued with the morning run',
        ],
    ];

    $field = [
        'index' => '02',
        'title' => 'Field Service Record',
        'summary' => 'A day of site visits, held in one record, so the office and the person on site see the same work.',
        'industry' => 'Field service',
        'scope' => 'Product · UX · Engineering',
        'platform' => 'Web application',
        'disclosure' => 'Representative project',
        'rows' => [
            ['when' => 'Morning', 'place' => 'Site A', 'state' => 'On site', 'current' => true],
            ['when' => 'Midday', 'place' => 'Site B', 'state' => 'Next'],
            ['when' => 'Afternoon', 'place' => 'Yard', 'state' => 'Return'],
        ],
    ];

    $catalog = [
        'index' => '03',
        'title' => 'Catalog Change',
        'summary' => 'A catalog change stays proposed until it is checked. It is published only after someone accepts it.',
        'industry' => 'Commerce',
        'scope' => 'Product · Engineering',
        'platform' => 'Internal tool',
        'disclosure' => 'Representative project',
        'states' => [
            ['label' => 'Proposed'],
            ['label' => 'Checked'],
            ['label' => 'Held', 'current' => true],
            ['label' => 'Accepted'],
        ],
    ];

    $caseStudyReady = false;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $matchesPath = trim($route->uri(), '/') === trim($featured['href'], '/');
        $isGet = in_array('GET', $route->methods(), true);

        if ($matchesPath && $isGet) {
            $caseStudyReady = true;
            break;
        }
    }

    $openOrder = collect($featured['orders'])->firstWhere('open', true);

    $title = 'SKYEMBER - Work';
    $description = 'Selected work from SKYEMBER: problems turned into software. Three representative systems, beginning with a business operations platform.';
    $canonical = route('work');
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'CollectionPage',
                'name' => 'SKYEMBER Work',
                'url' => $canonical,
                'description' => $description,
                'isPartOf' => [
                    '@type' => 'WebSite',
                    'name' => 'SKYEMBER',
                    'url' => url('/'),
                ],
                'mainEntity' => [
                    '@type' => 'ItemList',
                    'itemListElement' => [
                        [
                            '@type' => 'ListItem',
                            'position' => 1,
                            'name' => $featured['title'],
                            'description' => $featured['summary'],
                            'url' => url($featured['href']),
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 2,
                            'name' => $field['title'],
                            'description' => $field['summary'],
                        ],
                        [
                            '@type' => 'ListItem',
                            'position' => 3,
                            'name' => $catalog['title'],
                            'description' => $catalog['summary'],
                        ],
                    ],
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
                        'name' => 'Work',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <section class="works-page" aria-labelledby="works-heading" data-works>
        <div class="container-sky">
            <nav class="works-crumb" aria-label="Breadcrumb">
                <ol>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <span aria-hidden="true">/</span>
                    </li>
                    <li aria-current="page">Work</li>
                </ol>
            </nav>

            <div class="works-lead">
                <div class="works-lead-main">
                    <p class="text-eyebrow">Selected work</p>
                    <h1 id="works-heading" class="works-title">
                        <span>Problems turned</span>
                        <span>into software.</span>
                    </h1>
                </div>
                <p class="text-body works-summary">
                    Three representative systems. The first is the platform from the homepage. The other two are here so the range is visible.
                </p>
            </div>

            <article class="works-featured" aria-labelledby="works-featured-heading">
                <div class="works-featured-copy">
                    <div class="works-featured-main">
                        <p class="works-indexline">
                            <span class="works-index">{{ $featured['index'] }}</span>
                            <span>{{ $featured['category'] }}</span>
                        </p>
                        <h2 id="works-featured-heading" class="text-h2">{{ $featured['title'] }}</h2>
                        <p class="text-body works-featured-summary">{{ $featured['summary'] }}</p>
                        <p class="works-disclosure">{{ $featured['disclosure'] }}</p>
                    </div>

                    <div class="works-featured-meta">
                        <dl class="works-meta">
                            <div>
                                <dt>Industry</dt>
                                <dd>{{ $featured['industry'] }}</dd>
                            </div>
                            <div>
                                <dt>Scope</dt>
                                <dd>{{ $featured['scope'] }}</dd>
                            </div>
                            <div>
                                <dt>Platform</dt>
                                <dd>{{ $featured['platform'] }}</dd>
                            </div>
                        </dl>

                        @if ($caseStudyReady)
                            <a class="works-cta" href="{{ $featured['href'] }}">
                                Explore case study
                                <span class="works-arrow" aria-hidden="true">→</span>
                            </a>
                        @endif
                    </div>
                </div>

                <figure class="works-plate" data-works-visual>
                    <div class="work-stage">
                        <div class="work-sheet">
                            <div class="work-orders">
                                <p class="work-kicker">Orders</p>
                                <ol class="work-orders-list">
                                    @foreach ($featured['orders'] as $order)
                                        <li @class(['is-open' => ! empty($order['open'])])>
                                            <span>{{ $order['name'] }}</span>
                                            <span>{{ $order['place'] }}</span>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>

                            <div class="work-thread">
                                <p class="work-kicker">Workflow</p>
                                <p class="work-thread-title">{{ $openOrder['name'] ?? $featured['title'] }}</p>
                                <ol class="work-steps" aria-label="Workflow for {{ $openOrder['name'] ?? 'the open order' }}">
                                    @foreach ($featured['workflow'] as $step)
                                        <li @class(['is-current' => ! empty($step['current'])]) @if (! empty($step['current'])) aria-current="step" @endif>
                                            {{ $step['label'] }}
                                        </li>
                                    @endforeach
                                </ol>
                            </div>

                            <div class="work-slips">
                                <div class="work-slip">
                                    <p class="work-kicker">Customer</p>
                                    <p class="work-slip-title">{{ $featured['customer']['title'] }}</p>
                                    <p class="work-slip-detail">{{ $featured['customer']['detail'] }}</p>
                                </div>
                                <div class="work-slip">
                                    <p class="work-kicker">Operations</p>
                                    <p class="work-slip-title">{{ $featured['operations']['title'] }}</p>
                                    <p class="work-slip-detail">{{ $featured['operations']['detail'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </article>

            <div class="works-more-intro">
                <p class="text-eyebrow">Additional work</p>
                <p class="text-body works-more-note">Two other systems. Neither opens yet.</p>
            </div>

            <div class="works-more">
                <article class="works-entry works-entry-field" aria-labelledby="works-field-heading">
                    <p class="works-indexline">
                        <span class="works-index">{{ $field['index'] }}</span>
                        <span>Additional</span>
                    </p>
                    <h2 id="works-field-heading" class="text-h3">{{ $field['title'] }}</h2>
                    <p class="text-body works-entry-summary">{{ $field['summary'] }}</p>
                    <dl class="works-meta works-meta-compact">
                        <div>
                            <dt>Industry</dt>
                            <dd>{{ $field['industry'] }}</dd>
                        </div>
                        <div>
                            <dt>Scope</dt>
                            <dd>{{ $field['scope'] }}</dd>
                        </div>
                        <div>
                            <dt>Platform</dt>
                            <dd>{{ $field['platform'] }}</dd>
                        </div>
                    </dl>
                    <p class="works-disclosure">{{ $field['disclosure'] }}</p>

                    <div class="works-day" aria-hidden="true">
                        <p class="works-day-kicker">Today</p>
                        <ol class="works-day-list">
                            @foreach ($field['rows'] as $row)
                                <li @class(['is-current' => ! empty($row['current'])])>
                                    <span>{{ $row['when'] }}</span>
                                    <span>{{ $row['place'] }}</span>
                                    <span>{{ $row['state'] }}</span>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </article>

                <article class="works-entry works-entry-catalog" aria-labelledby="works-catalog-heading">
                    <p class="works-indexline">
                        <span class="works-index">{{ $catalog['index'] }}</span>
                        <span>Additional</span>
                    </p>
                    <h2 id="works-catalog-heading" class="text-h3">{{ $catalog['title'] }}</h2>
                    <p class="text-body works-entry-summary">{{ $catalog['summary'] }}</p>
                    <dl class="works-meta works-meta-compact">
                        <div>
                            <dt>Industry</dt>
                            <dd>{{ $catalog['industry'] }}</dd>
                        </div>
                        <div>
                            <dt>Scope</dt>
                            <dd>{{ $catalog['scope'] }}</dd>
                        </div>
                        <div>
                            <dt>Platform</dt>
                            <dd>{{ $catalog['platform'] }}</dd>
                        </div>
                    </dl>
                    <p class="works-disclosure">{{ $catalog['disclosure'] }}</p>

                    <ol class="works-states" aria-label="Catalog change states">
                        @foreach ($catalog['states'] as $state)
                            <li @class(['is-current' => ! empty($state['current'])]) @if (! empty($state['current'])) aria-current="step" @endif>
                                {{ $state['label'] }}
                            </li>
                        @endforeach
                    </ol>
                </article>
            </div>

            <div class="works-close">
                <p class="text-body works-close-copy">
                    See a problem you recognize? Tell us what you're trying to solve.
                </p>
                <a class="works-cta" href="{{ route('contact') }}">
                    Start a conversation
                    <span class="works-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection
