{{--
    Chunk 23 - Company Process.
    Engagement transparency — how we work with people while building.
    Not a homepage Process repeat. Technology gated.
--}}
@extends('layouts.app')

@php
    $title = 'Our Software Development Process | SKYEMBER';
    $description = 'See how SKYEMBER engagements move from problem understanding and product framing through design, engineering, validation, release, and continued evolution.';
    $canonical = route('company.process');

    $questions = [
        'What is happening today?',
        'What needs to be different?',
        'What would make the work worth doing?',
    ];

    $understand = [
        'Existing workflows are examined',
        'Users and stakeholders are understood',
        'Constraints become explicit',
        'Existing systems are considered',
        'Assumptions are surfaced',
    ];

    $frame = [
        'Scope',
        'Priority',
        'User flow',
        'System boundaries',
        'Success criteria',
    ];

    $make = [
        'Idea',
        'Flow',
        'Prototype',
        'Working interface',
    ];

    $validateQs = [
        'Does the workflow make sense?',
        'Does the software behave correctly?',
        'Do edge cases hold?',
        'Does the implementation match the intent?',
    ];

    $release = [
        'Production',
        'Documentation',
        'Access',
        'Monitoring',
        'Known constraints',
        'Next decisions',
    ];

    $continue = [
        'New product capability',
        'Design refinement',
        'Engineering work',
        'Web or mobile expansion',
        'Cloud improvements',
        'AI or automation',
        'Ongoing product evolution',
    ];

    $decisionRecords = [
        ['label' => 'Scope', 'status' => 'Accepted'],
        ['label' => 'UX direction', 'status' => 'Accepted'],
        ['label' => 'Architecture', 'status' => 'Review'],
        ['label' => 'Release', 'status' => 'Ready'],
    ];

    $involved = [
        [
            'title' => 'Product',
            'line' => 'What are we solving?',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'Design',
            'line' => 'How should it work?',
            'href' => route('services.ui-ux-design'),
        ],
        [
            'title' => 'Engineering',
            'line' => 'What must the system do?',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'Delivery',
            'line' => 'How does it reach production safely?',
            'href' => route('services.cloud-devops'),
        ],
    ];

    $shared = [
        [
            'title' => 'Context',
            'body' => 'Bring the people who understand the work.',
        ],
        [
            'title' => 'Access',
            'body' => 'Give the team enough access to systems, data, and constraints.',
        ],
        [
            'title' => 'Decisions',
            'body' => 'Make important product decisions when they become necessary.',
        ],
        [
            'title' => 'Feedback',
            'body' => 'Test the work against reality, not assumptions.',
        ],
    ];

    $comms = [
        'Visible decisions',
        'Concise updates',
        'Working software',
        'Explicit questions',
        'Known risks',
    ];

    $scope = [
        'New information',
        'Understand impact',
        'Revisit decision',
        'Adjust scope / priority',
        'Continue',
    ];

    $leaves = [
        'A clearer product direction',
        'A stronger system model',
        'A usable product experience',
        'Working software',
        'Visible decisions',
        'A foundation for what comes next',
    ];

    $areas = [
        [
            'title' => 'About',
            'body' => 'Who we are.',
            'href' => route('company.about'),
            'current' => false,
        ],
        [
            'title' => 'Process',
            'body' => 'How we work.',
            'href' => route('company.process'),
            'current' => true,
        ],
        [
            'title' => 'Technology',
            'body' => 'How we make technical decisions.',
            'href' => '/company/technology',
            'current' => false,
        ],
    ];

    $routeExists = function (string $path): bool {
        $normalized = trim(parse_url($path, PHP_URL_PATH) ?: $path, '/');

        foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
            $matchesPath = trim($route->uri(), '/') === $normalized;
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
                'item' => route('company'),
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'Process',
                'item' => $canonical,
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="cop-page" data-cop aria-labelledby="cop-heading">
        <header class="cop-hero">
            <div class="container-sky">
                <nav class="cop-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('company') }}">Company</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Process</li>
                    </ol>
                </nav>

                <div class="cop-hero-grid">
                    <div class="cop-hero-copy">
                        <p class="text-eyebrow">How we work</p>
                        <h1 id="cop-heading" class="cop-title">
                            Good engagements make the work clearer.
                        </h1>
                        <p class="text-body cop-support">
                            We start with the problem, make the important decisions visible, and keep product, design, engineering, and delivery connected as the work moves toward production.
                        </p>
                        <div class="cop-hero-actions">
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

                    <figure class="cop-thread" aria-label="One thread through the engagement">
                        <p class="cop-thread-label">The work</p>
                        <ol class="cop-thread-steps">
                            <li>Problem</li>
                            <li>Decision</li>
                            <li>Implementation</li>
                            <li>Outcome</li>
                        </ol>
                        <p class="cop-thread-center">SKYEMBER</p>
                        <p class="cop-muted">Product · Design · Engineering</p>
                        <p class="cop-thread-note">
                            The client is never handed from one isolated department to another.
                        </p>
                    </figure>
                </div>
            </div>
        </header>

        <section class="cop-band" aria-labelledby="cop-start-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-start-heading" class="text-h2">
                        It starts with a problem, not a specification.
                    </h2>
                    <p class="text-body cop-lead">
                        You may already know the software you want. You may only know what is not working. Either is a valid starting point. The first step is understanding the business context, users, constraints, existing systems, and what actually needs to change.
                    </p>
                </div>
                <ol class="cop-questions">
                    @foreach ($questions as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-understand-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-understand-heading" class="text-h2">
                        Understand the situation before choosing the solution.
                    </h2>
                    <p class="text-body cop-lead">
                        Discovery is used to make the situation clear — not to invent ceremony.
                    </p>
                </div>
                <ul class="cop-list">
                    @foreach ($understand as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <p class="cop-output">
                    <span class="cop-kicker">The output</span>
                    A clearer picture of the problem and the decisions that matter.
                </p>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-frame-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-frame-heading" class="text-h2">
                        Turn a broad problem into a shape worth building.
                    </h2>
                    <p class="text-body cop-lead">
                        We define what needs to exist, what does not, and what needs to be decided before implementation can move with confidence.
                    </p>
                </div>
                <ul class="cop-frame">
                    @foreach ($frame as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <div class="cop-surface" aria-hidden="true">
                    <p class="cop-surface-before">Scattered requirements</p>
                    <p class="cop-surface-after">Clear product surface</p>
                </div>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-make-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-make-heading" class="text-h2">
                        Make the important parts tangible early.
                    </h2>
                    <p class="text-body cop-lead">
                        Flows become prototypes. System behavior becomes interfaces. Technical assumptions become working code. Uncertain ideas are tested. Product, UX, and Engineering work together.
                    </p>
                </div>
                <ol class="cop-make">
                    @foreach ($make as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-validate-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-validate-heading" class="text-h2">
                        Test the decisions before the system carries them.
                    </h2>
                </div>
                <ul class="cop-list">
                    @foreach ($validateQs as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <div class="cop-validate" aria-label="Representative validation surface">
                    <div class="cop-validate-row">
                        <p class="cop-kicker">Assumption</p>
                        <p class="text-body">Users will understand the state.</p>
                    </div>
                    <div class="cop-validate-row">
                        <p class="cop-kicker">Prototype</p>
                        <p class="cop-check">Checked</p>
                    </div>
                    <div class="cop-validate-row">
                        <p class="cop-kicker">Implementation</p>
                        <p class="cop-check">Checked</p>
                    </div>
                    <div class="cop-validate-row">
                        <p class="cop-kicker">Check</p>
                        <ul class="cop-check-list">
                            <li>State visible</li>
                            <li>Action understandable</li>
                            <li>Recovery defined</li>
                        </ul>
                    </div>
                    <div class="cop-validate-row">
                        <p class="cop-kicker">Decision</p>
                        <p class="cop-check">Keep</p>
                    </div>
                </div>
                <p class="cop-output">
                    <span class="cop-kicker">The result</span>
                    A decision becomes more certain.
                </p>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-release-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-release-heading" class="text-h2">
                        Release is a handoff, not a finish line.
                    </h2>
                    <p class="text-body cop-lead">
                        The team should understand what now exists and how it continues.
                    </p>
                </div>
                <ul class="cop-frame">
                    @foreach ($release as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <p class="text-body cop-cross">
                    Production reliability is part of delivery —
                    <a href="{{ route('services.cloud-devops') }}">Cloud &amp; DevOps</a>
                    covers how releases stay understandable in production.
                </p>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-continue-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-continue-heading" class="text-h2">
                        The relationship can end. The product doesn't have to.
                    </h2>
                    <p class="text-body cop-lead">
                        Some engagements finish after delivery. Others continue where continued involvement creates value.
                    </p>
                </div>
                <ul class="cop-list">
                    @foreach ($continue as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-decisions-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-decisions-heading" class="text-h2">
                        The work gets easier to trust when the decisions are visible.
                    </h2>
                </div>
                <div class="cop-decision" data-cop-reveal aria-label="Representative decision record">
                    <p class="cop-kicker">Decision</p>
                    <p class="cop-decision-title">
                        Use one shared order record across counter and fulfillment.
                    </p>
                    <div class="cop-decision-grid">
                        <div>
                            <p class="cop-kicker">Why</p>
                            <p class="text-body">Keeps status, stock, and activity connected.</p>
                        </div>
                        <div>
                            <p class="cop-kicker">Trade-off</p>
                            <p class="text-body">More deliberate domain modeling.</p>
                        </div>
                        <div>
                            <p class="cop-kicker">Status</p>
                            <p class="cop-check">Accepted</p>
                        </div>
                    </div>
                </div>
                <ul class="cop-records">
                    @foreach ($decisionRecords as $item)
                        <li>
                            <span>{{ $item['label'] }}</span>
                            <span>{{ $item['status'] }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-involved-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-involved-heading" class="text-h2">
                        The right people join the problem at the right time.
                    </h2>
                    <p class="text-body cop-lead">
                        Not every engagement needs every discipline at every moment.
                    </p>
                </div>
                <ul class="cop-involved">
                    @foreach ($involved as $item)
                        <li>
                            <a href="{{ $item['href'] }}">
                                <h3 class="cop-involved-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['line'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-shared-heading">
            <div class="container-sky">
                <h2 id="cop-shared-heading" class="text-h2 cop-measure">
                    Good software is a shared responsibility.
                </h2>
                <ul class="cop-shared">
                    @foreach ($shared as $item)
                        <li>
                            <h3 class="cop-shared-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-comms-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-comms-heading" class="text-h2">
                        Clear work needs clear communication.
                    </h2>
                    <p class="text-body cop-lead">
                        Communication should reduce uncertainty.
                    </p>
                </div>
                <ul class="cop-frame">
                    @foreach ($comms as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-scope-heading">
            <div class="container-sky">
                <div class="cop-measure">
                    <h2 id="cop-scope-heading" class="text-h2">
                        The scope can change. The reasoning should remain visible.
                    </h2>
                    <p class="text-body cop-lead">
                        New information changes software projects. When the work changes, the impact on scope, priority, design, engineering, and delivery should be understood before the change quietly becomes part of the project.
                    </p>
                </div>
                <ol class="cop-make">
                    @foreach ($scope as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-leaves-heading">
            <div class="container-sky">
                <h2 id="cop-leaves-heading" class="text-h2 cop-measure">
                    A good engagement leaves more than software behind.
                </h2>
                <ul class="cop-list">
                    @foreach ($leaves as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-band cop-band-tight" aria-labelledby="cop-fit-heading">
            <div class="container-sky cop-measure">
                <h2 id="cop-fit-heading" class="text-h2">
                    The process should fit the problem.
                </h2>
                <p class="text-body cop-lead">
                    A small focused build should not carry the ceremony of a large platform programme. A regulated workflow may need more validation and control. A new product may need more discovery. The shape of the engagement should reflect the uncertainty and risk in the work.
                </p>
            </div>
        </section>

        <section class="cop-band" aria-labelledby="cop-areas-heading">
            <div class="container-sky">
                <h2 id="cop-areas-heading" class="text-h2 cop-measure">Company</h2>
                <ul class="cop-areas">
                    @foreach ($areas as $item)
                        @php($ready = $routeExists($item['href']))
                        <li @class(['is-current' => $item['current']])>
                            @if ($item['current'])
                                <h3 class="cop-areas-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @elseif ($ready)
                                <a href="{{ $item['href'] }}">
                                    <h3 class="cop-areas-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['body'] }}</p>
                                </a>
                            @else
                                <h3 class="cop-areas-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cop-close" aria-labelledby="cop-cta-heading">
            <div class="container-sky cop-close-band">
                <div>
                    <h2 id="cop-cta-heading" class="text-h2">Not sure where to start?</h2>
                    <p class="text-body cop-close-copy">
                        Tell us what you're trying to change. We can start from there.
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
