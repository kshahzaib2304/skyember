{{--
    Chunk 3 — one document workspace. Static mock.
    Desktop is the application frame. Small screens are a rebuilt record, not a scaled shell.
--}}
@php
    $steps = [
        ['key' => 'received', 'label' => 'Received', 'state' => 'done'],
        ['key' => 'checked', 'label' => 'Checked', 'state' => 'done'],
        ['key' => 'reserved', 'label' => 'Reserved', 'state' => 'current'],
        ['key' => 'posted', 'label' => 'Posted', 'state' => 'waiting'],
        ['key' => 'dispatch', 'label' => 'Dispatch', 'state' => 'waiting'],
    ];

    $links = [
        ['label' => 'Workflow', 'value' => 'Fulfill SO-10482'],
        ['label' => 'Data', 'value' => 'Batch B-441'],
        ['label' => 'People', 'value' => 'A. Rahman, counter'],
    ];
@endphp

<section
    id="product-proof"
    class="proof-plane scroll-mt-24"
    aria-labelledby="product-proof-heading"
    data-product-proof
>
    <div class="container-sky py-16 md:py-24 lg:py-28">
        <p class="text-eyebrow text-dark-muted">Proof, not promises</p>
        <h2 id="product-proof-heading" class="text-h2 mt-4 max-w-xl text-pretty text-dark-foreground">
            Software should be experienced, not described.
        </h2>
        <p class="mt-5 max-w-3xl text-pretty text-base leading-relaxed text-dark-muted md:text-[1.0625rem]">
            A custom software platform holds the work in one record: the order, the batch it may take,
            the stock it reserves, and the ledger it posts to. That is software engineering for a
            business workflow — not a picture of a dashboard.
        </p>

        <div class="proof-stage relative mt-10 lg:mt-12" data-proof-stage>
            <article
                class="proof-frame relative z-[1] font-sans"
                data-proof-frame
                aria-labelledby="proof-order-heading"
            >
                {{-- Desktop chrome. Hidden below lg so the phone view is not a squeezed shell. --}}
                <div class="hidden items-center justify-between gap-4 border-b border-dark-border px-4 py-3 lg:flex lg:px-5">
                    <p class="text-sm font-semibold text-dark-foreground">Al-Noor Pharmacy</p>
                    <p class="text-xs text-dark-muted">Gulshan counter</p>
                    <p class="text-[11px] font-semibold tracking-[0.14em] text-dark-muted uppercase">Live</p>
                </div>

                <div class="proof-links-wrap hidden lg:block" data-proof-links aria-hidden="true">
                    <ul class="grid grid-cols-3 gap-px border-b border-dark-border bg-dark-border">
                        @foreach ($links as $link)
                            <li class="bg-dark px-4 py-3">
                                <p class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">{{ $link['label'] }}</p>
                                <p class="mt-1 text-sm text-dark-foreground">{{ $link['value'] }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="lg:grid lg:grid-cols-[10.5rem_minmax(0,1fr)]">
                    <div class="hidden border-r border-dark-border py-3 lg:block" aria-hidden="true">
                        <p class="px-4 pb-2 text-[10px] font-semibold tracking-[0.16em] text-dark-muted uppercase">Workspace</p>
                        <ul>
                            @foreach (['Orders' => true, 'Inventory' => false, 'Accounts' => false, 'Activity' => false] as $item => $current)
                                <li @class([
                                    'border-l-2 px-4 py-2 text-sm',
                                    'border-dark-foreground font-semibold text-dark-foreground' => $current,
                                    'border-transparent text-dark-muted' => ! $current,
                                ])>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="min-w-0 px-4 py-4 sm:px-5 sm:py-5 lg:px-6 lg:py-6">
                        <p class="text-xs text-dark-muted lg:hidden">Al-Noor · Gulshan · Live</p>

                        <div class="mt-3 flex items-start justify-between gap-4 lg:mt-0">
                            <div class="min-w-0">
                                <h3 id="proof-order-heading" class="font-sans text-lg font-semibold tracking-tight text-dark-foreground">
                                    Sales order SO-10482
                                </h3>
                                <p class="mt-1 text-sm text-dark-muted">
                                    City Care Clinic · 4 Oct 2026
                                </p>
                                <p class="mt-1 text-sm text-dark-foreground">A. Rahman · counter</p>
                            </div>
                            <div class="shrink-0 text-right">
                                <p class="text-sm font-semibold text-dark-foreground">Processing</p>
                                <p class="mt-1 text-sm font-semibold text-dark-foreground tabular-nums">Rs 12,480</p>
                                <p class="mt-1 text-xs text-dark-muted">Payment confirmed</p>
                            </div>
                        </div>

                        <div class="mt-5 border-t border-dark-border">
                            <div class="flex items-baseline justify-between gap-3 py-3 lg:hidden">
                                <div class="min-w-0">
                                    <p class="text-sm font-semibold text-dark-foreground">Panadol 500mg tablets</p>
                                    <p class="mt-1 text-sm text-dark-muted">Qty 24 · Batch B-441 · Exp 08/2027 · Bin C-12</p>
                                    <p class="mt-1 text-xs text-dark-muted">FEFO · earliest eligible batch</p>
                                </div>
                            </div>

                            <table class="mt-1 hidden w-full border-collapse text-left lg:table">
                                <thead>
                                    <tr class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">
                                        <th scope="col" class="py-2 pr-3 font-semibold">Item</th>
                                        <th scope="col" class="py-2 pr-3 font-semibold">Qty</th>
                                        <th scope="col" class="py-2 pr-3 font-semibold">Batch</th>
                                        <th scope="col" class="py-2 pr-3 font-semibold">Expiry</th>
                                        <th scope="col" class="py-2 font-semibold">Bin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-t border-dark-border">
                                        <td class="py-3 pr-3">
                                            <p class="text-sm font-semibold text-dark-foreground">Panadol 500mg tablets</p>
                                            <p class="mt-1 text-xs text-dark-muted">FEFO · earliest eligible batch</p>
                                        </td>
                                        <td class="py-3 pr-3 text-sm text-dark-foreground tabular-nums">24</td>
                                        <td class="py-3 pr-3 text-sm text-dark-foreground">B-441</td>
                                        <td class="py-3 pr-3 text-sm text-dark-foreground tabular-nums">08/2027</td>
                                        <td class="py-3 text-sm text-dark-foreground">C-12</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <dl class="grid grid-cols-3 gap-px border border-dark-border bg-dark-border">
                            <div class="bg-dark-surface px-3 py-2.5">
                                <dt class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">On hand</dt>
                                <dd class="mt-1 text-sm font-semibold text-dark-foreground tabular-nums">180</dd>
                            </div>
                            <div class="bg-dark-surface px-3 py-2.5">
                                <dt class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">Reserved</dt>
                                <dd class="mt-1 text-sm font-semibold text-dark-foreground tabular-nums">24</dd>
                            </div>
                            <div class="bg-dark-surface px-3 py-2.5">
                                <dt class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">Available</dt>
                                <dd class="mt-1 text-sm font-semibold text-dark-foreground tabular-nums">156</dd>
                            </div>
                        </dl>

                        <div class="mt-5">
                            <p class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">Activity</p>
                            <ul class="mt-2 divide-y divide-dark-border border-y border-dark-border">
                                <li class="grid grid-cols-[4.5rem_minmax(0,1fr)] gap-3 py-2.5 text-sm">
                                    <span class="text-dark-muted tabular-nums">14:22</span>
                                    <span class="text-dark-foreground">Reserved 24 from batch B-441</span>
                                </li>
                                <li class="grid grid-cols-[4.5rem_minmax(0,1fr)] gap-3 py-2.5 text-sm">
                                    <span class="text-dark-muted tabular-nums">14:18</span>
                                    <span class="text-dark-foreground">Payment confirmed</span>
                                </li>
                                <li class="grid grid-cols-[4.5rem_minmax(0,1fr)] gap-3 py-2.5 text-sm">
                                    <span class="text-dark-muted">Yesterday</span>
                                    <span class="text-dark-foreground">GRN-220 posted</span>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-5">
                            <p class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">Workflow</p>
                            <ol class="proof-steps mt-2" data-proof-steps>
                                @foreach ($steps as $step)
                                    <li
                                        data-proof-step="{{ $step['key'] }}"
                                        @class([
                                            'proof-step',
                                            'is-done' => $step['state'] === 'done',
                                            'is-current' => $step['state'] === 'current',
                                        ])
                                    >
                                        <span>{{ $step['label'] }}</span>
                                        @if ($step['state'] === 'current')
                                            <span class="proof-current-label lg:sr-only">Current</span>
                                        @endif
                                    </li>
                                @endforeach
                            </ol>
                        </div>

                        <ul class="mt-4 border border-dark-border lg:hidden" aria-hidden="true">
                            @foreach ($links as $link)
                                <li class="flex items-baseline justify-between gap-3 border-b border-dark-border px-3 py-2.5 last:border-b-0">
                                    <span class="text-[10px] font-semibold tracking-[0.14em] text-dark-muted uppercase">{{ $link['label'] }}</span>
                                    <span class="text-sm text-dark-foreground">{{ $link['value'] }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <p class="mt-4 text-xs text-dark-muted">Next · Post to ledger</p>
                    </div>
                </div>
            </article>
        </div>

        <p class="mt-4 max-w-xl text-sm text-dark-muted">
            This order touches inventory, the ledger, and notify.
        </p>
    </div>
</section>
