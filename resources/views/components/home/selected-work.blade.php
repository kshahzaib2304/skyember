{{--
    Chunk 4 - Selected work. One featured project on the light field.
    Static mock. Representative until a real engagement replaces it.
    The anchor renders only when the reserved case-study route exists,
    so this teaser never points at a 404. `href` stays on the data.
--}}
@php
    $project = [
        'index' => '01',
        'category' => 'Featured project',
        'title' => 'Business Operations Platform',
        'industry' => 'Pharmacy / Operations',
        'scope' => 'Product · UX · Engineering',
        'platform' => 'Web application',
        'summary' => 'A connected platform that brings orders, inventory, workflows and daily operations into one system.',
        'visual' => 'operations-spread',
        'href' => '/work/business-operations-platform',
        'disclosure' => 'Representative project',
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

    $caseStudyReady = false;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $matchesPath = trim($route->uri(), '/') === trim($project['href'], '/');
        $isGet = in_array('GET', $route->methods(), true);

        if ($matchesPath && $isGet) {
            $caseStudyReady = true;
            break;
        }
    }

    $openOrder = collect($project['orders'])->firstWhere('open', true);
@endphp

<section
    id="selected-work"
    class="selected-work scroll-mt-24"
    aria-labelledby="selected-work-heading"
    data-selected-work
>
    <div class="container-sky">
        <header class="work-intro">
            <p class="text-eyebrow">Selected work</p>
            <h2 id="selected-work-heading" class="text-h2">
                Software built around a real business.
            </h2>
        </header>
    </div>

    <div class="work-bleed" data-work-visual>
        <figure class="work-stage" data-visual="{{ $project['visual'] }}">
            <div class="work-sheet">
                <div class="work-orders">
                    <p class="work-kicker">Orders</p>
                    <ol class="work-orders-list">
                        @foreach ($project['orders'] as $order)
                            <li @class(['is-open' => ! empty($order['open'])])>
                                <span>{{ $order['name'] }}</span>
                                <span>{{ $order['place'] }}</span>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="work-thread">
                    <p class="work-kicker">Workflow</p>
                    <p class="work-thread-title">{{ $openOrder['name'] ?? $project['title'] }}</p>
                    <ol class="work-steps" aria-label="Workflow for {{ $openOrder['name'] ?? 'the open order' }}">
                        @foreach ($project['workflow'] as $step)
                            <li @class(['is-current' => ! empty($step['current'])]) @if (! empty($step['current'])) aria-current="step" @endif>
                                {{ $step['label'] }}
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="work-slips">
                    <div class="work-slip">
                        <p class="work-kicker">Customer</p>
                        <p class="work-slip-title">{{ $project['customer']['title'] }}</p>
                        <p class="work-slip-detail">{{ $project['customer']['detail'] }}</p>
                    </div>
                    <div class="work-slip">
                        <p class="work-kicker">Operations</p>
                        <p class="work-slip-title">{{ $project['operations']['title'] }}</p>
                        <p class="work-slip-detail">{{ $project['operations']['detail'] }}</p>
                    </div>
                </div>
            </div>
        </figure>
    </div>

    <div class="container-sky">
        <div class="work-story" data-work-copy>
            <div class="work-story-main">
                <p class="work-indexline">
                    <span class="work-index">{{ $project['index'] }}</span>
                    <span>{{ $project['category'] }}</span>
                </p>
                <h3 class="text-h3">{{ $project['title'] }}</h3>
                <p class="text-body work-summary">{{ $project['summary'] }}</p>
                <p class="work-disclosure">{{ $project['disclosure'] }}</p>
            </div>

            <div class="work-story-meta">
                <dl class="work-meta">
                    <div>
                        <dt>Industry</dt>
                        <dd>{{ $project['industry'] }}</dd>
                    </div>
                    <div>
                        <dt>Scope</dt>
                        <dd>{{ $project['scope'] }}</dd>
                    </div>
                    <div>
                        <dt>Platform</dt>
                        <dd>{{ $project['platform'] }}</dd>
                    </div>
                </dl>

                @if ($caseStudyReady)
                    <a class="work-cta" href="{{ $project['href'] }}">
                        Explore case study
                        <span class="work-arrow" aria-hidden="true">→</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>
