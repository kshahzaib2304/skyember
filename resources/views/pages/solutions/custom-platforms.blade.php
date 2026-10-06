{{--
    Chunk 13 - Custom platforms solution.
    Shared foundation connecting workflows, users, channels, systems.
    Secondary proof CTA has no href until a platform proof route exists.
--}}
@extends('layouts.app')

@php
    $title = 'Custom Platform Development | SKYEMBER';
    $description = 'Custom platforms that connect workflows, users, data, and digital experiences when separate systems no longer work as one.';
    $canonical = route('solutions.custom-platforms');

    $platformProofHref = null;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $uri = trim($route->uri(), '/');
        $isGet = in_array('GET', $route->methods(), true);
        $isPlatformProof = str_starts_with($uri, 'work/') && str_contains($uri, 'platform')
            && ! str_contains($uri, 'business-operations');

        if ($isGet && $isPlatformProof) {
            $platformProofHref = '/'.$uri;
            break;
        }
    }

    $problems = [
        [
            'index' => '01',
            'title' => 'Different users need different experiences',
            'body' => 'Customers, employees, partners, operators, and administrators may interact with the same underlying business capability in completely different ways.',
        ],
        [
            'index' => '02',
            'title' => 'The data has to stay connected',
            'body' => 'A change made in one experience may affect another workflow, record, or decision.',
        ],
        [
            'index' => '03',
            'title' => 'The platform has to absorb change',
            'body' => 'New workflows, new channels, new rules, and new users should not require rebuilding the foundation every time.',
        ],
    ];

    $when = [
        'Several teams, user groups, or channels need to work from connected information.',
        'The same underlying business capability appears in multiple experiences.',
        'Existing products leave important workflows, rules, or relationships disconnected.',
        'The foundation needs to support new experiences without becoming a collection of unrelated applications.',
    ];

    $dimensions = [
        [
            'index' => '01',
            'id' => 'plat-domain',
            'title' => 'Shared domain',
            'body' => 'The records and relationships that define the system — customers, orders, assets, accounts, documents, events. The actual entities change by project.',
            'visual' => 'domain',
        ],
        [
            'index' => '02',
            'id' => 'plat-experiences',
            'title' => 'Connected experiences',
            'body' => 'Different users can interact with the same platform through experiences designed for their role — customer, staff, partner, admin.',
            'visual' => 'experiences',
        ],
        [
            'index' => '03',
            'id' => 'plat-workflow',
            'title' => 'Workflow + rules',
            'body' => 'The platform carries decisions, permissions, state transitions, approvals, and business rules between experiences.',
            'visual' => 'workflow',
        ],
        [
            'index' => '04',
            'id' => 'plat-extension',
            'title' => 'Extension points',
            'body' => 'The foundation can support future applications, APIs, integrations, automation, and additional channels without rebuilding the core.',
            'visual' => 'extension',
        ],
    ];

    $contexts = [
        ['role' => 'Customer', 'action' => 'View status'],
        ['role' => 'Staff', 'action' => 'Work action'],
        ['role' => 'Partner', 'action' => 'Submit request'],
    ];

    $principles = [
        [
            'title' => 'Boundaries',
            'body' => 'Each experience sees what it needs without exposing everything.',
        ],
        [
            'title' => 'Ownership',
            'body' => 'Important data has a clear system of record.',
        ],
        [
            'title' => 'Consistency',
            'body' => 'Rules remain consistent across workflows and channels.',
        ],
        [
            'title' => 'Extensibility',
            'body' => 'New capability can be added without making the whole platform harder to understand.',
        ],
    ];

    $enterprise = [
        ['title' => 'Identity', 'body' => 'Who can access what?'],
        ['title' => 'Permissions', 'body' => 'What can each role do?'],
        ['title' => 'Auditability', 'body' => 'What happened and when?'],
        ['title' => 'Reliability', 'body' => 'What happens when something fails?'],
        ['title' => 'Administration', 'body' => 'Who controls the system?'],
        ['title' => 'Evolution', 'body' => 'How does the platform change safely?'],
    ];

    $engagement = [
        ['title' => 'Map', 'body' => 'Understand the system as it exists.'],
        ['title' => 'Model', 'body' => 'Define records, relationships, and boundaries.'],
        ['title' => 'Shape', 'body' => 'Design the experiences and workflows.'],
        ['title' => 'Engineer', 'body' => 'Build the platform foundation.'],
        ['title' => 'Evolve', 'body' => 'Extend it as the system changes.'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Custom platform development',
                'serviceType' => 'Custom platform development',
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
                        'name' => 'Solutions',
                        'item' => route('solutions'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Custom platforms',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="plat-page" data-plat aria-labelledby="plat-heading">
        <header class="plat-hero">
            <div class="container-sky">
                <nav class="plat-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('solutions') }}">Solutions</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Custom platforms</li>
                    </ol>
                </nav>

                <div class="plat-hero-grid">
                    <div class="plat-hero-copy">
                        <p class="text-eyebrow">Custom platforms</p>
                        <h1 id="plat-heading" class="plat-title">
                            One platform for the work between systems.
                        </h1>
                        <p class="text-body plat-support">
                            We design and engineer custom platforms that bring workflows, users, data, and connected experiences together when individual tools no longer make the whole system work.
                        </p>
                        <div class="plat-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Talk to SKYEMBER
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            @if ($platformProofHref)
                                <a class="solutions-cta solutions-cta-secondary" href="{{ $platformProofHref }}">
                                    See how we approach complex systems
                                    <span class="solutions-arrow" aria-hidden="true">→</span>
                                </a>
                            @else
                                <p class="plat-cta-quiet">
                                    See how we approach complex systems
                                    <span aria-hidden="true">→</span>
                                </p>
                            @endif
                        </div>
                    </div>

                    <figure class="plat-surface" data-plat-reveal aria-label="Connected platform with several experiences sharing one foundation">
                        <div class="plat-surface-bar">
                            <p class="plat-surface-name">Platform</p>
                            <p class="plat-muted">Shared foundation</p>
                        </div>
                        <div class="plat-doors" aria-hidden="true">
                            <div class="plat-door">
                                <p class="plat-door-role">Customer</p>
                                <p class="plat-door-view">Experience</p>
                            </div>
                            <div class="plat-door is-focus">
                                <p class="plat-door-role">Staff</p>
                                <p class="plat-door-view">Workspace</p>
                            </div>
                            <div class="plat-door">
                                <p class="plat-door-role">Partner</p>
                                <p class="plat-door-view">Portal</p>
                            </div>
                        </div>
                        <div class="plat-foundation" aria-hidden="true">
                            <p class="plat-kicker">Shared record</p>
                            <p class="plat-record-title">Order OR-2841</p>
                            <p class="plat-muted">Workflows · Rules · Connected data</p>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="plat-band" aria-labelledby="plat-problem-heading">
            <div class="container-sky">
                <h2 id="plat-problem-heading" class="text-h2 plat-measure">
                    The difficult part is what happens between the systems.
                </h2>
                <ol class="plat-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="plat-index">{{ $item['index'] }}</p>
                            <h3 class="plat-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="plat-band plat-band-tight" aria-labelledby="plat-when-heading">
            <div class="container-sky">
                <h2 id="plat-when-heading" class="text-h2 plat-measure">
                    Choose a custom platform when the system is bigger than one screen.
                </h2>
                <ol class="plat-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="plat-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="plat-band" aria-labelledby="plat-place-heading">
            <div class="container-sky">
                <div class="plat-measure">
                    <h2 id="plat-place-heading" class="text-h2">A platform is a foundation for experiences.</h2>
                    <p class="text-body plat-lead">
                        Custom platform development treats domain, experience, workflow, and extension as one system — so digital platforms stay connected as they grow.
                    </p>
                </div>

                <div class="plat-anatomy">
                    @foreach ($dimensions as $item)
                        <article class="plat-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="plat-beat-copy">
                                <p class="plat-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>

                            <figure class="plat-panel" aria-hidden="true">
                                @if ($item['visual'] === 'domain')
                                    <p class="plat-kicker">Domain</p>
                                    <p class="plat-record-title">Customer CU-418</p>
                                    <ul class="plat-related">
                                        <li class="is-current"><span>Orders</span><span>3 open</span></li>
                                        <li><span>Accounts</span><span>Linked</span></li>
                                        <li><span>Documents</span><span>2</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'experiences')
                                    <p class="plat-kicker">Same record</p>
                                    <ul class="plat-related">
                                        <li><span>Customer</span><span>Status view</span></li>
                                        <li class="is-current"><span>Staff</span><span>Work view</span></li>
                                        <li><span>Partner</span><span>Request view</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'workflow')
                                    <p class="plat-kicker">Controlled action</p>
                                    <ol class="plat-steps">
                                        <li class="is-done">Submitted</li>
                                        <li class="is-current">Approval required</li>
                                        <li>Released</li>
                                    </ol>
                                @else
                                    <p class="plat-kicker">Foundation</p>
                                    <ul class="plat-related">
                                        <li><span>Customer</span><span>Live</span></li>
                                        <li><span>Staff</span><span>Live</span></li>
                                        <li class="is-current"><span>New channel</span><span>Added</span></li>
                                    </ul>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="plat-band plat-band-tight" aria-labelledby="plat-signature-heading">
            <div class="container-sky">
                <div class="plat-measure">
                    <h2 id="plat-signature-heading" class="text-h2">Same foundation, different experience.</h2>
                    <p class="text-body plat-lead">
                        One underlying record. Three contexts. The essential data stays the same — the experience changes.
                    </p>
                </div>

                <div class="plat-signature" data-plat-signature>
                    <div class="plat-one-record">
                        <p class="plat-kicker">One record</p>
                        <p class="plat-record-title">Request RQ-1094</p>
                        <p class="plat-muted">Shared across experiences</p>
                    </div>
                    <ol class="plat-contexts" aria-label="Same record in different experiences">
                        @foreach ($contexts as $context)
                            <li data-plat-context>
                                <p class="plat-context-role">{{ $context['role'] }}</p>
                                <p class="plat-muted">{{ $context['action'] }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </section>

        <section class="plat-band" aria-labelledby="plat-pile-heading">
            <div class="container-sky plat-measure">
                <h2 id="plat-pile-heading" class="text-h2">A platform is not several applications glued together.</h2>
                <p class="text-body">
                    The value is in the relationships: shared information, consistent rules, deliberate boundaries, and experiences that remain connected as the system grows.
                </p>
            </div>
        </section>

        <section class="plat-band plat-band-tight" aria-labelledby="plat-clear-heading">
            <div class="container-sky">
                <h2 id="plat-clear-heading" class="text-h2 plat-measure">
                    Complex underneath. Clear on the surface.
                </h2>
                <ul class="plat-principles">
                    @foreach ($principles as $item)
                        <li>
                            <h3 class="plat-principle-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>

                <figure class="plat-map" aria-label="Platform layers from experience to data">
                    <div class="plat-map-experiences" aria-hidden="true">
                        <p class="plat-map-layer">Experience</p>
                        <div class="plat-map-doors">
                            <span>Customer</span>
                            <span>Staff</span>
                            <span>Partner</span>
                        </div>
                    </div>
                    <div class="plat-map-stack" aria-hidden="true">
                        <p><span>Workflows</span><span>Approvals · state · routing</span></p>
                        <p><span>Domain</span><span>Records · relationships</span></p>
                        <p><span>Rules</span><span>Permissions · policy</span></p>
                        <p><span>Data</span><span>System of record</span></p>
                    </div>
                </figure>
            </div>
        </section>

        <section class="plat-band" aria-labelledby="plat-enterprise-heading">
            <div class="container-sky">
                <h2 id="plat-enterprise-heading" class="text-h2 plat-measure">
                    Built for the people who operate the system.
                </h2>
                <ul class="plat-enterprise">
                    @foreach ($enterprise as $item)
                        <li>
                            <h3 class="plat-enterprise-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="plat-band" aria-labelledby="plat-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative platform</p>
                <div class="plat-rep-grid">
                    <div class="plat-rep-copy">
                        <h2 id="plat-rep-heading" class="text-h2">One foundation. Several ways to work.</h2>
                        <p class="text-body">
                            A representative platform connecting customer, staff, and operational experiences through shared records and workflows.
                        </p>
                        <p class="plat-disclosure">Representative platform — not a published client engagement.</p>
                    </div>
                    <figure class="plat-surface plat-surface-deep" aria-hidden="true">
                        <div class="plat-surface-bar">
                            <p class="plat-surface-name">Platform</p>
                            <p class="plat-muted">Three experiences</p>
                        </div>
                        <div class="plat-doors">
                            <div class="plat-door">
                                <p class="plat-door-role">Customer</p>
                                <p class="plat-door-view">Track request</p>
                            </div>
                            <div class="plat-door is-focus">
                                <p class="plat-door-role">Staff</p>
                                <p class="plat-door-view">Resolve work</p>
                            </div>
                            <div class="plat-door">
                                <p class="plat-door-role">Partner</p>
                                <p class="plat-door-view">Submit update</p>
                            </div>
                        </div>
                        <div class="plat-foundation">
                            <p class="plat-kicker">Shared</p>
                            <p class="plat-record-title">Request RQ-1094</p>
                            <p class="plat-muted">One record · Many doors</p>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="plat-band plat-band-tight" aria-labelledby="plat-engage-heading">
            <div class="container-sky">
                <div class="plat-measure">
                    <h2 id="plat-engage-heading" class="text-h2">Start with the system, not the screens.</h2>
                    <p class="text-body plat-lead">
                        We map the people, workflows, information, rules, and boundaries first. Then we determine which parts belong in the platform and which should remain separate.
                    </p>
                </div>
                <ol class="plat-engage">
                    @foreach ($engagement as $item)
                        <li>
                            <h3 class="plat-engage-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="plat-band" aria-labelledby="plat-honest-heading">
            <div class="container-sky plat-measure">
                <h2 id="plat-honest-heading" class="text-h2">Sometimes a platform is more than you need.</h2>
                <p class="text-body">
                    If one workflow, one product, or an existing platform already solves the problem well, building a custom platform can add unnecessary complexity. We would rather identify that early.
                </p>
            </div>
        </section>

        <section class="plat-close" aria-labelledby="plat-cta-heading">
            <div class="container-sky plat-close-band">
                <div>
                    <h2 id="plat-cta-heading" class="text-h2">Have a system that no longer fits in separate tools?</h2>
                    <p class="text-body plat-close-copy">
                        Tell us where the boundaries are breaking down. We'll help you understand whether a custom platform is the right shape for the problem.
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
