{{--
    Chunk 24 - Company Technology.
    How we make technical decisions — not a stack catalogue.
    Completes the Company family.
--}}
@extends('layouts.app')

@php
    $title = 'Technology & Engineering Approach | SKYEMBER';
    $description = 'How SKYEMBER approaches architecture, data, security, integrations, observability, AI, and technology choices for long-lived software systems.';
    $canonical = route('company.technology');

    $fit = [
        [
            'index' => '01',
            'title' => 'Context',
            'body' => 'A technology choice only makes sense in relation to the product, workload, team, users, data, and constraints around it.',
        ],
        [
            'index' => '02',
            'title' => 'Trade-offs',
            'body' => 'Every architecture gives something and costs something: complexity, flexibility, operational burden, speed, maintainability, or control.',
        ],
        [
            'index' => '03',
            'title' => 'Lifetime',
            'body' => 'The right solution is not merely the easiest one to start. It should remain understandable and changeable as the software evolves.',
        ],
    ];

    $decide = [
        ['index' => '01', 'title' => 'Problem', 'body' => 'What must the system actually do?'],
        ['index' => '02', 'title' => 'Constraints', 'body' => 'What cannot be ignored?'],
        ['index' => '03', 'title' => 'Shape', 'body' => 'What architecture fits the behavior?'],
        ['index' => '04', 'title' => 'Trade-offs', 'body' => 'What are we gaining and giving up?'],
        ['index' => '05', 'title' => 'Ownership', 'body' => 'Can the people operating the system understand and maintain it?'],
    ];

    $options = [
        [
            'label' => 'Option A',
            'path' => 'Simple application',
            'then' => 'Low operational complexity',
            'cost' => 'Fastest path',
            'chosen' => true,
        ],
        [
            'label' => 'Option B',
            'path' => 'Distributed services',
            'then' => 'More independent scaling',
            'cost' => 'Higher operational complexity',
            'chosen' => false,
        ],
        [
            'label' => 'Option C',
            'path' => 'Managed platform services',
            'then' => 'Reduced infrastructure burden',
            'cost' => 'Provider constraints',
            'chosen' => false,
        ],
    ];

    $behind = [
        [
            'title' => 'Domain',
            'body' => 'What concepts, relationships, and business rules does the software need to represent?',
        ],
        [
            'title' => 'Data',
            'body' => 'Where does information live, who owns it, how does it change, and what must remain consistent?',
        ],
        [
            'title' => 'Interfaces',
            'body' => 'How do users, applications, services, and external systems interact with the platform?',
        ],
        [
            'title' => 'Security',
            'body' => 'Who is allowed to access what, and where should trust boundaries exist?',
        ],
        [
            'title' => 'Operations',
            'body' => 'How will the system be deployed, observed, changed, and recovered?',
        ],
        [
            'title' => 'Evolution',
            'body' => 'What happens when the product has new requirements six months or three years from now?',
        ],
    ];

    $security = [
        ['title' => 'Identity', 'body' => 'Who is this?'],
        ['title' => 'Access', 'body' => 'What can they do?'],
        ['title' => 'Boundary', 'body' => 'What can this component reach?'],
        ['title' => 'Secret', 'body' => 'Where does sensitive information live?'],
        ['title' => 'Change', 'body' => 'Who can alter the system?'],
        ['title' => 'Evidence', 'body' => 'What should remain traceable?'],
    ];

    $boundaries = [
        ['title' => 'Application', 'body' => 'Owns business behavior'],
        ['title' => 'API', 'body' => 'Exposes deliberate capabilities'],
        ['title' => 'Integration', 'body' => 'Connects external systems'],
        ['title' => 'Background work', 'body' => 'Moves non-immediate work out of the request'],
        ['title' => 'Infrastructure', 'body' => 'Runs the system'],
    ];

    $observe = [
        ['title' => 'Logs', 'body' => 'What happened?'],
        ['title' => 'Metrics', 'body' => 'How often / how much?'],
        ['title' => 'Traces', 'body' => 'Where did the request go?'],
        ['title' => 'Events', 'body' => 'What changed?'],
        ['title' => 'Audit', 'body' => 'Who changed it?'],
    ];

    $categories = ['Web', 'Mobile', 'Backend', 'Data', 'Cloud', 'AI'];

    $buildBuy = [
        [
            'title' => 'Build',
            'body' => 'When the capability is central to the product or requires specific business behavior.',
        ],
        [
            'title' => 'Buy',
            'body' => 'When an existing product already solves the problem well.',
        ],
        [
            'title' => 'Integrate',
            'body' => 'When the capability belongs outside the system but the workflow needs it connected.',
        ],
    ];

    $aiParts = ['Model', 'Context', 'Tools', 'Rules', 'Evaluation'];

    $delivery = [
        [
            'title' => 'Product Engineering',
            'body' => 'Turn the architecture into software.',
            'href' => route('services.product-engineering'),
        ],
        [
            'title' => 'Web Development',
            'body' => 'Deliver the experience through the browser.',
            'href' => route('services.web-development'),
        ],
        [
            'title' => 'Cloud & DevOps',
            'body' => 'Operate the resulting system in production.',
            'href' => route('services.cloud-devops'),
        ],
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
            'current' => false,
        ],
        [
            'title' => 'Technology',
            'body' => 'How we make technical decisions.',
            'href' => route('company.technology'),
            'current' => true,
        ],
    ];
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
                'name' => 'Technology',
                'item' => $canonical,
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="cot-page" data-cot aria-labelledby="cot-heading">
        <header class="cot-hero">
            <div class="container-sky">
                <nav class="cot-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('company') }}">Company</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Technology</li>
                    </ol>
                </nav>

                <div class="cot-hero-grid">
                    <div class="cot-hero-copy">
                        <p class="text-eyebrow">Technology</p>
                        <h1 id="cot-heading" class="cot-title">
                            Technology is a decision, not an identity.
                        </h1>
                        <p class="text-body cot-support">
                            We choose technologies, architectures, and operating patterns around the problem, the people, the constraints, and the life the software needs to have.
                        </p>
                        <div class="cot-hero-actions">
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

                    <figure class="cot-surface" data-cot-hero aria-label="Technical decision surface">
                        <p class="cot-kicker">Technical decision</p>
                        <div class="cot-surface-block">
                            <p class="cot-kicker">Requirement</p>
                            <p class="text-body">Many users · Changing workflows · Auditability · Moderate traffic · Existing data</p>
                        </div>
                        <div class="cot-surface-block">
                            <p class="cot-kicker">Constraints</p>
                            <p class="text-body">Team · Budget · Time · Security · Operations</p>
                        </div>
                        <div class="cot-surface-block">
                            <p class="cot-kicker">Decision</p>
                            <p class="cot-surface-decision">Architecture shaped around the actual system</p>
                        </div>
                        <p class="cot-muted">Trade-offs are visible.</p>
                    </figure>
                </div>
            </div>
        </header>

        <section class="cot-band" aria-labelledby="cot-fit-heading">
            <div class="container-sky">
                <h2 id="cot-fit-heading" class="text-h2 cot-measure">
                    Choose the architecture for the work it has to do.
                </h2>
                <ul class="cot-fit">
                    @foreach ($fit as $item)
                        <li>
                            <p class="cot-index">{{ $item['index'] }}</p>
                            <h3 class="cot-fit-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-decide-heading">
            <div class="container-sky">
                <h2 id="cot-decide-heading" class="text-h2 cot-measure">
                    Start with the decision. Then choose the technology.
                </h2>
                <ol class="cot-decide">
                    @foreach ($decide as $item)
                        <li>
                            <p class="cot-index">{{ $item['index'] }}</p>
                            <h3 class="cot-decide-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-same-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-same-heading" class="text-h2">
                        Good engineering does not start with the framework.
                    </h2>
                    <p class="text-body cot-lead">
                        A multi-user operational application with changing workflows and moderate growth.
                    </p>
                </div>
                <ul class="cot-options" data-cot-trade>
                    @foreach ($options as $item)
                        <li @class(['is-chosen' => $item['chosen']]) data-cot-option>
                            <p class="cot-kicker">{{ $item['label'] }}</p>
                            <h3 class="cot-option-title">{{ $item['path'] }}</h3>
                            <p class="text-body">{{ $item['then'] }}</p>
                            <p class="cot-muted">{{ $item['cost'] }}</p>
                        </li>
                    @endforeach
                </ul>
                <p class="cot-output">
                    <span class="cot-kicker">Decision</span>
                    Choose the smallest architecture that satisfies the actual requirements.
                </p>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-simple-heading">
            <div class="container-sky cot-measure">
                <h2 id="cot-simple-heading" class="text-h2">
                    Start simple. Add complexity when the problem requires it.
                </h2>
                <p class="text-body cot-lead">
                    A distributed architecture, event-driven system, multiple services, or specialized infrastructure can be valuable. But each introduces more boundaries, operational concerns, and failure modes. Complexity should solve a problem rather than demonstrate ambition.
                </p>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-behind-heading">
            <div class="container-sky">
                <h2 id="cot-behind-heading" class="text-h2 cot-measure">
                    The decisions behind the system.
                </h2>
                <ul class="cot-behind">
                    @foreach ($behind as $item)
                        <li>
                            <h3 class="cot-behind-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-security-heading">
            <div class="container-sky">
                <h2 id="cot-security-heading" class="text-h2 cot-measure">
                    Security is a property of the system, not a final checklist.
                </h2>
                <ul class="cot-security">
                    @foreach ($security as $item)
                        <li>
                            <h3 class="cot-security-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-data-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-data-heading" class="text-h2">
                        The data model often matters more than the framework.
                    </h2>
                    <p class="text-body cot-lead">
                        A framework can change. A poorly understood domain model can remain a problem for years.
                    </p>
                </div>
                <div class="cot-domain" aria-label="Representative domain relationships">
                    <p class="cot-domain-root">Customer</p>
                    <ul>
                        <li>
                            Order
                            <span class="cot-muted">Items · Payment · Status</span>
                        </li>
                        <li>Activity</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-bound-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-bound-heading" class="text-h2">
                        Good systems know where one responsibility ends.
                    </h2>
                    <p class="text-body cot-lead">
                        Boundaries exist for a reason.
                    </p>
                </div>
                <ul class="cot-bounds">
                    @foreach ($boundaries as $item)
                        <li>
                            <h3 class="cot-bound-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-observe-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-observe-heading" class="text-h2">
                        A system should be able to explain itself.
                    </h2>
                    <p class="text-body cot-lead">
                        Operational visibility begins in the design of the system. Important actions need meaningful signals so failures and unexpected behavior can be understood rather than guessed.
                    </p>
                </div>
                <ul class="cot-observe">
                    @foreach ($observe as $item)
                        <li>
                            <h3 class="cot-observe-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
                <p class="text-body cot-cross">
                    How those signals are implemented in production is part of
                    <a href="{{ route('services.cloud-devops') }}">Cloud &amp; DevOps</a>.
                </p>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-cats-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-cats-heading" class="text-h2">
                        Use the technology that earns its place.
                    </h2>
                    <p class="text-body cot-lead">
                        Chosen according to the product's requirements, team capability, operational context, and expected lifetime.
                    </p>
                </div>
                <ul class="cot-cats">
                    @foreach ($categories as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <p class="cot-muted cot-cats-note">
                    Frameworks change. Good engineering decisions remain understandable.
                </p>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-build-heading">
            <div class="container-sky">
                <h2 id="cot-build-heading" class="text-h2 cot-measure">
                    Not everything should be built.
                </h2>
                <ul class="cot-build">
                    @foreach ($buildBuy as $item)
                        <li>
                            <h3 class="cot-build-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-ai-heading">
            <div class="container-sky">
                <div class="cot-measure">
                    <h2 id="cot-ai-heading" class="text-h2">
                        AI is another architectural decision.
                    </h2>
                    <p class="text-body cot-lead">
                        A model is one component in an AI-enabled system. Context, data, tool access, permissions, evaluation, cost, latency, fallback behavior, and human oversight all influence whether the design is appropriate.
                    </p>
                </div>
                <p class="cot-ai" aria-label="AI as a system, not a model">
                    @foreach ($aiParts as $part)
                        <span>{{ $part }}</span>
                        @if (! $loop->last)
                            <span class="cot-ai-plus" aria-hidden="true">+</span>
                        @endif
                    @endforeach
                    <span class="cot-ai-eq" aria-hidden="true">=</span>
                    <span class="cot-ai-system">System</span>
                </p>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-record-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative engineering decision</p>
                <h2 id="cot-record-heading" class="text-h2 cot-measure">
                    The right architecture is the one the system can live with.
                </h2>
                <div class="cot-record" data-cot-reveal aria-label="Representative architecture decision">
                    <div class="cot-record-row">
                        <p class="cot-kicker">Requirement</p>
                        <p class="text-body">Multi-user business application</p>
                    </div>
                    <div class="cot-record-row">
                        <p class="cot-kicker">Constraints</p>
                        <p class="text-body">Changing workflows · Auditability · Small engineering team</p>
                    </div>
                    <div class="cot-record-row">
                        <p class="cot-kicker">Options</p>
                        <p class="text-body">Monolith · Service decomposition · Managed platform</p>
                    </div>
                    <div class="cot-record-row">
                        <p class="cot-kicker">Decision</p>
                        <p class="cot-surface-decision">Start as a modular application.</p>
                    </div>
                    <div class="cot-record-row">
                        <p class="cot-kicker">Why</p>
                        <p class="text-body">Lower operational complexity. Clear domain boundaries. Room to split later if needed.</p>
                    </div>
                    <div class="cot-record-row">
                        <p class="cot-kicker">Revisit when</p>
                        <p class="text-body">Independent scaling or ownership becomes a real requirement.</p>
                    </div>
                </div>
                <p class="cot-muted cot-record-note">
                    Representative — not a claim about a specific client system.
                </p>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-change-heading">
            <div class="container-sky cot-measure">
                <h2 id="cot-change-heading" class="text-h2">
                    Good decisions can survive changing tools.
                </h2>
                <p class="text-body cot-lead">
                    The system should not depend on the assumption that one framework, vendor, or infrastructure product will remain the best choice forever. Strong boundaries, clear domain models, tests, documentation, and observable behavior make change possible.
                </p>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-meet-heading">
            <div class="container-sky">
                <h2 id="cot-meet-heading" class="text-h2 cot-measure">
                    Technical decisions meet delivery here.
                </h2>
                <ul class="cot-meet">
                    @foreach ($delivery as $item)
                        <li>
                            <a href="{{ $item['href'] }}">
                                <h3 class="cot-meet-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-band cot-band-tight" aria-labelledby="cot-exit-heading">
            <div class="container-sky cot-measure">
                <h2 id="cot-exit-heading" class="text-h2">
                    Sometimes the best architecture is the one you already have.
                </h2>
                <p class="text-body cot-lead">
                    An existing system may have the right foundations even if parts of the experience need improvement. We would rather extend, simplify, or replace selectively than redesign the architecture simply because a new approach is more interesting.
                </p>
            </div>
        </section>

        <section class="cot-band" aria-labelledby="cot-areas-heading">
            <div class="container-sky">
                <h2 id="cot-areas-heading" class="text-h2 cot-measure">Company</h2>
                <ul class="cot-areas">
                    @foreach ($areas as $item)
                        <li @class(['is-current' => $item['current']])>
                            @if ($item['current'])
                                <h3 class="cot-areas-title">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            @else
                                <a href="{{ $item['href'] }}">
                                    <h3 class="cot-areas-title">{{ $item['title'] }}</h3>
                                    <p class="text-body">{{ $item['body'] }}</p>
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="cot-close" aria-labelledby="cot-cta-heading">
            <div class="container-sky cot-close-band">
                <div>
                    <h2 id="cot-cta-heading" class="text-h2">
                        Have a technical decision ahead of you?
                    </h2>
                    <p class="text-body cot-close-copy">
                        Tell us what the system needs to do, what constraints you're working within, and where the uncertainty is.
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
