{{--
    Chunk 11 - Business software solution.
    Decision → what we put in place → proof. Not an ERP catalog.
--}}
@extends('layouts.app')

@php
    $title = 'Custom Business Software Development | SKYEMBER';
    $description = 'Custom business software built around your workflows, records, rules, and teams — from operational systems to connected business platforms.';
    $canonical = route('solutions.business-software');
    $proof = route('work.business-operations-platform');

    $problems = [
        [
            'index' => '01',
            'title' => 'Information is scattered',
            'body' => 'Different teams maintain different records, spreadsheets, and operational tools.',
        ],
        [
            'index' => '02',
            'title' => 'Work crosses too many systems',
            'body' => 'An action in one area requires another team to re-enter, verify, or reconcile the information elsewhere.',
        ],
        [
            'index' => '03',
            'title' => 'The process becomes the software',
            'body' => 'People adapt themselves to whatever the existing software allows instead of software adapting to the way the organization actually works.',
        ],
    ];

    $when = [
        'Your teams depend on spreadsheets or manual records.',
        'Sales, inventory, purchasing, finance, or operations need to share the same underlying information.',
        'The workflow has approvals, roles, exceptions, or business rules generic software cannot express well.',
        'You need one system that can evolve as the business changes.',
    ];

    $rules = [
        ['title' => 'Roles', 'body' => 'Different people should see and do different things.'],
        ['title' => 'Approvals', 'body' => 'Important actions can follow explicit review and authorization paths.'],
        ['title' => 'Business rules', 'body' => 'The system can encode the rules that make the workflow unique.'],
        ['title' => 'Traceability', 'body' => 'Important actions remain connected to their records and history.'],
    ];

    $stages = ['Understand', 'Shape', 'Engineer', 'Validate'];

    $chain = ['Customer', 'Order', 'Inventory', 'Fulfillment', 'Invoice', 'Payment', 'Activity'];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Custom business software development',
                'serviceType' => 'Business software development',
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
                        'name' => 'Business software',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="bizsoft-page" data-bizsoft aria-labelledby="bizsoft-heading">
        <header class="bizsoft-hero">
            <div class="container-sky">
                <nav class="bizsoft-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('solutions') }}">Solutions</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Business software</li>
                    </ol>
                </nav>

                <div class="bizsoft-hero-grid">
                    <div class="bizsoft-hero-copy">
                        <p class="text-eyebrow">Business software</p>
                        <h1 id="bizsoft-heading" class="bizsoft-title">
                            Business software, shaped around the way your business runs.
                        </h1>
                        <p class="text-body bizsoft-support">
                            Replace disconnected spreadsheets, rigid workflows, and scattered operational tools with software built around the way your teams actually work.
                        </p>
                        <div class="bizsoft-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Talk to SKYEMBER
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            <a class="solutions-cta solutions-cta-secondary" href="{{ $proof }}">
                                See representative system
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                    <figure class="bizsoft-workspace" data-bizsoft-reveal aria-label="Operations workspace with Orders, Inventory, Purchasing, and Accounts">
                        <div class="bizsoft-workspace-bar">
                            <p class="bizsoft-workspace-name">Operations workspace</p>
                            <p class="bizsoft-muted">Connected business environment</p>
                        </div>
                        <div class="bizsoft-workspace-body">
                            <nav class="bizsoft-rail" aria-hidden="true">
                                <p class="bizsoft-kicker">Areas</p>
                                <ul>
                                    <li class="is-current">Orders</li>
                                    <li>Inventory</li>
                                    <li>Purchasing</li>
                                    <li>Accounts</li>
                                </ul>
                            </nav>
                            <div class="bizsoft-workspace-main">
                                <p class="bizsoft-kicker">Active work</p>
                                <ul class="bizsoft-queue">
                                    <li class="is-current">
                                        <span>Counter refill</span>
                                        <span>Awaiting reservation</span>
                                    </li>
                                    <li>
                                        <span>Morning run</span>
                                        <span>Ready to post</span>
                                    </li>
                                    <li>
                                        <span>Supplier receipt</span>
                                        <span>In checking</span>
                                    </li>
                                    <li>
                                        <span>Clinic invoice</span>
                                        <span>Payment open</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="bizsoft-band" aria-labelledby="bizsoft-problem-heading">
            <div class="container-sky">
                <h2 id="bizsoft-problem-heading" class="text-h2 bizsoft-measure">
                    When the business outgrows the tools around it.
                </h2>
                <ol class="bizsoft-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="bizsoft-index">{{ $item['index'] }}</p>
                            <h3 class="bizsoft-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="bizsoft-band bizsoft-band-tight" aria-labelledby="bizsoft-when-heading">
            <div class="container-sky">
                <h2 id="bizsoft-when-heading" class="text-h2 bizsoft-measure">
                    Choose business software when the workflow itself is the problem.
                </h2>
                <ol class="bizsoft-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="bizsoft-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="bizsoft-band" aria-labelledby="bizsoft-place-heading">
            <div class="container-sky">
                <div class="bizsoft-measure">
                    <h2 id="bizsoft-place-heading" class="text-h2">What we put in place.</h2>
                    <p class="text-body bizsoft-lead">
                        Custom business software development for operational systems and business workflows — the records, inventory management, and software engineering that keep a web application honest as the work moves.
                    </p>
                </div>

                <div class="bizsoft-domains">
                    <article class="bizsoft-domain" aria-labelledby="bizsoft-ops-heading">
                        <div class="bizsoft-domain-copy">
                            <h3 id="bizsoft-ops-heading" class="text-h3">Operations</h3>
                            <p class="text-body">Orders, tasks, workflows, approvals, and fulfillment held in one queue so the next action is visible.</p>
                        </div>
                        <figure class="bizsoft-surface" data-bizsoft-reveal aria-hidden="true">
                            <p class="bizsoft-kicker">Work queue</p>
                            <ul class="bizsoft-queue">
                                <li class="is-current"><span>ORD-2204</span><span>Approval</span></li>
                                <li><span>ORD-2201</span><span>Fulfillment</span></li>
                                <li><span>TSK-118</span><span>Assigned</span></li>
                            </ul>
                        </figure>
                    </article>

                    <article class="bizsoft-domain bizsoft-domain-inventory" aria-labelledby="bizsoft-inv-heading">
                        <div class="bizsoft-domain-copy">
                            <h3 id="bizsoft-inv-heading" class="text-h3">Inventory &amp; assets</h3>
                            <p class="text-body">Stock, batches, locations, movements, availability, and traceability — so inventory management stays attached to the order that needs it.</p>
                        </div>
                        <figure class="bizsoft-surface bizsoft-surface-split" data-bizsoft-reveal aria-hidden="true">
                            <div>
                                <p class="bizsoft-kicker">Item</p>
                                <p class="bizsoft-surface-title">SKU-441 · Bin C-12</p>
                                <p class="bizsoft-muted">On hand 180 · Available 156</p>
                            </div>
                            <div class="bizsoft-history">
                                <p class="bizsoft-kicker">History</p>
                                <ul>
                                    <li>Reserved 24 for ORD-2204</li>
                                    <li>Received on GRN-220</li>
                                    <li>Moved from quarantine</li>
                                </ul>
                            </div>
                        </figure>
                    </article>

                    <article class="bizsoft-domain" aria-labelledby="bizsoft-fin-heading">
                        <div class="bizsoft-domain-copy">
                            <h3 id="bizsoft-fin-heading" class="text-h3">Commercial &amp; finance</h3>
                            <p class="text-body">Customers, suppliers, quotations, invoices, payments, and account state as connected commercial records — not a chart pretending to be the work.</p>
                        </div>
                        <figure class="bizsoft-surface" data-bizsoft-reveal aria-hidden="true">
                            <p class="bizsoft-kicker">Related commercial records</p>
                            <ul class="bizsoft-links">
                                <li><span>Customer</span><span>City Care Clinic</span></li>
                                <li><span>Quotation</span><span>Q-901 accepted</span></li>
                                <li class="is-current"><span>Invoice</span><span>INV-441 open</span></li>
                                <li><span>Payment</span><span>Partial</span></li>
                            </ul>
                        </figure>
                    </article>

                    <article class="bizsoft-domain bizsoft-domain-control" aria-labelledby="bizsoft-ctl-heading">
                        <div class="bizsoft-domain-copy">
                            <h3 id="bizsoft-ctl-heading" class="text-h3">Management &amp; control</h3>
                            <p class="text-body">Roles, reporting, audit history, exceptions, and operational visibility so ERP-like control stays grounded in the records people already use.</p>
                        </div>
                        <figure class="bizsoft-surface" data-bizsoft-reveal aria-hidden="true">
                            <div class="bizsoft-control-row">
                                <div>
                                    <p class="bizsoft-kicker">Visibility</p>
                                    <p class="bizsoft-surface-title">Exceptions today</p>
                                    <p class="bizsoft-muted">3 hold · 1 overdue approval</p>
                                </div>
                                <div>
                                    <p class="bizsoft-kicker">Access</p>
                                    <ul class="bizsoft-roles">
                                        <li>Counter · limited</li>
                                        <li class="is-current">Ops lead · full</li>
                                        <li>Accounts · finance</li>
                                    </ul>
                                </div>
                            </div>
                        </figure>
                    </article>
                </div>
            </div>
        </section>

        <section class="bizsoft-band bizsoft-band-tight" aria-labelledby="bizsoft-chain-heading">
            <div class="container-sky">
                <div class="bizsoft-measure">
                    <h2 id="bizsoft-chain-heading" class="text-h2">Connected records, not disconnected tools.</h2>
                    <p class="text-body bizsoft-lead">
                        The signature of this path is a related-records surface: each step stays attached to the next, so the action carries its context.
                    </p>
                </div>

                <figure class="bizsoft-chain" data-bizsoft-reveal data-bizsoft-chain aria-label="Related records from customer through activity">
                    <p class="bizsoft-kicker">Related records</p>
                    <ol class="bizsoft-chain-list">
                        @foreach ($chain as $step)
                            <li data-bizsoft-chain-step>
                                <span class="bizsoft-chain-label">{{ $step }}</span>
                                <span class="bizsoft-chain-meta">Open in system</span>
                            </li>
                        @endforeach
                    </ol>
                </figure>
            </div>
        </section>

        <section class="bizsoft-band" aria-labelledby="bizsoft-rules-heading">
            <div class="container-sky">
                <h2 id="bizsoft-rules-heading" class="text-h2 bizsoft-measure">
                    The software follows the rules of the business.
                </h2>
                <ul class="bizsoft-rules">
                    @foreach ($rules as $item)
                        <li>
                            <h3 class="bizsoft-rule-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="bizsoft-band bizsoft-band-tight" aria-labelledby="bizsoft-proof-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative system</p>
                <div class="bizsoft-proof-grid">
                    <div class="bizsoft-proof-copy">
                        <h2 id="bizsoft-proof-heading" class="text-h2">See one workflow in practice.</h2>
                        <p class="text-body">
                            A pharmacy operations platform connecting orders, inventory, batch selection, reservations, and operational records in one workflow.
                        </p>
                        <a class="solutions-cta" href="{{ $proof }}">
                            Explore the system
                            <span class="solutions-arrow" aria-hidden="true">→</span>
                        </a>
                    </div>
                    <figure class="bizsoft-proof-crop" data-bizsoft-reveal aria-hidden="true">
                        <p class="bizsoft-kicker">Business Operations Platform</p>
                        <p class="bizsoft-surface-title">Orders · Batch · Reservation</p>
                        <ul class="bizsoft-proof-states">
                            <li>Payment confirmed</li>
                            <li class="is-current">B-441 reserved · FEFO</li>
                            <li>Dispatch waiting</li>
                        </ul>
                    </figure>
                </div>
            </div>
        </section>

        <section class="bizsoft-band" aria-labelledby="bizsoft-engage-heading">
            <div class="container-sky bizsoft-measure">
                <h2 id="bizsoft-engage-heading" class="text-h2">We start with the workflow, not the software.</h2>
                <p class="text-body">
                    We first understand the people, records, decisions, constraints, and handoffs inside the operation. From there, we shape the product and engineering approach around what the system actually needs to do.
                </p>
                <ol class="bizsoft-stages" aria-label="Engagement stages">
                    @foreach ($stages as $stage)
                        <li>{{ $stage }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="bizsoft-band bizsoft-band-tight" aria-labelledby="bizsoft-honest-heading">
            <div class="container-sky bizsoft-measure">
                <h2 id="bizsoft-honest-heading" class="text-h2">Sometimes the answer isn't custom software.</h2>
                <p class="text-body">
                    If an existing product already fits the workflow, custom development may not be the right investment. We would rather identify that early than build complexity for its own sake.
                </p>
            </div>
        </section>

        <section class="bizsoft-close" aria-labelledby="bizsoft-cta-heading">
            <div class="container-sky bizsoft-close-band">
                <div>
                    <h2 id="bizsoft-cta-heading" class="text-h2">Have a business workflow worth improving?</h2>
                    <p class="text-body bizsoft-close-copy">
                        Tell us how the work happens today. We'll help you understand what software could change.
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
