{{--
    Chunk 9 - Case study: Business Operations Platform.
    Representative system. Demonstrates how SKYEMBER thinks — not a results brochure.
--}}
@extends('layouts.app')

@php
    $title = 'Business Operations Platform — SKYEMBER';
    $description = 'A representative business software system connecting pharmacy orders, inventory, batch workflows, reservations, and operational records.';
    $canonical = route('work.business-operations-platform');

    $constraints = [
        [
            'index' => '01',
            'id' => 'study-batch',
            'title' => 'Batch selection',
            'body' => 'The system needs to know which inventory should move, not simply whether inventory exists. FEFO selects the earliest eligible batch that can fulfill the line.',
            'crop' => 'batch',
        ],
        [
            'index' => '02',
            'id' => 'study-reservation',
            'title' => 'Reservation',
            'body' => 'Reserved and available are different states. A confirmed order holds stock without pretending it has already left the bin.',
            'crop' => 'reservation',
        ],
        [
            'index' => '03',
            'id' => 'study-trace',
            'title' => 'Traceability',
            'body' => 'The order stays connected to its batch and activity history, so a later question about the line can be answered from the same record.',
            'crop' => 'trace',
        ],
        [
            'index' => '04',
            'id' => 'study-workflow',
            'title' => 'Workflow',
            'body' => 'Payment, checking, reservation, posting, and dispatch are different states. Software engineering here means making those stages explicit and visible.',
            'crop' => 'workflow',
        ],
    ];

    $design = [
        ['title' => 'Clarity', 'body' => 'Complex operational state should be understandable at a glance.'],
        ['title' => 'Context', 'body' => 'A decision should carry the information needed to make it.'],
        ['title' => 'Continuity', 'body' => 'An action should remain traceable through the rest of the workflow.'],
    ];

    $engineering = [
        ['title' => 'State', 'body' => 'What stage is this work in?'],
        ['title' => 'Data', 'body' => 'What records does this action depend on?'],
        ['title' => 'Rules', 'body' => 'What constraints must hold?'],
        ['title' => 'Trace', 'body' => 'What happened, when, and by whom?'],
    ];

    $intentions = [
        'Clearer workflow state across the counter and the back office',
        'Traceable stock decisions tied to batch and expiry',
        'Connected operational records instead of disconnected screens',
        'Fewer handoffs that depend on memory alone',
    ];

    $trail = ['Order', 'Payment', 'Batch', 'Reservation', 'Fulfillment'];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
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
                        'name' => 'Work',
                        'item' => route('work'),
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 3,
                        'name' => 'Business Operations Platform',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="study-page" data-study aria-labelledby="study-heading">
        <header class="study-hero">
            <div class="container-sky">
                <nav class="study-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('work') }}">Work</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Business Operations Platform</li>
                    </ol>
                </nav>

                <div class="study-hero-lead">
                    <div class="study-hero-main">
                        <p class="text-eyebrow">Work / Representative system</p>
                        <h1 id="study-heading" class="study-title">Business Operations Platform</h1>
                        <p class="text-body study-support">
                            Turning pharmacy operations into one connected workflow.
                        </p>
                    </div>

                    <dl class="study-meta">
                        <div>
                            <dt>Industry</dt>
                            <dd>Pharmacy / Operations</dd>
                        </div>
                        <div>
                            <dt>Scope</dt>
                            <dd>Product · UX · Engineering</dd>
                        </div>
                        <div>
                            <dt>Platform</dt>
                            <dd>Web application</dd>
                        </div>
                        <div>
                            <dt>Status</dt>
                            <dd>Representative project</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="study-hero-plane" data-study-reveal>
                <div class="container-sky">
                    <figure class="study-app" aria-label="Business Operations Platform workspace focusing on sales order SO-10482">
                        <div class="study-app-chrome">
                            <div class="study-app-bar">
                                <p class="study-app-name">Business Operations Platform</p>
                                <p class="study-app-place">Al-Noor · Gulshan counter</p>
                                <p class="study-app-live">Live</p>
                            </div>

                            <div class="study-app-body">
                                <nav class="study-rail" aria-hidden="true">
                                    <p class="study-kicker">Workspace</p>
                                    <ul>
                                        <li class="is-current">Orders</li>
                                        <li>Inventory</li>
                                        <li>Accounts</li>
                                        <li>Activity</li>
                                    </ul>
                                </nav>

                                <div class="study-app-main">
                                    <div class="study-order-head">
                                        <div>
                                            <p class="study-kicker">Sales order</p>
                                            <p class="study-order-id">SO-10482</p>
                                            <p class="study-order-party">City Care Clinic · 4 Oct 2026</p>
                                            <p class="study-order-actor">A. Rahman · counter</p>
                                        </div>
                                        <div class="study-order-status">
                                            <p>Processing</p>
                                            <p class="tabular-nums">Rs 12,480</p>
                                            <p class="study-muted">Payment confirmed</p>
                                        </div>
                                    </div>

                                    <div class="study-line">
                                        <p class="study-line-name">Panadol 500mg tablets</p>
                                        <p class="study-muted">Qty 24 · Batch B-441 · Exp 08/2027 · Bin C-12</p>
                                        <p class="study-accent">FEFO · earliest eligible batch</p>
                                    </div>

                                    <div class="study-batch-slip" aria-hidden="true">
                                        <p class="study-kicker">Inventory · related batch</p>
                                        <p class="study-batch-title">B-441</p>
                                        <dl class="study-batch-facts">
                                            <div>
                                                <dt>On hand</dt>
                                                <dd class="tabular-nums">180</dd>
                                            </div>
                                            <div>
                                                <dt>Reserved</dt>
                                                <dd class="tabular-nums">24</dd>
                                            </div>
                                            <div>
                                                <dt>Available</dt>
                                                <dd class="tabular-nums">156</dd>
                                            </div>
                                            <div>
                                                <dt>Rule</dt>
                                                <dd>FEFO</dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <p class="study-caption">
                        One web application for pharmacy operations: the order, the batch it may take, and the stock it holds.
                    </p>
                </div>
            </div>
        </header>

        <section class="study-band" aria-labelledby="study-problem-heading">
            <div class="container-sky study-prose">
                <h2 id="study-problem-heading" class="text-h2">The work is more complicated than the transaction.</h2>
                <p class="text-body">
                    A pharmacy order is not simply an item and a quantity. Custom software development for this kind of business software has to hold payment state, batch eligibility, stock reservation, fulfillment, and the people acting on the record — in one place, while the counter is still moving.
                </p>
                <p class="text-body">
                    That is why the surface looks dense. The density is the work. Inventory workflows and FEFO rules are not decoration around a checkout form; they are the reason the record exists.
                </p>
            </div>
        </section>

        <section class="study-band study-band-tight" aria-labelledby="study-order-heading">
            <div class="container-sky">
                <div class="study-prose">
                    <h2 id="study-order-heading" class="text-h2">One order. Everything it depends on.</h2>
                    <p class="text-body">
                        SO-10482 is the same sales order shown on the homepage proof — opened here so the dependencies stay attached to the document. Payment, stock, batch, and dispatch are not a separate architecture chart. They are why this line can move.
                    </p>
                </div>

                <div class="study-doc-plane" data-study-reveal>
                    <figure class="study-doc" aria-label="Dependencies on sales order SO-10482">
                        <div class="study-doc-head">
                            <p class="study-kicker">Document context</p>
                            <p class="study-doc-title">SO-10482</p>
                            <p class="study-muted">City Care Clinic · Panadol 500mg · Qty 24</p>
                        </div>

                        <ul class="study-deps">
                            <li data-study-dep="payment">
                                <span class="study-dep-label">Payment</span>
                                <span class="study-dep-value">Confirmed</span>
                            </li>
                            <li data-study-dep="stock">
                                <span class="study-dep-label">Stock</span>
                                <span class="study-dep-value">24 reserved</span>
                            </li>
                            <li data-study-dep="batch">
                                <span class="study-dep-label">Batch</span>
                                <span class="study-dep-value">B-441 · FEFO</span>
                            </li>
                            <li data-study-dep="dispatch">
                                <span class="study-dep-label">Dispatch</span>
                                <span class="study-dep-value">Waiting</span>
                            </li>
                        </ul>

                        <ol class="study-trail" data-study-trail aria-label="Logic trail from order to fulfillment">
                            @foreach ($trail as $step)
                                <li data-study-trail-step>{{ $step }}</li>
                            @endforeach
                        </ol>
                    </figure>
                </div>

                <p class="study-caption study-caption-light">
                    Software engineering for a business workflow means keeping these links on the order, not scattering them across tools the counter cannot see together.
                </p>
            </div>
        </section>

        <section class="study-band" aria-labelledby="study-constraints-heading">
            <div class="container-sky">
                <div class="study-prose">
                    <h2 id="study-constraints-heading" class="text-h2">Designing around constraints.</h2>
                    <p class="text-body">
                        The platform is shaped by rules the operation already has. The interface does not invent the physics of the pharmacy; it makes those rules legible while work is happening.
                    </p>
                </div>

                <div class="study-constraints">
                    @foreach ($constraints as $item)
                        <article class="study-constraint" aria-labelledby="{{ $item['id'] }}">
                            <div class="study-constraint-copy">
                                <p class="study-indexline">
                                    <span class="study-index">{{ $item['index'] }}</span>
                                </p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>

                            <figure class="study-crop" data-study-reveal data-crop="{{ $item['crop'] }}" aria-hidden="true">
                                @if ($item['crop'] === 'batch')
                                    <p class="study-kicker">Eligible batches</p>
                                    <ul class="study-crop-list">
                                        <li class="is-current">
                                            <span>B-441</span>
                                            <span>Exp 08/2027</span>
                                            <span>FEFO</span>
                                        </li>
                                        <li>
                                            <span>B-518</span>
                                            <span>Exp 01/2028</span>
                                            <span>Later</span>
                                        </li>
                                        <li>
                                            <span>B-302</span>
                                            <span>Exp 03/2027</span>
                                            <span>Hold</span>
                                        </li>
                                    </ul>
                                @elseif ($item['crop'] === 'reservation')
                                    <p class="study-kicker">Stock position</p>
                                    <dl class="study-crop-stats">
                                        <div>
                                            <dt>On hand</dt>
                                            <dd class="tabular-nums">180</dd>
                                        </div>
                                        <div class="is-current">
                                            <dt>Reserved</dt>
                                            <dd class="tabular-nums">24</dd>
                                        </div>
                                        <div>
                                            <dt>Available</dt>
                                            <dd class="tabular-nums">156</dd>
                                        </div>
                                    </dl>
                                @elseif ($item['crop'] === 'trace')
                                    <p class="study-kicker">Activity</p>
                                    <ul class="study-crop-activity">
                                        <li><span>14:22</span><span>Reserved 24 from B-441</span></li>
                                        <li><span>14:18</span><span>Payment confirmed</span></li>
                                        <li><span>Yesterday</span><span>GRN-220 posted</span></li>
                                    </ul>
                                @else
                                    <p class="study-kicker">Workflow</p>
                                    <ol class="study-crop-steps">
                                        <li class="is-done">Payment</li>
                                        <li class="is-done">Checked</li>
                                        <li class="is-current">Reserved</li>
                                        <li>Posted</li>
                                        <li>Dispatch</li>
                                    </ol>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="study-band study-band-flush" aria-labelledby="study-platform-heading">
            <div class="container-sky">
                <div class="study-prose">
                    <h2 id="study-platform-heading" class="text-h2">The order is only one part of the system.</h2>
                    <p class="text-body">
                        The homepage showed one operational record. Here the same record sits inside the wider platform — orders, inventory, purchasing, accounts, and activity sharing one product language.
                    </p>
                </div>
            </div>

            <div class="study-platform-plane" data-study-reveal>
                <div class="container-sky">
                    <figure class="study-platform" aria-label="Broader Business Operations Platform areas">
                        <div class="study-platform-bar">
                            <p class="study-app-name">Business Operations Platform</p>
                            <p class="study-muted">Operational system</p>
                        </div>
                        <ul class="study-platform-areas">
                            <li class="is-current">
                                <p class="study-platform-label">Orders</p>
                                <p class="study-platform-detail">SO-10482 in progress at the counter</p>
                            </li>
                            <li>
                                <p class="study-platform-label">Inventory</p>
                                <p class="study-platform-detail">Batches, bins, and eligibility</p>
                            </li>
                            <li>
                                <p class="study-platform-label">Purchasing</p>
                                <p class="study-platform-detail">Receipts that replenish the same stock</p>
                            </li>
                            <li>
                                <p class="study-platform-label">Accounts</p>
                                <p class="study-platform-detail">Payment and posting to the ledger</p>
                            </li>
                            <li>
                                <p class="study-platform-label">Activity</p>
                                <p class="study-platform-detail">A history the next person can trust</p>
                            </li>
                        </ul>
                    </figure>
                    <p class="study-caption">
                        Breadth without five separate products. The areas agree because they share the same operational record.
                    </p>
                </div>
            </div>
        </section>

        <section class="study-band" aria-labelledby="study-design-heading">
            <div class="container-sky">
                <div class="study-prose">
                    <h2 id="study-design-heading" class="text-h2">Designed around the work, not the software.</h2>
                    <p class="text-body">
                        The interface is judged by whether a person at the counter can see the state of the work. Labels and layout follow the operation, not a generic admin template.
                    </p>
                </div>

                <ul class="study-principles">
                    @foreach ($design as $item)
                        <li>
                            <p class="study-principle-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="study-band study-band-tight" aria-labelledby="study-eng-heading">
            <div class="container-sky">
                <div class="study-prose">
                    <h2 id="study-eng-heading" class="text-h2">Software that respects the workflow.</h2>
                    <p class="text-body">
                        Before choosing screens, the model asks four questions. They keep custom software development honest when pharmacy operations refuse to fit a simple form.
                    </p>
                </div>

                <ul class="study-model">
                    @foreach ($engineering as $item)
                        <li>
                            <p class="study-model-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="study-band" aria-labelledby="study-intent-heading">
            <div class="container-sky study-prose">
                <h2 id="study-intent-heading" class="text-h2">What the system is designed to make possible.</h2>
                <p class="text-body">
                    These are design intentions for the representative system — not measured outcomes from a published engagement.
                </p>
                <ul class="study-intentions">
                    @foreach ($intentions as $line)
                        <li>{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="study-band study-band-tight" aria-labelledby="study-record-heading">
            <div class="container-sky">
                <p class="text-eyebrow" id="study-record-heading">Project</p>
                <dl class="study-record">
                    <div>
                        <dt>Name</dt>
                        <dd>Business Operations Platform</dd>
                    </div>
                    <div>
                        <dt>Industry</dt>
                        <dd>Pharmacy / Operations</dd>
                    </div>
                    <div>
                        <dt>Scope</dt>
                        <dd>Product · UX · Engineering</dd>
                    </div>
                    <div>
                        <dt>Platform</dt>
                        <dd>Web application</dd>
                    </div>
                    <div>
                        <dt>Status</dt>
                        <dd>Representative system</dd>
                    </div>
                </dl>
            </div>
        </section>

        <section class="study-close" aria-labelledby="study-cta-heading">
            <div class="container-sky study-close-band">
                <h2 id="study-cta-heading" class="text-h2">Have a workflow this complicated?</h2>
                <a class="study-cta" href="{{ route('contact') }}">
                    Start a conversation
                    <span class="study-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>
    </article>
@endsection
