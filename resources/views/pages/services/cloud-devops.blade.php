{{--
    Chunk 20 - Cloud & DevOps service.
    Production as an engineered environment — not hosting or a logo wall.
    Cross-links to Product Engineering and Web Development are live.
--}}
@extends('layouts.app')

@php
    $title = 'Cloud & DevOps Services | SKYEMBER';
    $description = 'Cloud and DevOps engineering for reliable software delivery: infrastructure as code, CI/CD, observability, security, resilience, and recovery.';
    $canonical = route('services.cloud-devops');

    $problems = [
        [
            'index' => '01',
            'title' => 'Environments drift',
            'body' => 'When infrastructure and configuration are changed manually, environments become harder to reproduce and reason about.',
        ],
        [
            'index' => '02',
            'title' => 'Releases create risk',
            'body' => 'A deployment is not complete because code reached a server. It needs validation, controlled change, and a way back when something goes wrong.',
        ],
        [
            'index' => '03',
            'title' => 'Silence is not reliability',
            'body' => 'Without useful logs, metrics, traces, alerts, and operational context, teams can know that something is wrong without knowing why.',
        ],
    ];

    $when = [
        'Releases still depend on manual steps, environment changes, or tribal knowledge.',
        'Infrastructure needs to be reproducible, reviewable, and safer to change.',
        'The team can see that something is wrong, but lacks enough operational context to diagnose it quickly.',
        'The software needs stronger deployment, security, recovery, or operational foundations as it grows.',
    ];

    $activities = [
        [
            'index' => '01',
            'id' => 'ops-foundation',
            'title' => 'Cloud foundation',
            'body' => 'Establish environments, networking, identity, secrets, resource organization, and baseline governance appropriate to the workload — cloud infrastructure shaped around the product.',
            'visual' => 'foundation',
        ],
        [
            'index' => '02',
            'id' => 'ops-iac',
            'title' => 'Infrastructure as code',
            'body' => 'Infrastructure configuration becomes versioned, reviewable, reproducible software rather than a collection of undocumented console changes.',
            'visual' => 'iac',
        ],
        [
            'index' => '03',
            'id' => 'ops-delivery',
            'title' => 'Delivery automation',
            'body' => 'Build, test, security checks, approval, deployment, and rollback become part of a repeatable release path — CI/CD and deployment automation as controlled change.',
            'visual' => 'delivery',
        ],
        [
            'index' => '04',
            'id' => 'ops-observe',
            'title' => 'Observability',
            'body' => 'Logs, metrics, traces, health, alerts, and deployments give the team useful visibility. Observe the system, not just the server.',
            'visual' => 'observe',
        ],
        [
            'index' => '05',
            'id' => 'ops-recover',
            'title' => 'Reliability + recovery',
            'body' => 'Health checks, rollback, backups, recovery, capacity, and failure isolation. When something fails, the system should have a known response.',
            'visual' => 'recover',
        ],
    ];

    $trail = [
        ['label' => 'Code', 'detail' => 'The change is named'],
        ['label' => 'Release', 'detail' => 'Build and checks'],
        ['label' => 'Environment', 'detail' => 'Where it will run'],
        ['label' => 'Deployment', 'detail' => 'The change is live'],
        ['label' => 'Runtime', 'detail' => 'Behavior in production'],
        ['label' => 'Telemetry', 'detail' => 'The trail remains'],
    ];

    $principles = [
        ['title' => 'Repeatable', 'body' => 'Environments can be reproduced consistently.'],
        ['title' => 'Controlled', 'body' => 'Important changes pass through review and policy.'],
        ['title' => 'Observable', 'body' => 'The system exposes enough information to understand behavior.'],
        ['title' => 'Recoverable', 'body' => 'Failure has a known response.'],
    ];

    $security = [
        ['title' => 'Identity', 'body' => 'Least-privilege access and clear ownership.'],
        ['title' => 'Secrets', 'body' => 'Sensitive configuration managed deliberately.'],
        ['title' => 'Change', 'body' => 'Infrastructure and application changes are reviewable.'],
        ['title' => 'Policy', 'body' => 'Guardrails prevent known classes of mistakes.'],
        ['title' => 'Audit', 'body' => 'Important operational actions leave evidence.'],
    ];

    $failure = [
        ['title' => 'Detect', 'body' => 'Know something changed.'],
        ['title' => 'Contain', 'body' => 'Limit the impact.'],
        ['title' => 'Recover', 'body' => 'Restore a known-good state.'],
        ['title' => 'Learn', 'body' => 'Keep the failure from becoming repeatable.'],
    ];

    $engage = [
        ['title' => 'Assess', 'body' => 'Understand the current environment and release path.'],
        ['title' => 'Standardize', 'body' => 'Define repeatable environments and safe change patterns.'],
        ['title' => 'Automate', 'body' => 'Replace fragile operational steps with versioned workflows.'],
        ['title' => 'Observe', 'body' => 'Make system behavior visible.'],
        ['title' => 'Harden', 'body' => 'Prepare security, recovery, and operational ownership.'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Cloud and DevOps services',
                'serviceType' => 'Cloud and DevOps',
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
                        'name' => 'Cloud & DevOps',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="ops-page" data-ops aria-labelledby="ops-heading">
        <header class="ops-hero">
            <div class="container-sky">
                <nav class="ops-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Cloud &amp; DevOps</li>
                    </ol>
                </nav>

                <div class="ops-hero-grid">
                    <div class="ops-hero-copy">
                        <p class="text-eyebrow">Cloud &amp; DevOps</p>
                        <h1 id="ops-heading" class="ops-title">
                            From commit to production, with confidence.
                        </h1>
                        <p class="text-body ops-support">
                            We design cloud foundations and delivery systems that make software easier to release, observe, secure, recover, and operate as it changes. Cloud DevOps services and DevOps consulting here mean a production path you can follow — not a hosting brochure.
                        </p>
                        <div class="ops-hero-actions">
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

                    <figure class="ops-surface" data-ops-reveal aria-label="One release followed from checks to live health">
                        <div class="ops-surface-bar">
                            <p class="ops-surface-name">Release 2026.10.06-184</p>
                            <p class="ops-muted">One change, end to end</p>
                        </div>
                        <div class="ops-surface-body">
                            <p class="ops-kicker">Change</p>
                            <p class="ops-surface-title">Inventory reservation service</p>
                            <ul class="ops-list">
                                <li class="is-done"><span>Build</span><span>Passed</span></li>
                                <li class="is-done"><span>Tests</span><span>Passed</span></li>
                                <li class="is-done"><span>Security</span><span>Passed</span></li>
                                <li class="is-done"><span>Approval</span><span>Granted</span></li>
                                <li class="is-current"><span>Deploy</span><span>Live</span></li>
                            </ul>
                            <p class="ops-kicker ops-kicker-later">Health</p>
                            <ul class="ops-signals">
                                <li>Logs</li>
                                <li>Metrics</li>
                                <li>Traces</li>
                            </ul>
                            <p class="ops-muted">Rollback available</p>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="ops-band" aria-labelledby="ops-problem-heading">
            <div class="container-sky">
                <h2 id="ops-problem-heading" class="text-h2 ops-measure">
                    Production is where every hidden assumption becomes real.
                </h2>
                <ol class="ops-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="ops-index">{{ $item['index'] }}</p>
                            <h3 class="ops-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-when-heading">
            <div class="container-sky">
                <h2 id="ops-when-heading" class="text-h2 ops-measure">
                    Bring Cloud &amp; DevOps in when production needs to become predictable.
                </h2>
                <ol class="ops-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="ops-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-place-heading">
            <div class="container-sky">
                <div class="ops-measure">
                    <h2 id="ops-place-heading" class="text-h2">A production system that can be understood and changed.</h2>
                    <p class="text-body ops-lead">
                        Cloud engineering that treats production as part of the product: infrastructure as code, CI/CD automation, observability, cloud security, and site reliability as practices — not a catalog of vendors.
                    </p>
                </div>

                <div class="ops-anatomy">
                    @foreach ($activities as $item)
                        <article class="ops-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="ops-beat-copy">
                                <p class="ops-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>
                            <figure class="ops-panel" aria-hidden="true">
                                @if ($item['visual'] === 'foundation')
                                    <p class="ops-kicker">Environments</p>
                                    <ol class="ops-steps">
                                        <li>Development</li>
                                        <li>Staging</li>
                                        <li class="is-current">Production</li>
                                    </ol>
                                @elseif ($item['visual'] === 'iac')
                                    <p class="ops-kicker">Change</p>
                                    <ol class="ops-steps">
                                        <li class="is-done">Review</li>
                                        <li class="is-current">Plan</li>
                                        <li>Apply</li>
                                    </ol>
                                @elseif ($item['visual'] === 'delivery')
                                    <p class="ops-kicker">Release</p>
                                    <ol class="ops-steps">
                                        <li class="is-done">Verified</li>
                                        <li class="is-current">Deploy</li>
                                        <li>Rollback ready</li>
                                    </ol>
                                @elseif ($item['visual'] === 'observe')
                                    <p class="ops-kicker">Signals</p>
                                    <ul class="ops-list">
                                        <li class="is-current"><span>Logs</span><span>Related</span></li>
                                        <li><span>Metrics</span><span>Rate</span></li>
                                        <li><span>Traces</span><span>Path</span></li>
                                    </ul>
                                @else
                                    <p class="ops-kicker">Response</p>
                                    <ul class="ops-list">
                                        <li class="is-current"><span>Detect</span></li>
                                        <li><span>Contain</span></li>
                                        <li><span>Recover</span></li>
                                    </ul>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-signature-heading">
            <div class="container-sky">
                <div class="ops-measure">
                    <h2 id="ops-signature-heading" class="text-h2">A release should leave a trail.</h2>
                    <p class="text-body ops-lead">
                        Inventory reservation fix. The same change is traceable across its journey — not a process ribbon.
                    </p>
                </div>
                <ol class="ops-signature" data-ops-signature aria-label="One change followed from code to telemetry">
                    @foreach ($trail as $step)
                        <li data-ops-step>
                            <p class="ops-step-label">{{ $step['label'] }}</p>
                            <p class="ops-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-infra-heading">
            <div class="container-sky">
                <h2 id="ops-infra-heading" class="text-h2 ops-measure">
                    The infrastructure should reflect what the software needs.
                </h2>
                <ul class="ops-principles">
                    @foreach ($principles as $item)
                        <li>
                            <p class="ops-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-sec-heading">
            <div class="container-sky">
                <div class="ops-measure">
                    <h2 id="ops-sec-heading" class="text-h2">Security belongs in the delivery path.</h2>
                    <p class="text-body ops-lead">
                        DevSecOps here means identity, secrets, review, policy, and evidence in the same path as the change — cloud security as part of delivery, not a separate poster.
                    </p>
                </div>
                <ul class="ops-security">
                    @foreach ($security as $item)
                        <li>
                            <h3 class="ops-survive-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-path-heading">
            <div class="container-sky ops-measure">
                <h2 id="ops-path-heading" class="text-h2">Make the safe path the easy path.</h2>
                <p class="text-body ops-lead">
                    Teams should not need to rediscover the deployment process every time. Reusable environments, templates, automation, and documented paths — a golden path in plain language — can make the common operation easier without hiding the underlying system.
                </p>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-half-heading">
            <div class="container-sky">
                <div class="ops-measure">
                    <h2 id="ops-half-heading" class="text-h2">The deployment is only half the story.</h2>
                    <p class="text-body ops-lead">
                        Operational visibility after the change is live — not a promised uptime figure.
                    </p>
                </div>
                <figure class="ops-surface ops-observe" data-ops-observe aria-label="Representative operations visibility">
                    <div class="ops-surface-bar">
                        <p class="ops-surface-name">Release 2026.10.06-184</p>
                        <p class="ops-muted">Production</p>
                    </div>
                    <div class="ops-surface-body">
                        <p class="ops-kicker">Recent change</p>
                        <p class="ops-surface-title">Inventory reservation</p>
                        <ul class="ops-list">
                            <li class="is-current"><span>Health</span><span data-ops-health>Checking</span></li>
                            <li><span>Logs</span><span>Related events</span></li>
                            <li><span>Metrics</span><span>Request rate</span></li>
                            <li><span>Trace</span><span>Reservation → ledger → response</span></li>
                        </ul>
                    </div>
                </figure>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-fail-heading">
            <div class="container-sky">
                <h2 id="ops-fail-heading" class="text-h2 ops-measure">Design for the day something fails.</h2>
                <ul class="ops-failure">
                    @foreach ($failure as $item)
                        <li>
                            <p class="ops-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative production system</p>
                <div class="ops-rep-grid">
                    <div class="ops-rep-copy">
                        <h2 id="ops-rep-heading" class="text-h2">From release to runtime, nothing important should disappear.</h2>
                        <p class="text-body">
                            Release, environment, checks, deploy, health, logs, metrics, trace, recovery — in one representative system.
                        </p>
                        <p class="ops-disclosure">Representative system — not an operated client environment.</p>
                    </div>
                    <figure class="ops-surface" aria-label="Representative system">
                        <div class="ops-surface-bar">
                            <p class="ops-surface-name">Representative system</p>
                            <p class="ops-muted">Release to runtime</p>
                        </div>
                        <div class="ops-surface-body">
                            <ul class="ops-list">
                                <li class="is-current"><span>Release</span><span>2026.10.06-184</span></li>
                                <li><span>Environment</span><span>Production</span></li>
                                <li><span>Checks</span><span>Complete</span></li>
                                <li><span>Deploy</span><span>Live</span></li>
                                <li><span>Health</span><span>Visible</span></li>
                                <li><span>Recovery</span><span>Known</span></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-pe-heading">
            <div class="container-sky ops-measure">
                <h2 id="ops-pe-heading" class="text-h2">Production starts with the software being built.</h2>
                <p class="text-body ops-lead">
                    Architecture, application behavior, data, testing, and deployment decisions influence one another. Cloud and DevOps work is strongest when it is part of the product-engineering conversation rather than a final handoff.
                </p>
                <a class="solutions-cta" href="{{ route('services.product-engineering') }}">
                    See Product Engineering
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-web-heading">
            <div class="container-sky ops-measure">
                <h2 id="ops-web-heading" class="text-h2">The production environment shapes the experience.</h2>
                <p class="text-body ops-lead">
                    Performance, caching, asset delivery, deployment behavior, and runtime health all affect what users experience in the browser.
                </p>
                <a class="solutions-cta" href="{{ route('services.web-development') }}">
                    See Web Development
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="ops-band" aria-labelledby="ops-honest-heading">
            <div class="container-sky ops-measure">
                <h2 id="ops-honest-heading" class="text-h2">Sometimes the existing platform is enough.</h2>
                <p class="text-body">
                    Not every application needs a new cloud architecture. Sometimes the right answer is to simplify what already exists, automate a few critical paths, or use the capabilities of an existing platform more effectively.
                </p>
            </div>
        </section>

        <section class="ops-band ops-band-tight" aria-labelledby="ops-engage-heading">
            <div class="container-sky">
                <h2 id="ops-engage-heading" class="text-h2 ops-measure">Start with how the software needs to live.</h2>
                <ol class="ops-engage">
                    @foreach ($engage as $item)
                        <li>
                            <p class="ops-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ops-close" aria-labelledby="ops-cta-heading">
            <div class="container-sky ops-close-band">
                <div>
                    <h2 id="ops-cta-heading" class="text-h2">Need a production environment you can trust?</h2>
                    <p class="text-body ops-close-copy">
                        Tell us what you're running today, where releases become difficult, and what you need production to do better.
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
