{{--
    Chunk 16 - Product Engineering service.
    Depth benchmark for the Services family. Not a technology-stack page.
    Sibling Explore links stay gated until those routes exist.
--}}
@extends('layouts.app')

@php
    $title = 'Product Engineering Services | SKYEMBER';
    $description = 'Product engineering from product direction and UX through architecture, software development, testing, and production delivery.';
    $canonical = route('services.product-engineering');

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

    $gaps = [
        [
            'index' => '01',
            'title' => 'Intent gets lost',
            'body' => 'Requirements become tickets, tickets become screens, and the original problem can disappear between them.',
        ],
        [
            'index' => '02',
            'title' => 'Design and engineering drift apart',
            'body' => 'A product can look right in a prototype and still fail when real states, data, permissions, edge cases, and performance enter the picture.',
        ],
        [
            'index' => '03',
            'title' => 'Production changes the problem',
            'body' => 'The software now has real users, real data, deployment concerns, failures, maintenance, and new requirements.',
        ],
    ];

    $when = [
        'You have a product idea, but the path from requirements to working software isn\'t clear.',
        'The product already exists, but its architecture, experience, or engineering process is slowing change.',
        'Multiple disciplines need to move together: product, UX, frontend, backend, data, infrastructure.',
        'The next release matters as much as the first one, and the foundation needs to support both.',
    ];

    $disciplines = [
        [
            'index' => '01',
            'id' => 'pe-direction',
            'title' => 'Product direction',
            'body' => 'Translate business requirements and user needs into a focused product model for digital product development.',
            'visual' => 'direction',
        ],
        [
            'index' => '02',
            'id' => 'pe-experience',
            'title' => 'Experience',
            'body' => 'Shape the information architecture, interaction model, visual system, and states people actually use.',
            'visual' => 'experience',
        ],
        [
            'index' => '03',
            'id' => 'pe-engineering',
            'title' => 'Engineering',
            'body' => 'Turn the product model into maintainable software — domain logic, frontend, backend, data, integrations, permissions, and workflows.',
            'visual' => 'engineering',
        ],
        [
            'index' => '04',
            'id' => 'pe-quality',
            'title' => 'Quality + delivery',
            'body' => 'Make the software dependable enough to ship and evolve — testing, validation, deployment, monitoring, and release discipline.',
            'visual' => 'quality',
        ],
    ];

    $signature = [
        ['label' => 'Flow', 'detail' => 'Intent shaped'],
        ['label' => 'Interface', 'detail' => 'Experience clear'],
        ['label' => 'Domain', 'detail' => 'Record coherent'],
        ['label' => 'Test', 'detail' => 'Behavior checked'],
        ['label' => 'Release', 'detail' => 'In production'],
    ];

    $depth = [
        [
            'title' => 'Domain',
            'body' => 'The business concepts and relationships should remain coherent as the product grows.',
        ],
        [
            'title' => 'State',
            'body' => 'Real software contains loading, empty, error, partial, approval, permission, and transition states.',
        ],
        [
            'title' => 'Data',
            'body' => 'Records need ownership, relationships, validation, and integrity.',
        ],
        [
            'title' => 'Integration',
            'body' => 'External systems and internal services need explicit boundaries.',
        ],
        [
            'title' => 'Quality',
            'body' => 'Testing and validation should protect behavior as the product changes.',
        ],
    ];

    $uiStates = ['Ready', 'Loading', 'Empty', 'Validation', 'Success', 'Error'];

    $backend = [
        'Business rules',
        'Domain logic',
        'Data model',
        'Permissions',
        'APIs / integrations',
        'Background work',
        'Audit / trace',
    ];

    $tech = ['Web', 'Mobile', 'Backend', 'Data', 'Cloud', 'AI'];

    $specialists = [
        [
            'need' => 'Need experience',
            'title' => 'UI/UX Design',
            'href' => '/services/ui-ux-design',
        ],
        [
            'need' => 'Need web implementation',
            'title' => 'Web Development',
            'href' => '/services/web-development',
        ],
        [
            'need' => 'Need mobile',
            'title' => 'Mobile Development',
            'href' => '/services/mobile-development',
        ],
        [
            'need' => 'Need production foundation',
            'title' => 'Cloud & DevOps',
            'href' => '/services/cloud-devops',
        ],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Product engineering services',
                'serviceType' => 'Product engineering',
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
                        'item' => route('services'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Product Engineering',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="pe-page" data-pe aria-labelledby="pe-heading">
        <header class="pe-hero">
            <div class="container-sky">
                <nav class="pe-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Product Engineering</li>
                    </ol>
                </nav>

                <div class="pe-hero-grid">
                    <div class="pe-hero-copy">
                        <p class="text-eyebrow">Product Engineering</p>
                        <h1 id="pe-heading" class="pe-title">
                            From product intent to production software.
                        </h1>
                        <p class="text-body pe-support">
                            We bring product thinking, experience design, architecture, engineering, testing, and delivery together around the thing being built.
                        </p>
                        <div class="pe-hero-actions">
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

                    <figure class="pe-surface" data-pe-reveal aria-label="Product progressing from intent toward production">
                        <div class="pe-surface-bar">
                            <p class="pe-surface-name">Product</p>
                            <p class="pe-muted">Intent → production</p>
                        </div>
                        <div class="pe-surface-body">
                            <p class="pe-kicker">Working interface</p>
                            <div class="pe-hero-row">
                                <div>
                                    <p class="pe-mini">User flow</p>
                                    <p class="pe-surface-title">Start → complete</p>
                                </div>
                                <div>
                                    <p class="pe-mini">Core record</p>
                                    <p class="pe-surface-title">Order OR-2841</p>
                                </div>
                                <div>
                                    <p class="pe-mini">Action</p>
                                    <p class="pe-surface-title">Continue</p>
                                </div>
                            </div>
                            <ul class="pe-list">
                                <li class="is-current"><span>Workflow</span><span>Shaped</span></li>
                                <li><span>Domain</span><span>Modeled</span></li>
                                <li><span>Interface</span><span>In place</span></li>
                                <li><span>Production</span><span>Ready</span></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="pe-band" aria-labelledby="pe-gap-heading">
            <div class="container-sky">
                <h2 id="pe-gap-heading" class="text-h2 pe-measure">
                    The hardest part is the distance between an idea and software people can rely on.
                </h2>
                <ol class="pe-problems">
                    @foreach ($gaps as $item)
                        <li>
                            <p class="pe-index">{{ $item['index'] }}</p>
                            <h3 class="pe-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="pe-band pe-band-tight" aria-labelledby="pe-when-heading">
            <div class="container-sky">
                <h2 id="pe-when-heading" class="text-h2 pe-measure">
                    Bring Product Engineering in when the product needs to become real.
                </h2>
                <ol class="pe-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="pe-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="pe-band" aria-labelledby="pe-connected-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-connected-heading" class="text-h2">The disciplines stay connected.</h2>
                    <p class="text-body pe-lead">
                        Product engineering services keep product direction, experience, software architecture, and delivery as one effort — so software product development does not lose the problem midstream.
                    </p>
                </div>

                <div class="pe-anatomy">
                    @foreach ($disciplines as $item)
                        <article class="pe-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="pe-beat-copy">
                                <p class="pe-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>
                            <figure class="pe-panel" aria-hidden="true">
                                @if ($item['visual'] === 'direction')
                                    <p class="pe-kicker">Requirement</p>
                                    <p class="pe-panel-title">Need → user flow</p>
                                    <ul class="pe-list">
                                        <li><span>Request</span><span>Captured</span></li>
                                        <li class="is-current"><span>Flow</span><span>Defined</span></li>
                                        <li><span>Outcome</span><span>Clear</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'experience')
                                    <p class="pe-kicker">Experience</p>
                                    <p class="pe-panel-title">Flow → interface</p>
                                    <ol class="pe-steps">
                                        <li class="is-done">Structure</li>
                                        <li class="is-current">States</li>
                                        <li>Clarity</li>
                                    </ol>
                                @elseif ($item['visual'] === 'engineering')
                                    <p class="pe-kicker">System</p>
                                    <p class="pe-panel-title">Action through layers</p>
                                    <ul class="pe-list">
                                        <li class="is-current"><span>Interface</span><span>Submit</span></li>
                                        <li><span>Rules</span><span>Applied</span></li>
                                        <li><span>Record</span><span>Updated</span></li>
                                    </ul>
                                @else
                                    <p class="pe-kicker">Release</p>
                                    <ol class="pe-steps">
                                        <li class="is-done">Prepared</li>
                                        <li class="is-current">Verified</li>
                                        <li>Live</li>
                                    </ol>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="pe-band pe-band-tight" aria-labelledby="pe-signature-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-signature-heading" class="text-h2">One product. One connected engineering effort.</h2>
                    <p class="text-body pe-lead">
                        The same product viewed through experience, engineering, and delivery — recognizably one system.
                    </p>
                </div>
                <ol class="pe-signature" data-pe-signature aria-label="One product across connected disciplines">
                    @foreach ($signature as $step)
                        <li data-pe-step>
                            <p class="pe-step-label">{{ $step['label'] }}</p>
                            <p class="pe-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="pe-band" aria-labelledby="pe-depth-heading">
            <div class="container-sky">
                <h2 id="pe-depth-heading" class="text-h2 pe-measure">
                    Built beyond the happy path.
                </h2>
                <ul class="pe-depth">
                    @foreach ($depth as $item)
                        <li>
                            <h3 class="pe-depth-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="pe-band pe-band-tight" aria-labelledby="pe-ui-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-ui-heading" class="text-h2">The interface is part of the engineering.</h2>
                    <p class="text-body pe-lead">
                        A production interface has to handle more than the designed state. It has to communicate loading, failure, permissions, validation, empty results, responsive behavior, accessibility, and changing data without losing clarity.
                    </p>
                </div>
                <figure class="pe-states" data-pe-states aria-label="One interface across production states">
                    <p class="pe-kicker">Interface states</p>
                    <ol class="pe-state-list">
                        @foreach ($uiStates as $state)
                            <li data-pe-state>{{ $state }}</li>
                        @endforeach
                    </ol>
                    <div class="pe-state-surface" aria-hidden="true">
                        <p class="pe-surface-title" data-pe-state-label>Ready</p>
                        <p class="pe-muted">One surface. Real conditions.</p>
                    </div>
                </figure>
            </div>
        </section>

        <section class="pe-band" aria-labelledby="pe-backend-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-backend-heading" class="text-h2">The system behind the interface has to make the experience possible.</h2>
                    <p class="text-body pe-lead">
                        Backend engineering begins with the behavior the product needs — not with a fashionable stack.
                    </p>
                </div>
                <ul class="pe-backend">
                    @foreach ($backend as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="pe-band pe-band-tight" aria-labelledby="pe-test-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-test-heading" class="text-h2">Confidence is designed into the delivery.</h2>
                    <p class="text-body pe-lead">
                        We validate critical behavior before treating a feature as finished.
                    </p>
                </div>
                <figure class="pe-eval" aria-label="Representative validation surface">
                    <div>
                        <p class="pe-kicker">Order flow</p>
                        <ul class="pe-check">
                            <li>payment state</li>
                            <li>reservation</li>
                            <li>permission</li>
                            <li>validation</li>
                        </ul>
                    </div>
                    <div>
                        <p class="pe-kicker">Edge cases</p>
                        <ul class="pe-check">
                            <li>empty state</li>
                            <li>failure state</li>
                            <li>retry</li>
                            <li>duplicate action</li>
                        </ul>
                    </div>
                </figure>
            </div>
        </section>

        <section class="pe-band" aria-labelledby="pe-tech-heading">
            <div class="container-sky pe-measure">
                <h2 id="pe-tech-heading" class="text-h2">Technology should serve the product.</h2>
                <p class="text-body pe-lead">
                    The right architecture depends on the problem, the team, the constraints, and the life the software is expected to have. We choose technologies for their fit—not because a stack is fashionable.
                </p>
                <ul class="pe-tech">
                    @foreach ($tech as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="pe-band pe-band-tight" aria-labelledby="pe-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative system</p>
                <div class="pe-rep-grid">
                    <div class="pe-rep-copy">
                        <h2 id="pe-rep-heading" class="text-h2">See one system where product, experience, and engineering meet.</h2>
                        <p class="text-body">
                            A representative business system connecting orders, inventory, workflows, and operational records through one coherent product experience.
                        </p>
                        <p class="pe-disclosure">Representative system — product, experience, and engineering. Not evidence of every service.</p>
                        <a class="solutions-cta" href="{{ route('work.business-operations-platform') }}">
                            Explore the system
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                    <figure class="pe-surface pe-surface-deep" aria-hidden="true">
                        <div class="pe-surface-bar">
                            <p class="pe-surface-name">Operations</p>
                            <p class="pe-muted">Order · stock · workflow</p>
                        </div>
                        <div class="pe-surface-body">
                            <p class="pe-kicker">Record</p>
                            <p class="pe-surface-title">SO-10482</p>
                            <ul class="pe-list">
                                <li class="is-current"><span>Workflow</span><span>Active</span></li>
                                <li><span>Inventory</span><span>Linked</span></li>
                                <li><span>Customer</span><span>Connected</span></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="pe-band" aria-labelledby="pe-specialist-heading">
            <div class="container-sky">
                <div class="pe-measure">
                    <h2 id="pe-specialist-heading" class="text-h2">You may not need the full discipline.</h2>
                    <p class="text-body pe-lead">
                        A mature product may need focused frontend engineering, UX work, mobile development, or cloud support rather than a complete product-engineering engagement. We can bring in the discipline the system actually needs.
                    </p>
                </div>
                <ul class="pe-specialists">
                    @foreach ($specialists as $item)
                        @php($ready = $routeExists($item['href']))
                        <li>
                            <p class="pe-muted">{{ $item['need'] }}</p>
                            @if ($ready)
                                <a class="pe-specialist-link" href="{{ $item['href'] }}">{{ $item['title'] }}</a>
                            @else
                                <p class="pe-specialist-title">{{ $item['title'] }}</p>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="pe-close" aria-labelledby="pe-cta-heading">
            <div class="container-sky pe-close-band">
                <div>
                    <h2 id="pe-cta-heading" class="text-h2">Have a product that needs to become real?</h2>
                    <p class="text-body pe-close-copy">
                        Tell us what you're building, where it stands today, and what needs to happen next.
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
