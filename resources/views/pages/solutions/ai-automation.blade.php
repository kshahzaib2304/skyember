{{--
    Chunk 14 - AI & automation solution.
    Most intelligent-looking, not most futuristic.
    Secondary "See the workflow" has no href until an AI proof route exists.
--}}
@extends('layouts.app')

@php
    $title = 'AI Automation & AI Agent Development | SKYEMBER';
    $description = 'AI automation and agentic workflows designed around real business processes, with context, controls, evaluation, and human oversight.';
    $canonical = route('solutions.ai-automation');

    $aiProofHref = null;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $uri = trim($route->uri(), '/');
        $isGet = in_array('GET', $route->methods(), true);
        $isAiProof = str_starts_with($uri, 'work/')
            && (str_contains($uri, 'ai') || str_contains($uri, 'automation'));

        if ($isGet && $isAiProof) {
            $aiProofHref = '/'.$uri;
            break;
        }
    }

    $problems = [
        [
            'index' => '01',
            'title' => 'Repetition',
            'body' => 'The same structured work happens again and again.',
        ],
        [
            'index' => '02',
            'title' => 'Judgment',
            'body' => 'People repeatedly interpret documents, requests, messages, or data before deciding what should happen next.',
        ],
        [
            'index' => '03',
            'title' => 'Handoffs',
            'body' => 'The work moves between systems or teams, and useful context gets lost along the way.',
        ],
    ];

    $when = [
        'People spend time reading, sorting, extracting, classifying, or routing similar information.',
        'A business process contains decisions that can be bounded by rules, context, and explicit criteria.',
        'Several systems need information to move between them without repeated manual entry.',
        'The workflow can benefit from automation while keeping people involved at the decisions that matter.',
    ];

    $capabilities = [
        [
            'index' => '01',
            'id' => 'aiauto-understand',
            'title' => 'Understand',
            'body' => 'Extract meaning from documents, messages, records, or other inputs — the starting point for AI automation inside a real workflow.',
            'visual' => 'understand',
        ],
        [
            'index' => '02',
            'id' => 'aiauto-decide',
            'title' => 'Decide',
            'body' => 'Classify, route, score, summarize, recommend, or select the next step — a bounded decision with context and criteria.',
            'visual' => 'decide',
        ],
        [
            'index' => '03',
            'id' => 'aiauto-act',
            'title' => 'Act',
            'body' => 'Trigger a bounded workflow, update a system, create a task, notify someone, or hand work to another process.',
            'visual' => 'act',
        ],
        [
            'index' => '04',
            'id' => 'aiauto-escalate',
            'title' => 'Escalate',
            'body' => 'Send uncertain, sensitive, or high-impact decisions to a person with the context required to review them.',
            'visual' => 'escalate',
        ],
    ];

    $signature = [
        ['label' => 'Input', 'detail' => 'Document received'],
        ['label' => 'Context', 'detail' => 'Fields + history'],
        ['label' => 'AI', 'detail' => 'Propose next step'],
        ['label' => 'Rules', 'detail' => 'Policy check'],
        ['label' => 'Action', 'detail' => 'Route or update'],
        ['label' => 'Review', 'detail' => 'When required'],
    ];

    $boundaries = [
        [
            'title' => 'Context',
            'body' => 'The system should know what information it is allowed to use.',
        ],
        [
            'title' => 'Controls',
            'body' => 'Actions should have defined limits and permissions.',
        ],
        [
            'title' => 'Evaluation',
            'body' => 'The behavior should be tested against representative cases before and after changes.',
        ],
        [
            'title' => 'Oversight',
            'body' => 'Higher-risk actions can pause for human review.',
        ],
    ];

    $evals = [
        [
            'case' => 'CASE 1048',
            'expected' => 'Route to purchasing',
            'model' => 'Route to purchasing',
            'result' => 'Match',
            'ok' => true,
        ],
        [
            'case' => 'CASE 1049',
            'expected' => 'Human review',
            'model' => 'Approve automatically',
            'result' => 'Escalated',
            'ok' => false,
        ],
    ];

    $engagement = [
        ['title' => 'Map', 'body' => 'Understand the work as it happens today.'],
        ['title' => 'Identify', 'body' => 'Find the repeatable decision or handoff.'],
        ['title' => 'Prototype', 'body' => 'Test the smallest useful automation.'],
        ['title' => 'Evaluate', 'body' => 'Measure behavior against real examples.'],
        ['title' => 'Harden', 'body' => 'Add controls, fallbacks, monitoring, and ownership.'],
    ];

    $repSteps = [
        'Invoice received',
        'Document understood',
        'Fields extracted',
        'Business rules checked',
        'Confidence / exception',
        'Approve automatically or human review',
        'Record updated',
        'Team notified',
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'AI automation and AI agent development',
                'serviceType' => 'AI automation',
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
                        'name' => 'AI & automation',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="aiauto-page" data-aiauto aria-labelledby="aiauto-heading">
        <header class="aiauto-hero">
            <div class="container-sky">
                <nav class="aiauto-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('solutions') }}">Solutions</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">AI &amp; automation</li>
                    </ol>
                </nav>

                <div class="aiauto-hero-grid">
                    <div class="aiauto-hero-copy">
                        <p class="text-eyebrow">AI &amp; automation</p>
                        <h1 id="aiauto-heading" class="aiauto-title">
                            Make the work move without making the system harder to trust.
                        </h1>
                        <p class="text-body aiauto-support">
                            We design AI-powered workflows and automation that read context, make bounded decisions, and move work between people and systems—with clear controls around what happens next.
                        </p>
                        <div class="aiauto-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Talk to SKYEMBER
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            @if ($aiProofHref)
                                <a class="solutions-cta solutions-cta-secondary" href="{{ $aiProofHref }}">
                                    See the workflow
                                    <span class="solutions-arrow" aria-hidden="true">→</span>
                                </a>
                            @else
                                <p class="aiauto-cta-quiet">
                                    See the workflow
                                    <span aria-hidden="true">→</span>
                                </p>
                            @endif
                        </div>
                    </div>

                    <figure class="aiauto-console" data-aiauto-reveal aria-label="Controlled automation console with one work item in progress">
                        <div class="aiauto-console-bar">
                            <p class="aiauto-console-name">Automation</p>
                            <p class="aiauto-muted">Item DOC-218</p>
                        </div>
                        <div class="aiauto-console-body">
                            <dl class="aiauto-fields">
                                <div>
                                    <dt>Input</dt>
                                    <dd>Inbound document</dd>
                                </div>
                                <div>
                                    <dt>Context</dt>
                                    <dd>Vendor · amount · terms</dd>
                                </div>
                                <div class="is-active">
                                    <dt>Decision</dt>
                                    <dd>Route to purchasing</dd>
                                </div>
                                <div>
                                    <dt>Confidence</dt>
                                    <dd>Bounded by rules</dd>
                                </div>
                                <div>
                                    <dt>Action</dt>
                                    <dd>Pending review gate</dd>
                                </div>
                                <div>
                                    <dt>Review</dt>
                                    <dd>Required when uncertain</dd>
                                </div>
                                <div>
                                    <dt>Audit</dt>
                                    <dd>Decision recorded</dd>
                                </div>
                            </dl>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="aiauto-band" aria-labelledby="aiauto-problem-heading">
            <div class="container-sky">
                <h2 id="aiauto-problem-heading" class="text-h2 aiauto-measure">
                    Not every task needs AI.
                </h2>
                <ol class="aiauto-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="aiauto-index">{{ $item['index'] }}</p>
                            <h3 class="aiauto-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
                <p class="text-body aiauto-close-line">
                    The opportunity is not to replace every step with a model. It is to identify the part of the workflow where intelligence or automation creates a meaningful improvement.
                </p>
            </div>
        </section>

        <section class="aiauto-band aiauto-band-tight" aria-labelledby="aiauto-when-heading">
            <div class="container-sky">
                <h2 id="aiauto-when-heading" class="text-h2 aiauto-measure">
                    Choose AI and automation when the work contains a repeatable decision.
                </h2>
                <ol class="aiauto-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="aiauto-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="aiauto-band" aria-labelledby="aiauto-place-heading">
            <div class="container-sky">
                <div class="aiauto-measure">
                    <h2 id="aiauto-place-heading" class="text-h2">Intelligence where it earns its place.</h2>
                    <p class="text-body aiauto-lead">
                        AI agent development and workflow automation treated as engineering inside the process — not a catalog of models and buzzwords.
                    </p>
                </div>

                <div class="aiauto-anatomy">
                    @foreach ($capabilities as $item)
                        <article class="aiauto-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="aiauto-beat-copy">
                                <p class="aiauto-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>

                            <figure class="aiauto-panel" aria-hidden="true">
                                @if ($item['visual'] === 'understand')
                                    <p class="aiauto-kicker">Incoming</p>
                                    <p class="aiauto-panel-title">Document → fields</p>
                                    <ul class="aiauto-list">
                                        <li class="is-current"><span>Vendor</span><span>Extracted</span></li>
                                        <li><span>Amount</span><span>Extracted</span></li>
                                        <li><span>Due date</span><span>Extracted</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'decide')
                                    <p class="aiauto-kicker">Next step</p>
                                    <p class="aiauto-panel-title">Classify · route</p>
                                    <ul class="aiauto-list">
                                        <li><span>Option</span><span>Finance</span></li>
                                        <li class="is-current"><span>Selected</span><span>Purchasing</span></li>
                                        <li><span>Reason</span><span>Matched policy</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'act')
                                    <p class="aiauto-kicker">Bounded action</p>
                                    <ol class="aiauto-steps">
                                        <li class="is-done">Create task</li>
                                        <li class="is-current">Update record</li>
                                        <li>Notify owner</li>
                                    </ol>
                                @else
                                    <p class="aiauto-kicker">Human review</p>
                                    <p class="aiauto-panel-title">Proposal held</p>
                                    <p class="aiauto-muted">Context attached · Awaiting decision</p>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="aiauto-band aiauto-band-tight" aria-labelledby="aiauto-signature-heading">
            <div class="container-sky">
                <div class="aiauto-measure">
                    <h2 id="aiauto-signature-heading" class="text-h2">AI inside the workflow.</h2>
                    <p class="text-body aiauto-lead">
                        The intelligence is connected to business context and operational action — one part of the system, not the whole system.
                    </p>
                </div>

                <ol class="aiauto-signature" data-aiauto-signature aria-label="Work item moving through a controlled workflow">
                    @foreach ($signature as $step)
                        <li data-aiauto-step>
                            <p class="aiauto-step-label">{{ $step['label'] }}</p>
                            <p class="aiauto-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="aiauto-band" aria-labelledby="aiauto-autonomy-heading">
            <div class="container-sky aiauto-measure">
                <h2 id="aiauto-autonomy-heading" class="text-h2">Start with automation. Add autonomy only when it earns it.</h2>
                <p class="text-body">
                    Some workflows are better served by deterministic rules. Others benefit from AI-assisted decisions. A genuinely agentic system is useful when the task requires flexible planning and tool use. The architecture should follow the problem—not the excitement around the technology.
                </p>
            </div>
        </section>

        <section class="aiauto-band aiauto-band-tight" aria-labelledby="aiauto-trust-heading">
            <div class="container-sky">
                <h2 id="aiauto-trust-heading" class="text-h2 aiauto-measure">
                    Useful AI has boundaries.
                </h2>
                <ul class="aiauto-boundaries">
                    @foreach ($boundaries as $item)
                        <li>
                            <h3 class="aiauto-boundary-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="aiauto-band" aria-labelledby="aiauto-eval-heading">
            <div class="container-sky">
                <div class="aiauto-measure">
                    <h2 id="aiauto-eval-heading" class="text-h2">The system needs to know when it is wrong.</h2>
                    <p class="text-body aiauto-lead">
                        AI evaluation is an engineering practice — test behavior against representative cases so failures are caught before they reach production.
                    </p>
                </div>

                <figure class="aiauto-eval" data-aiauto-eval aria-label="Representative evaluation cases">
                    @foreach ($evals as $item)
                        <div class="aiauto-eval-case {{ $item['ok'] ? 'is-match' : 'is-fail' }}" data-aiauto-eval-case>
                            <p class="aiauto-kicker">{{ $item['case'] }}</p>
                            <dl class="aiauto-eval-rows">
                                <div>
                                    <dt>Expected</dt>
                                    <dd>{{ $item['expected'] }}</dd>
                                </div>
                                <div>
                                    <dt>Model</dt>
                                    <dd>{{ $item['model'] }}</dd>
                                </div>
                                <div>
                                    <dt>Result</dt>
                                    <dd>{{ $item['result'] }}</dd>
                                </div>
                            </dl>
                        </div>
                    @endforeach
                    <ul class="aiauto-eval-meta" aria-label="Evaluation surface labels">
                        <li>Evaluation set</li>
                        <li>Latest run</li>
                        <li>Failures</li>
                        <li>Reviewed cases</li>
                    </ul>
                </figure>
            </div>
        </section>

        <section class="aiauto-band aiauto-band-tight" aria-labelledby="aiauto-connect-heading">
            <div class="container-sky">
                <div class="aiauto-measure">
                    <h2 id="aiauto-connect-heading" class="text-h2">The model is rarely the whole system.</h2>
                    <p class="text-body aiauto-lead">
                        AI becomes useful when it has the right context and controlled access to the right actions — business data, knowledge, tools, APIs, workflows, permissions, and audit history.
                    </p>
                </div>

                <figure class="aiauto-connect" aria-label="AI connected to knowledge, tools, rules, workflow, and systems">
                    <div class="aiauto-connect-core">
                        <p class="aiauto-connect-ai">AI</p>
                        <p class="aiauto-muted">Bounded intelligence</p>
                    </div>
                    <ul class="aiauto-connect-ring">
                        <li><span>Knowledge</span><span>Business data</span></li>
                        <li><span>Tools</span><span>APIs · actions</span></li>
                        <li><span>Rules</span><span>Permissions</span></li>
                    </ul>
                    <div class="aiauto-connect-base">
                        <p><span>Workflow</span><span>People · systems</span></p>
                        <p><span>Your systems</span><span>Audit history</span></p>
                    </div>
                </figure>
            </div>
        </section>

        <section class="aiauto-band" aria-labelledby="aiauto-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative automation</p>
                <div class="aiauto-rep-grid">
                    <div class="aiauto-rep-copy">
                        <h2 id="aiauto-rep-heading" class="text-h2">A workflow that knows when to act—and when to ask.</h2>
                        <p class="text-body">
                            A representative intelligent automation path: understand the document, check the rules, act when confidence is clear, and escalate when it is not.
                        </p>
                        <p class="aiauto-disclosure">Representative system — not a published client engagement.</p>
                    </div>
                    <figure class="aiauto-panel aiauto-panel-deep" aria-hidden="true">
                        <p class="aiauto-kicker">Process</p>
                        <ol class="aiauto-steps aiauto-steps-tall">
                            @foreach ($repSteps as $i => $step)
                                <li class="{{ $i === 4 ? 'is-current' : ($i < 4 ? 'is-done' : '') }}">{{ $step }}</li>
                            @endforeach
                        </ol>
                    </figure>
                </div>
            </div>
        </section>

        <section class="aiauto-band aiauto-band-tight" aria-labelledby="aiauto-honest-heading">
            <div class="container-sky aiauto-measure">
                <h2 id="aiauto-honest-heading" class="text-h2">Sometimes the best automation is no automation.</h2>
                <p class="text-body">
                    If a task is infrequent, poorly defined, or safer when handled directly by a person, adding AI can create more complexity than value. We would rather find that out before building it.
                </p>
            </div>
        </section>

        <section class="aiauto-band" aria-labelledby="aiauto-engage-heading">
            <div class="container-sky">
                <h2 id="aiauto-engage-heading" class="text-h2 aiauto-measure">
                    Start with the workflow.
                </h2>
                <ol class="aiauto-engage">
                    @foreach ($engagement as $item)
                        <li>
                            <h3 class="aiauto-engage-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="aiauto-close" aria-labelledby="aiauto-cta-heading">
            <div class="container-sky aiauto-close-band">
                <div>
                    <h2 id="aiauto-cta-heading" class="text-h2">Have work worth automating?</h2>
                    <p class="text-body aiauto-close-copy">
                        Tell us what happens today. We'll help identify where automation or AI could actually improve it—and where it shouldn't.
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
