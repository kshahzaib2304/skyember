{{--
    Chunk 17 - UI/UX Design service.
    Design judgment for complex software — not a visual gallery.
    Cross-links to Product Engineering are live.
--}}
@extends('layouts.app')

@php
    $title = 'UI/UX Design Services | SKYEMBER';
    $description = 'UI/UX design for complex software: research, information architecture, interaction design, design systems, prototyping, responsive and accessible interfaces.';
    $canonical = route('services.ui-ux-design');

    $problems = [
        [
            'index' => '01',
            'title' => 'People need context',
            'body' => 'An action is easier to understand when the information required to make that decision is nearby.',
        ],
        [
            'index' => '02',
            'title' => 'Systems have more states than the happy path',
            'body' => 'Loading, empty, error, permission, validation, partial completion, and confirmation all belong to the experience.',
        ],
        [
            'index' => '03',
            'title' => 'Consistency compounds',
            'body' => 'When related interactions behave differently, every new screen increases cognitive load.',
        ],
    ];

    $when = [
        'Users can complete the task, but the path is harder than it should be.',
        'The product has grown faster than its information architecture or interaction model.',
        'Different parts of the product behave differently for the same kind of task.',
        'A new product needs its experience defined before engineering scales it.',
    ];

    $activities = [
        [
            'index' => '01',
            'id' => 'ux-research',
            'title' => 'Research',
            'body' => 'Understand users, contexts, constraints, and the actual work — user research before visual styling.',
            'visual' => 'research',
        ],
        [
            'index' => '02',
            'id' => 'ux-structure',
            'title' => 'Structure',
            'body' => 'Shape information architecture, navigation, content hierarchy, and user flows so complex software stays coherent.',
            'visual' => 'structure',
        ],
        [
            'index' => '03',
            'id' => 'ux-interaction',
            'title' => 'Interaction',
            'body' => 'Define actions, states, transitions, feedback, and error recovery for interaction design that people can trust.',
            'visual' => 'interaction',
        ],
        [
            'index' => '04',
            'id' => 'ux-systematize',
            'title' => 'Systematize',
            'body' => 'Create reusable components, patterns, tokens, and design rules that keep the product coherent as it grows.',
            'visual' => 'systematize',
        ],
        [
            'index' => '05',
            'id' => 'ux-validate',
            'title' => 'Validate',
            'body' => 'Prototype, test, observe, and refine — usability testing that improves the decision before engineering scales it.',
            'visual' => 'validate',
        ],
    ];

    $decision = [
        ['label' => 'Context', 'detail' => 'What surrounds the task'],
        ['label' => 'Current state', 'detail' => 'Where the work stands'],
        ['label' => 'What matters now', 'detail' => 'The information to decide'],
        ['label' => 'Primary action', 'detail' => 'The clear next step'],
        ['label' => 'Supporting info', 'detail' => 'Secondary, available'],
        ['label' => 'Next step', 'detail' => 'Where the work continues'],
    ];

    $survive = [
        [
            'title' => 'Responsive',
            'body' => 'The experience adapts to the space.',
        ],
        [
            'title' => 'Accessible',
            'body' => 'The interface works for more people and different ways of interacting.',
        ],
        [
            'title' => 'Content',
            'body' => 'Words carry meaning, not just layout.',
        ],
        [
            'title' => 'States',
            'body' => 'Loading, empty, error, success, permission, and recovery are designed.',
        ],
    ];

    $layers = [
        'Content',
        'Information architecture',
        'Interaction',
        'Visual system',
        'Component system',
        'Implementation',
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'UI/UX design services',
                'serviceType' => 'UI/UX design',
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
                        'name' => 'UI/UX Design',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="ux-page" data-ux aria-labelledby="ux-heading">
        <header class="ux-hero">
            <div class="container-sky">
                <nav class="ux-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">UI/UX Design</li>
                    </ol>
                </nav>

                <div class="ux-hero-grid">
                    <div class="ux-hero-copy">
                        <p class="text-eyebrow">UI/UX Design</p>
                        <h1 id="ux-heading" class="ux-title">
                            Make complex software easier to understand.
                        </h1>
                        <p class="text-body ux-support">
                            We design the structure, interactions, and interfaces that help people understand what a product is doing, what they can do next, and what happens when things don't go as planned.
                        </p>
                        <div class="ux-hero-actions">
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

                    <figure class="ux-surface" data-ux-reveal aria-label="Complex product task with a clear next decision">
                        <div class="ux-surface-bar">
                            <p class="ux-surface-name">Product</p>
                            <p class="ux-muted">Decision made clear</p>
                        </div>
                        <div class="ux-surface-body">
                            <p class="ux-kicker">Current task</p>
                            <div class="ux-meta-row">
                                <div>
                                    <p class="ux-mini">Customer</p>
                                    <p class="ux-surface-title">Northline Co.</p>
                                </div>
                                <div>
                                    <p class="ux-mini">Order</p>
                                    <p class="ux-surface-title">OR-2841</p>
                                </div>
                                <div>
                                    <p class="ux-mini">Status</p>
                                    <p class="ux-surface-title">Needs review</p>
                                </div>
                            </div>
                            <p class="ux-question">What needs to happen next?</p>
                            <p class="ux-primary-action">Confirm and continue</p>
                            <p class="ux-muted">Supporting information stays secondary — nearby, not competing.</p>
                            <ul class="ux-annotations" aria-hidden="true">
                                <li>Hierarchy</li>
                                <li>State</li>
                                <li>Action</li>
                                <li>Context</li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="ux-band" aria-labelledby="ux-problem-heading">
            <div class="container-sky">
                <h2 id="ux-problem-heading" class="text-h2 ux-measure">
                    Good interfaces solve more than visual problems.
                </h2>
                <ol class="ux-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="ux-index">{{ $item['index'] }}</p>
                            <h3 class="ux-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-when-heading">
            <div class="container-sky">
                <h2 id="ux-when-heading" class="text-h2 ux-measure">
                    Bring UI/UX in when people are struggling with the software.
                </h2>
                <ol class="ux-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="ux-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ux-band" aria-labelledby="ux-place-heading">
            <div class="container-sky">
                <div class="ux-measure">
                    <h2 id="ux-place-heading" class="text-h2">From user need to usable system.</h2>
                    <p class="text-body ux-lead">
                        UX design services that move from research and information architecture through interaction design, design systems, prototyping, and validation — so product design stays coherent.
                    </p>
                </div>

                <div class="ux-anatomy">
                    @foreach ($activities as $item)
                        <article class="ux-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="ux-beat-copy">
                                <p class="ux-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>
                            <figure class="ux-panel" aria-hidden="true">
                                @if ($item['visual'] === 'research')
                                    <p class="ux-kicker">Observe</p>
                                    <ol class="ux-steps">
                                        <li class="is-done">Context</li>
                                        <li class="is-current">Task</li>
                                        <li>Decision</li>
                                    </ol>
                                @elseif ($item['visual'] === 'structure')
                                    <p class="ux-kicker">Structure</p>
                                    <p class="ux-panel-title">Space → path</p>
                                    <ul class="ux-list">
                                        <li><span>Scattered</span><span>Before</span></li>
                                        <li class="is-current"><span>Clear route</span><span>After</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'interaction')
                                    <p class="ux-kicker">Interaction</p>
                                    <ol class="ux-steps">
                                        <li class="is-done">Intent</li>
                                        <li class="is-current">Action</li>
                                        <li>Response</li>
                                    </ol>
                                @elseif ($item['visual'] === 'systematize')
                                    <p class="ux-kicker">Pattern</p>
                                    <ul class="ux-list">
                                        <li class="is-current"><span>Button</span><span>Base</span></li>
                                        <li><span>Primary</span><span>Family</span></li>
                                        <li><span>Quiet</span><span>Family</span></li>
                                    </ul>
                                @else
                                    <p class="ux-kicker">Validate</p>
                                    <ol class="ux-steps">
                                        <li class="is-done">Hypothesis</li>
                                        <li class="is-current">Finding</li>
                                        <li>Refine</li>
                                    </ol>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-signature-heading">
            <div class="container-sky">
                <div class="ux-measure">
                    <h2 id="ux-signature-heading" class="text-h2">A good interface carries the decision with it.</h2>
                    <p class="text-body ux-lead">
                        One task. Hierarchy that decides what is prominent, what is secondary, what is grouped, and what happens when something goes wrong.
                    </p>
                </div>
                <ol class="ux-signature" data-ux-signature aria-label="One task carried through interface hierarchy">
                    @foreach ($decision as $step)
                        <li data-ux-step>
                            <p class="ux-step-label">{{ $step['label'] }}</p>
                            <p class="ux-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ux-band" aria-labelledby="ux-system-heading">
            <div class="container-sky">
                <div class="ux-measure">
                    <h2 id="ux-system-heading" class="text-h2">A product should not reinvent itself on every screen.</h2>
                    <p class="text-body ux-lead">
                        Design systems turn reusable patterns into consistent product behavior — a quality mechanism, not a documentation exercise.
                    </p>
                </div>
                <figure class="ux-system" aria-label="Foundation to patterns to experience">
                    <div>
                        <p class="ux-kicker">Foundation</p>
                        <ul class="ux-list">
                            <li><span>Typography</span></li>
                            <li><span>Spacing</span></li>
                            <li><span>Color</span></li>
                            <li><span>Components</span></li>
                        </ul>
                    </div>
                    <div>
                        <p class="ux-kicker">Patterns</p>
                        <ul class="ux-list">
                            <li><span>Forms</span></li>
                            <li><span>Tables</span></li>
                            <li><span>Navigation</span></li>
                            <li><span>Feedback</span></li>
                        </ul>
                    </div>
                    <div>
                        <p class="ux-kicker">Experience</p>
                        <p class="ux-panel-title">Consistent product behavior</p>
                        <p class="ux-muted">Same kind of task, same kind of response.</p>
                    </div>
                </figure>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-survive-heading">
            <div class="container-sky">
                <h2 id="ux-survive-heading" class="text-h2 ux-measure">
                    The design has to survive outside the mockup.
                </h2>
                <ul class="ux-survive">
                    @foreach ($survive as $item)
                        <li>
                            <h3 class="ux-survive-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="ux-band" aria-labelledby="ux-proto-heading">
            <div class="container-sky ux-measure">
                <h2 id="ux-proto-heading" class="text-h2">Prototype the question before building the answer.</h2>
                <p class="text-body ux-lead">
                    A prototype is useful when it helps resolve uncertainty: whether a flow makes sense, whether the information is in the right place, or whether a user can complete the task without assistance.
                </p>
                <ol class="ux-proto">
                    <li>Idea</li>
                    <li>Flow</li>
                    <li>Prototype</li>
                    <li>Test</li>
                    <li>Refine</li>
                </ol>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-validation-heading">
            <div class="container-sky">
                <div class="ux-measure">
                    <h2 id="ux-validation-heading" class="text-h2">The design gets better when someone tries to use it.</h2>
                    <p class="text-body ux-lead">
                        Representative validation — how a design decision is observed and refined. Not a published study.
                    </p>
                </div>
                <figure class="ux-validation" data-ux-validation aria-label="Representative design validation">
                    <p class="ux-kicker">Task</p>
                    <p class="ux-panel-title">Find the current order.</p>
                    <dl class="ux-validation-rows">
                        <div>
                            <dt>Observation</dt>
                            <dd>User opens Orders.</dd>
                        </div>
                        <div>
                            <dt>Action</dt>
                            <dd>Searches by customer.</dd>
                        </div>
                        <div data-ux-friction>
                            <dt>Friction</dt>
                            <dd>Status isn't visible in the result.</dd>
                        </div>
                        <div data-ux-response class="is-response">
                            <dt>Design response</dt>
                            <dd>Promote current state.</dd>
                        </div>
                    </dl>
                    <p class="ux-retest" data-ux-retest>Retest · Clearer next action</p>
                </figure>
            </div>
        </section>

        <section class="ux-band" aria-labelledby="ux-layers-heading">
            <div class="container-sky ux-measure">
                <h2 id="ux-layers-heading" class="text-h2">The screen is only one expression of the product.</h2>
                <p class="text-body ux-lead">
                    UX decisions should survive engineering — from content and information architecture through interaction, visual system, components, and implementation.
                </p>
                <ol class="ux-layers">
                    @foreach ($layers as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative experience</p>
                <div class="ux-rep-grid">
                    <div class="ux-rep-copy">
                        <h2 id="ux-rep-heading" class="text-h2">Clarity is the feature.</h2>
                        <p class="text-body">
                            Strong hierarchy, a clear primary action, contextual information, visible state, and a composition that stays readable as the space changes.
                        </p>
                        <p class="ux-disclosure">Representative interface — not a published client engagement.</p>
                    </div>
                    <figure class="ux-surface ux-surface-deep" aria-label="Representative interface">
                        <div class="ux-surface-bar">
                            <p class="ux-surface-name">Representative interface</p>
                            <p class="ux-muted">Order review</p>
                        </div>
                        <div class="ux-surface-body">
                            <p class="ux-kicker">Needs attention</p>
                            <p class="ux-surface-title">OR-2841 · Northline Co.</p>
                            <p class="ux-primary-action">Review shipping exception</p>
                            <ul class="ux-list">
                                <li class="is-current"><span>Status</span><span>Exception</span></li>
                                <li><span>Items</span><span>3 lines</span></li>
                                <li><span>Owner</span><span>Ops desk</span></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="ux-band" aria-labelledby="ux-handoff-heading">
            <div class="container-sky ux-measure">
                <h2 id="ux-handoff-heading" class="text-h2">Design does not stop at the handoff.</h2>
                <p class="text-body ux-lead">
                    We work with engineering decisions in mind, so the experience can survive real data, responsive constraints, permissions, failure states, and implementation trade-offs.
                </p>
                <a class="solutions-cta" href="{{ route('services.product-engineering') }}">
                    See Product Engineering
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="ux-band ux-band-tight" aria-labelledby="ux-honest-heading">
            <div class="container-sky ux-measure">
                <h2 id="ux-honest-heading" class="text-h2">Sometimes the interface isn't the real problem.</h2>
                <p class="text-body">
                    If the underlying workflow, product model, or business rule is unclear, polishing the interface will only hide the problem temporarily. Sometimes the right first step is product or engineering work.
                </p>
                <a class="solutions-cta" href="{{ route('services.product-engineering') }}">
                    Explore Product Engineering
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="ux-close" aria-labelledby="ux-cta-heading">
            <div class="container-sky ux-close-band">
                <div>
                    <h2 id="ux-cta-heading" class="text-h2">Have software people need to understand?</h2>
                    <p class="text-body ux-close-copy">
                        Tell us where the experience breaks down. We'll help identify what needs to change.
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
