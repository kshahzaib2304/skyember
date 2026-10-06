{{--
    Chunk 12 - SaaS products solution.
    Product experience + lifecycle. Not Business Software with new words.
    Secondary "See how we think" has no href until a SaaS proof route exists.
--}}
@extends('layouts.app')

@php
    $title = 'SaaS Product Development Company | SKYEMBER';
    $description = 'We design and engineer SaaS products around clear user problems, repeatable workflows, and foundations built to evolve.';
    $canonical = route('solutions.saas-products');

    $saasProofHref = null;

    foreach (\Illuminate\Support\Facades\Route::getRoutes() as $route) {
        $uri = trim($route->uri(), '/');
        $isGet = in_array('GET', $route->methods(), true);
        $isSaasProof = str_starts_with($uri, 'work/') && str_contains($uri, 'saas');

        if ($isGet && $isSaasProof) {
            $saasProofHref = '/'.$uri;
            break;
        }
    }

    $problems = [
        [
            'index' => '01',
            'title' => 'The problem has to be specific',
            'body' => 'A useful SaaS product begins with a clearly understood job, not a collection of requested features.',
        ],
        [
            'index' => '02',
            'title' => 'The experience has to repeat well',
            'body' => 'Users need a product that makes the core workflow obvious the first time and efficient the next hundred times.',
        ],
        [
            'index' => '03',
            'title' => 'The system has to keep growing',
            'body' => 'Accounts, permissions, data, onboarding, administration, product learning, and release changes eventually become part of the product itself.',
        ],
    ];

    $when = [
        'A recurring problem can be solved through a repeatable digital workflow.',
        'Multiple users, teams, or organizations need to use the same product.',
        'The product\'s value grows through continued use, refinement, and new capability.',
        'You need ownership of the product experience, not just a one-time software delivery.',
    ];

    $anatomy = [
        [
            'index' => '01',
            'id' => 'saas-foundation',
            'title' => 'Product foundation',
            'body' => 'The product model, core entities, roles, permissions, and information architecture that SaaS product development has to get right before features pile up.',
            'visual' => 'foundation',
        ],
        [
            'index' => '02',
            'id' => 'saas-experience',
            'title' => 'Core experience',
            'body' => 'The central user workflow — the reason somebody opens the product — shaped as software product development, not a menu of options.',
            'visual' => 'experience',
        ],
        [
            'index' => '03',
            'id' => 'saas-ops',
            'title' => 'Product operations',
            'body' => 'Onboarding, account and workspace management, administration, and notifications that keep multi-user software usable after the first session.',
            'visual' => 'operations',
        ],
        [
            'index' => '04',
            'id' => 'saas-evolve',
            'title' => 'Product evolution',
            'body' => 'Feedback, release controls, and a foundation that can support new product capability without fighting the core experience.',
            'visual' => 'evolution',
        ],
    ];

    $states = [
        ['title' => 'Discover', 'detail' => 'What is this for?'],
        ['title' => 'Act', 'detail' => 'What can I do?'],
        ['title' => 'Return', 'detail' => 'Why would I come back?'],
        ['title' => 'Evolve', 'detail' => 'How does the product get better?'],
    ];

    $foundation = [
        ['title' => 'Identity', 'body' => 'Accounts, organizations, roles'],
        ['title' => 'Experience', 'body' => 'Navigation, states, onboarding'],
        ['title' => 'Data', 'body' => 'Reliable domain model and relationships'],
        ['title' => 'Operations', 'body' => 'Administration, observability, release control'],
    ];

    $lifecycle = [
        ['title' => 'Shape', 'body' => 'Define the product and its core user job.'],
        ['title' => 'Design', 'body' => 'Turn the workflow into a clear experience.'],
        ['title' => 'Build', 'body' => 'Engineer the product foundation and core capability.'],
        ['title' => 'Launch', 'body' => 'Put the product in users\' hands.'],
        ['title' => 'Evolve', 'body' => 'Learn, refine, and extend the system.'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'SaaS product development',
                'serviceType' => 'SaaS product development',
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
                        'name' => 'SaaS products',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="saas-page" data-saas aria-labelledby="saas-heading">
        <header class="saas-hero">
            <div class="container-sky">
                <nav class="saas-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('solutions') }}">Solutions</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">SaaS products</li>
                    </ol>
                </nav>

                <div class="saas-hero-grid">
                    <div class="saas-hero-copy">
                        <p class="text-eyebrow">SaaS products</p>
                        <h1 id="saas-heading" class="saas-title">
                            Turn a repeatable problem into a product people can use.
                        </h1>
                        <p class="text-body saas-support">
                            We design and engineer SaaS products around a clear user problem, a focused workflow, and the foundation needed to evolve beyond the first release.
                        </p>
                        <div class="saas-hero-actions">
                            <a class="solutions-cta" href="{{ route('contact') }}">
                                Talk to SKYEMBER
                                <span class="solutions-arrow" aria-hidden="true">→</span>
                            </a>
                            @if ($saasProofHref)
                                <a class="solutions-cta solutions-cta-secondary" href="{{ $saasProofHref }}">
                                    See how we think
                                    <span class="solutions-arrow" aria-hidden="true">→</span>
                                </a>
                            @else
                                <p class="saas-cta-quiet">
                                    See how we think
                                    <span aria-hidden="true">→</span>
                                </p>
                            @endif
                        </div>
                    </div>

                    <figure class="saas-product" data-saas-reveal aria-label="Representative SaaS product workspace">
                        <div class="saas-product-bar">
                            <p class="saas-product-name">Product</p>
                            <p class="saas-muted">Workspace</p>
                        </div>
                        <div class="saas-product-body">
                            <p class="saas-greeting">Welcome back</p>
                            <p class="saas-kicker">Your active work</p>
                            <div class="saas-active">
                                <p class="saas-active-title">Project Atlas</p>
                                <p class="saas-muted">7 tasks · 3 collaborators</p>
                            </div>
                            <p class="saas-primary-action">Continue the work</p>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="saas-band" aria-labelledby="saas-problem-heading">
            <div class="container-sky">
                <h2 id="saas-problem-heading" class="text-h2 saas-measure">
                    A product is more than the first release.
                </h2>
                <ol class="saas-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="saas-index">{{ $item['index'] }}</p>
                            <h3 class="saas-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="saas-band saas-band-tight" aria-labelledby="saas-when-heading">
            <div class="container-sky">
                <h2 id="saas-when-heading" class="text-h2 saas-measure">
                    Choose SaaS when the product needs to become part of the user's routine.
                </h2>
                <ol class="saas-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="saas-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="saas-band" aria-labelledby="saas-place-heading">
            <div class="container-sky">
                <div class="saas-measure">
                    <h2 id="saas-place-heading" class="text-h2">What we put in place.</h2>
                    <p class="text-body saas-lead">
                        SaaS product design and web application development treated as one product engineering effort — so the experience people return to is supported by the foundation underneath it.
                    </p>
                </div>

                <div class="saas-anatomy">
                    @foreach ($anatomy as $item)
                        <article class="saas-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="saas-beat-copy">
                                <p class="saas-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>

                            <figure class="saas-surface" aria-hidden="true">
                                @if ($item['visual'] === 'foundation')
                                    <p class="saas-kicker">Product model</p>
                                    <ul class="saas-list">
                                        <li class="is-current"><span>Workspace</span><span>Core</span></li>
                                        <li><span>Roles</span><span>Owner · Member</span></li>
                                        <li><span>Entities</span><span>Project · Task</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'experience')
                                    <p class="saas-kicker">Core task</p>
                                    <ol class="saas-steps">
                                        <li class="is-done">Open the work</li>
                                        <li class="is-current">Complete the step</li>
                                        <li>Share the result</li>
                                    </ol>
                                @elseif ($item['visual'] === 'operations')
                                    <p class="saas-kicker">Workspace settings</p>
                                    <ul class="saas-list">
                                        <li><span>Members</span><span>Invite</span></li>
                                        <li class="is-current"><span>Notifications</span><span>On</span></li>
                                        <li><span>Admin</span><span>Controls</span></li>
                                    </ul>
                                @else
                                    <p class="saas-kicker">Release</p>
                                    <p class="saas-surface-title">v0.9 · Learning</p>
                                    <p class="saas-muted">Feedback open · Next capability queued</p>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="saas-band saas-band-tight" aria-labelledby="saas-states-heading">
            <div class="container-sky">
                <div class="saas-measure">
                    <h2 id="saas-states-heading" class="text-h2">One product, many states.</h2>
                    <p class="text-body saas-lead">
                        SaaS is an ongoing product relationship. The same product environment has to answer different questions as people discover it, act in it, return to it, and as it evolves.
                    </p>
                </div>

                <ol class="saas-states" data-saas-states aria-label="Product states">
                    @foreach ($states as $state)
                        <li data-saas-state>
                            <p class="saas-state-title">{{ $state['title'] }}</p>
                            <p class="saas-muted">{{ $state['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="saas-band" aria-labelledby="saas-pile-heading">
            <div class="container-sky saas-measure">
                <h2 id="saas-pile-heading" class="text-h2">A SaaS product is not a feature pile.</h2>
                <p class="text-body">
                    We keep the core problem visible while shaping the product around the people who use it. Features are valuable when they strengthen that experience—not when they simply make the specification longer.
                </p>
            </div>
        </section>

        <section class="saas-band saas-band-tight" aria-labelledby="saas-foundation-heading">
            <div class="container-sky">
                <h2 id="saas-foundation-heading" class="text-h2 saas-measure">
                    The foundation has to support the product, not fight it.
                </h2>
                <ul class="saas-foundation">
                    @foreach ($foundation as $item)
                        <li>
                            <p class="saas-foundation-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="saas-band" aria-labelledby="saas-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative product</p>
                <div class="saas-rep-grid">
                    <div class="saas-rep-copy">
                        <h2 id="saas-rep-heading" class="text-h2">Start with the workflow people will return to.</h2>
                        <p class="text-body">
                            A focused SaaS product begins with one useful workflow and grows around the people, data, and decisions that make it worth returning to.
                        </p>
                        <p class="saas-disclosure">Representative product — not a published client engagement.</p>
                    </div>
                    <figure class="saas-product saas-product-deep" aria-hidden="true">
                        <div class="saas-product-bar">
                            <p class="saas-product-name">Project Atlas</p>
                            <p class="saas-muted">Task in progress</p>
                        </div>
                        <div class="saas-product-body">
                            <p class="saas-kicker">Today</p>
                            <p class="saas-surface-title">Review collaborator notes</p>
                            <ul class="saas-list">
                                <li class="is-current"><span>Open notes</span><span>Now</span></li>
                                <li><span>Decide next step</span><span>Next</span></li>
                                <li><span>Notify the team</span><span>After</span></li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="saas-band saas-band-tight" aria-labelledby="saas-life-heading">
            <div class="container-sky">
                <h2 id="saas-life-heading" class="text-h2 saas-measure">
                    From product idea to product ownership.
                </h2>
                <ol class="saas-lifecycle">
                    @foreach ($lifecycle as $item)
                        <li>
                            <h3 class="saas-life-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="saas-band" aria-labelledby="saas-honest-heading">
            <div class="container-sky saas-measure">
                <h2 id="saas-honest-heading" class="text-h2">Sometimes the product should stay internal.</h2>
                <p class="text-body">
                    If the workflow exists only to support your own organization,
                    <a class="saas-inline" href="{{ route('solutions.business-software') }}">a business system</a>
                    may be a better fit than building a customer-facing SaaS product.
                </p>
                <p class="text-body">
                    And if the problem is better solved by an established platform, adopting it may be smarter than creating another one.
                </p>
            </div>
        </section>

        <section class="saas-close" aria-labelledby="saas-cta-heading">
            <div class="container-sky saas-close-band">
                <div>
                    <h2 id="saas-cta-heading" class="text-h2">Have a product idea worth testing?</h2>
                    <p class="text-body saas-close-copy">
                        Tell us who the product is for and what problem it needs to solve. We'll help shape the path from idea to a product people can actually use.
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
