{{--
    Chunk 6 - Final CTA. One closing statement on the light field.
    The action is visible immediately. The /contact href is rendered
    only when that GET route exists.
--}}
@php
    $close = [
        'eyebrow' => "Let's build",
        'title' => ['Have something', 'worth building?'],
        'summary' => "Tell us what you're trying to solve. We'll help turn the requirement into a clear path forward.",
        'action' => 'Start a conversation',
        'href' => '/contact',
    ];

    $contactReady = false;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $matchesPath = trim($route->uri(), '/') === trim($close['href'], '/');
        $isGet = in_array('GET', $route->methods(), true);

        if ($matchesPath && $isGet) {
            $contactReady = true;
            break;
        }
    }
@endphp

<section
    id="final-cta"
    class="final-close scroll-mt-24"
    aria-labelledby="final-cta-heading"
>
    <div class="container-sky">
        <div class="final-band">
            <div class="final-copy">
                <p class="text-eyebrow">{{ $close['eyebrow'] }}</p>
                <h2 id="final-cta-heading" class="final-title">
                    <span>{{ $close['title'][0] }}</span>
                    <span>{{ $close['title'][1] }}</span>
                </h2>
                <p class="text-body final-summary">{{ $close['summary'] }}</p>
            </div>

            @if ($contactReady)
                <a class="final-cta" href="{{ $close['href'] }}">
                    {{ $close['action'] }}
                    <span class="final-arrow" aria-hidden="true">→</span>
                </a>
            @else
                <p class="final-cta">
                    {{ $close['action'] }}
                    <span class="final-arrow" aria-hidden="true">→</span>
                </p>
            @endif
        </div>
    </div>
</section>
