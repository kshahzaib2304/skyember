{{--
    Chunk 25 - Insights index.
    Editorial intelligence layer — not a blog.
    Chunk 27 connects genuine essay destinations without restyling this composition.
--}}
@extends('layouts.app')

@php
    use App\Insights\EssayCatalog;

    $title = 'Insights on Software, Product & Engineering | SKYEMBER';
    $description = 'SKYEMBER insights on software engineering, product development, UX design, AI automation, architecture, and building systems that last.';
    $canonical = route('insights');

    $featured = [
        'category' => 'Product',
        'filter' => 'product',
        'title' => 'The workflow is the product',
        'summary' => 'Why software decisions get clearer when the actual work is understood before screens, features, or frameworks take over.',
        'slug' => 'the-workflow-is-the-product',
    ];

    $directions = [
        [
            'index' => '04',
            'year' => '2026',
            'category' => 'AI + Systems',
            'filter' => 'ai',
            'title' => 'When an AI workflow should stop and ask',
            'summary' => 'How context, confidence, rules, evaluation, and human review shape responsible automation.',
            'slug' => 'when-an-ai-workflow-should-stop-and-ask',
        ],
        [
            'index' => '03',
            'year' => '2026',
            'category' => 'Engineering',
            'filter' => 'engineering',
            'title' => 'Complexity should have to earn its place',
            'summary' => 'A practical case for choosing the smallest architecture that satisfies the actual constraints.',
            'slug' => 'complexity-should-have-to-earn-its-place',
        ],
        [
            'index' => '02',
            'year' => '2026',
            'category' => 'Design',
            'filter' => 'design',
            'title' => 'Designing the state after the happy path',
            'summary' => 'Loading, empty, error, permission, recovery — and the states users actually encounter.',
            'slug' => 'designing-the-state-after-the-happy-path',
        ],
        [
            'index' => '01',
            'year' => '2026',
            'category' => 'Product',
            'filter' => 'product',
            'title' => 'The workflow is the product',
            'summary' => 'Why requirements become clearer when you model the work instead of starting from screens.',
            'slug' => 'the-workflow-is-the-product',
        ],
    ];

    $filters = [
        ['label' => 'All', 'value' => 'all'],
        ['label' => 'Engineering', 'value' => 'engineering'],
        ['label' => 'Product', 'value' => 'product'],
        ['label' => 'Design', 'value' => 'design'],
        ['label' => 'AI + Systems', 'value' => 'ai'],
    ];

    $essayReady = function (?string $slug): bool {
        return $slug !== null && $slug !== '' && EssayCatalog::find($slug) !== null;
    };

    $featuredHref = $featured['slug'] ? route('insights.show', $featured['slug']) : null;
    $featuredReady = $essayReady($featured['slug']);
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
                'name' => 'Insights',
                'item' => $canonical,
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="ins-page" data-ins aria-labelledby="ins-heading">
        <header class="ins-hero">
            <div class="container-sky">
                <nav class="ins-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Insights</li>
                    </ol>
                </nav>

                <div class="ins-hero-grid">
                    <div class="ins-hero-copy">
                        <p class="text-eyebrow">Insights</p>
                        <h1 id="ins-heading" class="ins-title">
                            Thinking clearly about software.
                        </h1>
                        <p class="text-body ins-support">
                            Perspectives on product, design, engineering, AI, and the systems that make software useful.
                        </p>
                    </div>

                    <aside class="ins-featured" data-ins-reveal aria-labelledby="ins-featured-heading">
                        <p class="text-eyebrow">Featured thesis</p>
                        <p class="ins-featured-cat">{{ $featured['category'] }}</p>
                        <h2 id="ins-featured-heading" class="ins-featured-title">
                            {{ $featured['title'] }}
                        </h2>
                        <p class="text-body">{{ $featured['summary'] }}</p>

                        <figure class="ins-thesis" aria-hidden="true">
                            <p class="ins-thesis-label">Workflow</p>
                            <ol class="ins-thesis-steps">
                                <li>Work</li>
                                <li>Decision</li>
                                <li>Software</li>
                            </ol>
                            <p class="ins-thesis-note">Understand the work first.</p>
                        </figure>

                        @if ($featuredReady)
                            <a class="solutions-cta" href="{{ $featuredHref }}">
                                Read the essay
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        @else
                            <p class="ins-pending">Essay forthcoming — destination gated until a genuine article ships.</p>
                        @endif
                    </aside>
                </div>
            </div>
        </header>

        <section class="ins-band" aria-labelledby="ins-index-heading">
            <div class="container-sky">
                <div class="ins-index-head">
                    <h2 id="ins-index-heading" class="text-h2">
                        What we're thinking about
                    </h2>
                    <p class="text-body ins-index-lead">
                        Four essays across the areas that shape SKYEMBER's work.
                    </p>
                </div>

                <div class="ins-filters" role="group" aria-label="Filter by area">
                    @foreach ($filters as $filter)
                        <button
                            type="button"
                            class="ins-filter{{ $filter['value'] === 'all' ? ' is-active' : '' }}"
                            data-ins-filter="{{ $filter['value'] }}"
                            aria-pressed="{{ $filter['value'] === 'all' ? 'true' : 'false' }}"
                        >
                            {{ $filter['label'] }}
                        </button>
                    @endforeach
                </div>

                <ol class="ins-index" data-ins-index>
                    @foreach ($directions as $item)
                        @php
                            $ready = $essayReady($item['slug'] ?? null);
                            $href = $ready ? route('insights.show', $item['slug']) : null;
                        @endphp
                        <li data-ins-row data-ins-category="{{ $item['filter'] }}">
                            <div class="ins-row-meta">
                                <span class="ins-row-index">{{ $item['index'] }}</span>
                                <span class="ins-row-year">{{ $item['year'] }}</span>
                            </div>
                            <div class="ins-row-body">
                                <p class="ins-row-cat">{{ $item['category'] }}</p>
                                @if ($ready)
                                    <a class="ins-row-link" href="{{ $href }}">
                                        <h3 class="ins-row-title">{{ $item['title'] }}</h3>
                                        <p class="text-body">{{ $item['summary'] }}</p>
                                        <span class="ins-row-arrow" aria-hidden="true">→</span>
                                    </a>
                                @else
                                    <h3 class="ins-row-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['summary'] }}</p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ins-close" aria-labelledby="ins-cta-heading">
            <div class="container-sky ins-close-band">
                <div>
                    <h2 id="ins-cta-heading" class="text-h2">
                        See a problem you recognize?
                    </h2>
                    <p class="text-body ins-close-copy">
                        The work still says the most. Tell us what you're trying to change, or look at how we've approached a real system.
                    </p>
                </div>
                <div class="ins-close-actions">
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
        </section>
    </article>
@endsection
