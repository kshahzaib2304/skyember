{{--
    Chunk 5 - Process. A still operating list on the light field.
    Static copy. No durations, prices, or retainer claims.
    No motion: the list is complete in HTML.
--}}
@php
    $stages = [
        ['index' => '01', 'name' => 'Understand', 'detail' => 'Business, users, constraints'],
        ['index' => '02', 'name' => 'Shape', 'detail' => 'Requirements → product direction'],
        ['index' => '03', 'name' => 'Engineer', 'detail' => 'Architecture → implementation'],
        ['index' => '04', 'name' => 'Validate', 'detail' => 'Test → refine → prepare'],
        ['index' => '05', 'name' => 'Launch', 'detail' => 'Deploy → hand over → evolve'],
    ];
@endphp

<section
    id="process"
    class="how-we-work scroll-mt-24"
    aria-labelledby="process-heading"
>
    <div class="container-sky">
        <header class="how-intro">
            <p class="text-eyebrow">How we work</p>
            <h2 id="process-heading" class="text-h2">
                <span class="how-title-line">Good software is built</span>
                <span class="how-title-line">with intent, not momentum.</span>
            </h2>
        </header>

        <ol class="how-list">
            @foreach ($stages as $stage)
                <li class="how-row">
                    <span class="how-index" aria-hidden="true">{{ $stage['index'] }}</span>
                    <span class="how-name">{{ $stage['name'] }}</span>
                    <span class="how-detail">{{ $stage['detail'] }}</span>
                </li>
            @endforeach
        </ol>
    </div>
</section>
