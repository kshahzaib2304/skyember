{{--
    Chunk 27 - Insights essay.
    Genuine article reading page. Index ins-* stays frozen.
--}}
@extends('layouts.app')

@php
    $title = $essay['seo_title'];
    $description = $essay['seo_description'];
    $canonical = route('insights.show', $essay['slug']);
    $type = 'article';
    $publishedIso = \Illuminate\Support\Carbon::parse($essay['published_at'])->toIso8601String();
    $dateLabel = \Illuminate\Support\Carbon::parse($essay['published_at'])->format('j F Y');
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
                'item' => route('insights'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => $essay['title'],
                'item' => $canonical,
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    <script type="application/ld+json">
    {!! json_encode([
        '@'.'context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $essay['title'],
        'description' => $essay['seo_description'],
        'datePublished' => $publishedIso,
        'dateModified' => $publishedIso,
        'author' => [
            '@type' => 'Organization',
            'name' => 'SKYEMBER',
            'url' => url('/'),
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'SKYEMBER',
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('images/brand/mark.png'),
            ],
        ],
        'mainEntityOfPage' => $canonical,
        'articleSection' => $essay['category'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="inse-page" data-inse aria-labelledby="inse-heading">
        <header class="inse-hero">
            <div class="container-sky">
                <nav class="inse-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('insights') }}">Insights</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">{{ $essay['title'] }}</li>
                    </ol>
                </nav>

                <div class="inse-hero-grid">
                    <div class="inse-hero-copy">
                        <p class="text-eyebrow">{{ $essay['category'] }}</p>
                        <h1 id="inse-heading" class="inse-title">
                            {{ $essay['title'] }}
                        </h1>
                        <p class="text-body inse-excerpt">{{ $essay['excerpt'] }}</p>
                        <p class="inse-byline">
                            <span>{{ $essay['author'] }}</span>
                            <span aria-hidden="true">·</span>
                            <time datetime="{{ $essay['published_at'] }}">{{ $dateLabel }}</time>
                            <span aria-hidden="true">·</span>
                            <span>{{ $essay['reading_time'] }} read</span>
                        </p>
                    </div>

                    <figure class="inse-visual" data-inse-reveal aria-hidden="true">
                        <p class="inse-visual-label">{{ $essay['hero_label'] }}</p>
                        <ol class="inse-visual-steps">
                            @foreach ($essay['hero_steps'] as $step)
                                <li>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </figure>
                </div>
            </div>
        </header>

        <div class="inse-band">
            <div class="container-sky">
                <div class="inse-prose">
                    {!! $essay['body_html'] !!}
                </div>

                <p class="inse-essay-cta">
                    <a class="solutions-cta" href="{{ route($essay['cta_route']) }}">
                        {{ $essay['cta_label'] }}
                        <span class="solutions-arrow" aria-hidden="true">→</span>
                    </a>
                </p>
            </div>
        </div>

        <section class="inse-band inse-related" aria-labelledby="inse-related-heading">
            <div class="container-sky">
                <h2 id="inse-related-heading" class="text-h2">More from Insights</h2>
                <ol class="inse-related-list">
                    @foreach ($related as $item)
                        <li>
                            <p class="inse-related-cat">{{ $item['category'] }}</p>
                            <a class="inse-related-link" href="{{ route('insights.show', $item['slug']) }}">
                                <h3 class="inse-related-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['excerpt'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="inse-close" aria-labelledby="inse-cta-heading">
            <div class="container-sky inse-close-band">
                <div>
                    <h2 id="inse-cta-heading" class="text-h2">
                        See a problem you recognize?
                    </h2>
                    <p class="text-body inse-close-copy">
                        The work still says the most. Tell us what you're trying to change.
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
