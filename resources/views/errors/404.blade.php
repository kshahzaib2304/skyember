{{--
    Chunk 28 - Branded 404.
    Quiet SKYEMBER shell. Not a marketing page. No frozen-surface restyle.
--}}
@extends('layouts.app')

@php
    $title = 'Page not found | SKYEMBER';
    $description = 'This page is not on the SKYEMBER site. Continue to Home, Insights, or Contact.';
    $canonical = url('/404');
    $robots = 'noindex, follow';
@endphp

@section('content')
    <article class="err-page" aria-labelledby="err-heading">
        <header class="err-hero">
            <div class="container-sky">
                <p class="text-eyebrow">404</p>
                <h1 id="err-heading" class="err-title">
                    This page is not here.
                </h1>
                <p class="text-body err-support">
                    The address may be wrong, or the page was never published. The rest of the site is still in place.
                </p>
                <ul class="err-actions">
                    <li>
                        <a class="solutions-cta" href="{{ url('/') }}">
                            Home
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>
                    <li>
                        <a class="solutions-cta" href="{{ route('insights') }}">
                            Insights
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>
                    <li>
                        <a class="solutions-cta" href="{{ route('contact') }}">
                            Start a conversation
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </li>
                </ul>
            </div>
        </header>
    </article>
@endsection
