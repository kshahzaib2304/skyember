{{--
    Chunk 2 - Capabilities: systems we build.
    Static mock content. Editorial on the light page, not a second hero.
    Each layout is intentional: ledger (wide record), product (compact surface),
    pipeline (full-bleed sequence), stack (layered foundation).
--}}
@php
    $capabilities = [
        [
            'index' => '01',
            'id' => 'capability-business-software',
            'title' => 'Business software',
            'layout' => 'ledger',
            'summary' => 'Operational systems for inventory, purchasing, finance, and the workflows between them. Business software is a record with explicit states - received, counted, posted - that a company can trust.',
            'terms' => ['Inventory', 'Purchasing', 'Finance', 'Workflows'],
            'caption' => 'An operations ledger. Each line has a state, and finance sits in the same record as stock.',
            'rows' => [
                ['ref' => 'NX-1042', 'location' => 'Cold store A', 'qty' => '1,240', 'state' => 'Posted', 'active' => true],
                ['ref' => 'BX-220', 'location' => 'Dispatch', 'qty' => '860', 'state' => 'Counting', 'active' => false],
                ['ref' => 'CL-018', 'location' => 'Quarantine', 'qty' => '420', 'state' => 'Hold', 'active' => false],
                ['ref' => 'FN-773', 'location' => 'Accounts', 'qty' => '-', 'state' => 'Matched', 'active' => false],
            ],
            'steps' => ['Received', 'Counted', 'Posted'],
        ],
        [
            'index' => '02',
            'id' => 'capability-digital-products',
            'title' => 'Digital products',
            'layout' => 'product',
            'summary' => 'Web application development and SaaS development for the products people open every day. The interface has one job: let someone start the work, see where it stands, and finish it.',
            'terms' => ['Web applications', 'SaaS', 'Customer workflows'],
            'caption' => 'A customer-facing product. The request moves from draft to accepted inside the same workspace.',
            'nav' => [
                ['label' => 'Home', 'active' => false],
                ['label' => 'Requests', 'active' => true],
                ['label' => 'Billing', 'active' => false],
            ],
            'states' => ['Draft', 'Sent', 'Accepted'],
        ],
        [
            'index' => '03',
            'id' => 'capability-ai-automation',
            'title' => 'AI + automation',
            'layout' => 'pipeline',
            'summary' => 'AI automation placed inside the workflow, not beside it. An agent can classify and draft the next step, a person can still review it, and the outcome is written back to the system of record.',
            'terms' => ['Agents', 'Internal workflows', 'Decision support'],
            'caption' => 'The agent drafts a match. A person approves it before the ledger changes.',
            'stages' => [
                ['title' => 'Intake', 'detail' => 'Invoice 4418 arrives from the inbox.'],
                ['title' => 'Classify', 'detail' => 'Marked as accounts payable.'],
                ['title' => 'Agent', 'detail' => 'Drafts a match to purchase order 2291.'],
                ['title' => 'Review', 'detail' => 'A person approves before anything posts.'],
                ['title' => 'Recorded', 'detail' => 'The result is written back to the ledger.'],
            ],
        ],
        [
            'index' => '04',
            'id' => 'capability-cloud-engineering',
            'title' => 'Cloud + engineering',
            'layout' => 'stack',
            'summary' => 'Cloud and infrastructure treated as software engineering, not a handover at the end. Deployment, scaling, and reliability belong to the same system as the product.',
            'terms' => ['Deployment', 'Scaling', 'Reliability'],
            'caption' => 'Release sits on runtime. Runtime sits on the foundation.',
            'layers' => [
                ['title' => 'Release', 'detail' => 'main → staging → production', 'width' => 'w-[86%] sm:w-[78%]', 'foundation' => false, 'note' => null],
                ['title' => 'Runtime', 'detail' => 'api · worker · scheduler', 'width' => 'w-[94%] sm:w-[90%]', 'foundation' => false, 'note' => 'Healthy'],
                ['title' => 'Foundation', 'detail' => 'region · backups · observability', 'width' => 'w-full', 'foundation' => true, 'note' => null],
            ],
        ],
    ];
@endphp

<section
    id="capabilities"
    class="scroll-mt-24 bg-background pb-16 md:pb-24"
    aria-labelledby="capabilities-heading"
    data-capabilities
>
    <div class="container-sky pt-20 md:pt-28 lg:pt-32">
        <div class="grid items-start gap-8 lg:grid-cols-12 lg:gap-12">
            <div class="lg:col-span-7">
                <p class="text-eyebrow">What we build</p>
                <h2 id="capabilities-heading" class="text-h2 mt-4 max-w-xl text-pretty text-foreground">
                    Software shaped around how your business actually works.
                </h2>
            </div>
            <p class="text-body max-w-xl text-pretty lg:col-span-5 lg:pt-8">
                Custom software development, practiced as systems work. The record of the operation,
                the product people use, the automation inside it, and the infrastructure underneath
                are shaped around one business - so the pieces agree.
            </p>
        </div>
    </div>

    <div class="mt-16 flex flex-col gap-20 md:mt-24 md:gap-28 lg:mt-28 lg:gap-32">
        @foreach ($capabilities as $capability)
            @if ($capability['layout'] === 'ledger')
                <article class="container-sky" aria-labelledby="{{ $capability['id'] }}">
                    <div class="grid items-start gap-10 lg:grid-cols-12 lg:gap-x-16 lg:gap-y-10">
                        <div class="lg:col-span-5">
                            <x-home.capability-copy :capability="$capability" />
                        </div>
                        <figure class="min-w-0 lg:col-span-7">
                            <div
                                class="border border-border bg-surface"
                                style="border-radius: var(--radius-lg);"
                                data-cap-visual="ledger"
                                aria-hidden="true"
                            >
                                <div class="flex items-start justify-between gap-4 border-b border-border px-4 py-3.5 sm:px-5">
                                    <div>
                                        <p class="text-sm font-semibold text-foreground">Operations</p>
                                        <p class="mt-0.5 text-xs text-muted">Distribution · current period</p>
                                    </div>
                                    <p class="pt-0.5 text-[11px] font-semibold tracking-[0.14em] text-primary-deep uppercase">Live record</p>
                                </div>

                                <div class="sm:hidden">
                                    @foreach ($capability['rows'] as $row)
                                        <div class="border-b border-border px-4 py-3 last:border-b-0 {{ $row['active'] ? 'cap-row-active' : '' }}">
                                            <div class="flex items-baseline justify-between gap-3">
                                                <p class="text-sm font-semibold text-foreground">{{ $row['ref'] }}</p>
                                                <p @class([
                                                    'text-xs font-semibold tracking-wide',
                                                    'text-primary-deep' => $row['active'],
                                                    'text-foreground' => ! $row['active'],
                                                ])>{{ $row['state'] }}</p>
                                            </div>
                                            <p class="mt-1 text-sm text-muted">{{ $row['location'] }} · {{ $row['qty'] }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <table class="hidden w-full border-collapse text-left sm:table">
                                    <thead>
                                        <tr class="text-[11px] font-semibold tracking-[0.14em] text-muted uppercase">
                                            <th scope="col" class="px-5 py-2.5 font-semibold">Reference</th>
                                            <th scope="col" class="px-5 py-2.5 font-semibold">Location</th>
                                            <th scope="col" class="px-5 py-2.5 font-semibold">On hand</th>
                                            <th scope="col" class="px-5 py-2.5 text-right font-semibold">State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($capability['rows'] as $row)
                                            <tr class="border-t border-border first:border-t-0 {{ $row['active'] ? 'cap-row-active' : '' }}">
                                                <td class="px-5 py-3 text-sm font-semibold text-foreground">{{ $row['ref'] }}</td>
                                                <td class="px-5 py-3 text-sm text-foreground">{{ $row['location'] }}</td>
                                                <td class="px-5 py-3 text-sm text-foreground tabular-nums">{{ $row['qty'] }}</td>
                                                <td @class([
                                                    'px-5 py-3 text-right text-sm font-semibold',
                                                    'text-primary-deep' => $row['active'],
                                                    'text-foreground' => ! $row['active'],
                                                ])>{{ $row['state'] }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="flex flex-wrap gap-x-5 gap-y-2 border-t border-border px-4 py-3 sm:px-5" data-cap-steps>
                                    @foreach ($capability['steps'] as $step)
                                        <span @class(['cap-step text-xs font-semibold tracking-wide', 'is-active' => $loop->last])>
                                            {{ $step }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            <figcaption class="text-small mt-3 max-w-lg">{{ $capability['caption'] }}</figcaption>
                        </figure>
                    </div>
                </article>
            @elseif ($capability['layout'] === 'product')
                <article class="container-sky" aria-labelledby="{{ $capability['id'] }}">
                    <div class="grid items-start gap-10 lg:grid-cols-12 lg:gap-x-8">
                        <div class="max-w-xl lg:col-span-6 lg:col-start-7">
                            <x-home.capability-copy :capability="$capability" />
                        </div>
                        <figure class="min-w-0 w-full lg:col-span-5 lg:col-start-1 lg:row-start-1 lg:mt-16">
                            <div
                                class="border border-border bg-surface"
                                style="border-radius: var(--radius-lg);"
                                data-cap-visual="product"
                                aria-hidden="true"
                            >
                                <div class="flex items-center justify-between border-b border-border px-4 py-3">
                                    <p class="text-sm font-semibold text-foreground">Workspace</p>
                                    <p class="text-[11px] font-semibold tracking-[0.14em] text-muted uppercase">Product</p>
                                </div>
                                <div class="grid grid-cols-[5.25rem_minmax(0,1fr)]">
                                    <div class="flex flex-col gap-0.5 border-r border-border py-3">
                                        @foreach ($capability['nav'] as $item)
                                            <span @class([
                                                'px-3 py-2 text-xs',
                                                'border-l-2 border-primary font-semibold text-foreground' => $item['active'],
                                                'border-l-2 border-transparent text-muted' => ! $item['active'],
                                            ])>{{ $item['label'] }}</span>
                                        @endforeach
                                    </div>
                                    <div class="px-4 py-4 sm:px-5">
                                        <p class="text-[11px] font-semibold tracking-[0.14em] text-muted uppercase">Open request</p>
                                        <p class="mt-2 font-display text-lg font-semibold tracking-tight text-foreground">Quote 1842</p>
                                        <p class="mt-3 text-sm font-semibold text-primary-deep" data-cap-status data-states="{{ implode(',', $capability['states']) }}">
                                            {{ $capability['states'][count($capability['states']) - 1] }}
                                        </p>
                                        <div class="mt-2 h-1 w-full bg-border">
                                            <div class="h-full w-full origin-left bg-primary" data-cap-progress></div>
                                        </div>
                                        <dl class="mt-5 space-y-2 border-t border-border pt-4">
                                            <div class="flex items-baseline justify-between gap-3 text-sm">
                                                <dt class="text-muted">Line items</dt>
                                                <dd class="font-medium text-foreground tabular-nums">12</dd>
                                            </div>
                                            <div class="flex items-baseline justify-between gap-3 text-sm">
                                                <dt class="text-muted">Customer</dt>
                                                <dd class="font-medium text-foreground">Northline Trading</dd>
                                            </div>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="text-small mt-3">{{ $capability['caption'] }}</figcaption>
                        </figure>
                    </div>
                </article>
            @elseif ($capability['layout'] === 'pipeline')
                <article class="border-y border-border bg-surface" aria-labelledby="{{ $capability['id'] }}">
                    <div class="container-sky py-14 md:py-16 lg:py-20">
                        <div class="max-w-xl">
                            <x-home.capability-copy :capability="$capability" />
                        </div>
                        <figure class="mt-10 lg:mt-14">
                            <div class="relative" data-cap-visual="pipeline">
                                <div class="cap-track absolute top-2 bottom-2 left-1 w-px lg:hidden" aria-hidden="true"></div>
                                <div class="cap-draw-y absolute top-2 bottom-2 left-1 w-px bg-primary lg:hidden" data-cap-line-y aria-hidden="true"></div>
                                <div class="cap-track absolute top-1 right-0 left-0 hidden h-px lg:block" aria-hidden="true"></div>
                                <div class="cap-draw-x absolute top-1 right-0 left-0 hidden h-px bg-primary lg:block" data-cap-line-x aria-hidden="true"></div>

                                <ol class="relative grid gap-6 lg:grid-cols-5 lg:gap-8">
                                    @foreach ($capability['stages'] as $stage)
                                        <li class="relative pl-7 lg:pt-7 lg:pl-0">
                                            <span class="absolute top-1 left-0 z-[1] h-2 w-2 bg-primary ring-2 ring-surface lg:top-0" aria-hidden="true"></span>
                                            <p class="text-sm font-semibold text-foreground">{{ $stage['title'] }}</p>
                                            <p class="mt-1 text-sm leading-snug text-muted">{{ $stage['detail'] }}</p>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                            <figcaption class="text-small mt-6 max-w-lg">{{ $capability['caption'] }}</figcaption>
                        </figure>
                    </div>
                </article>
            @else
                <article class="container-sky" aria-labelledby="{{ $capability['id'] }}">
                    <div class="grid items-end gap-10 lg:grid-cols-12 lg:gap-x-14">
                        <div class="lg:col-span-5">
                            <x-home.capability-copy :capability="$capability" />
                        </div>
                        <figure class="min-w-0 lg:col-span-7">
                            <ol class="flex flex-col items-end gap-3" data-cap-visual="stack">
                                @foreach ($capability['layers'] as $layer)
                                    <li
                                        data-cap-layer
                                        @class([
                                            'min-w-0 border bg-surface px-4 py-3.5 sm:px-5 sm:py-4',
                                            $layer['width'],
                                            'border-y border-r border-border border-l-2 border-l-primary' => $layer['foundation'],
                                            'border-border' => ! $layer['foundation'],
                                        ])
                                        style="border-radius: var(--radius-lg);"
                                    >
                                        <div class="flex items-baseline justify-between gap-4">
                                            <h4 class="font-sans text-sm font-semibold text-foreground">{{ $layer['title'] }}</h4>
                                            @if ($layer['note'])
                                                <p class="text-xs font-semibold tracking-wide text-primary-deep">{{ $layer['note'] }}</p>
                                            @endif
                                        </div>
                                        <p class="mt-1 font-mono text-[13px] text-muted">{{ $layer['detail'] }}</p>
                                    </li>
                                @endforeach
                            </ol>
                            <figcaption class="text-small mt-3">{{ $capability['caption'] }}</figcaption>
                        </figure>
                    </div>
                </article>
            @endif
        @endforeach
    </div>
</section>
