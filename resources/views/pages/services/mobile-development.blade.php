{{--
    Chunk 19 - Mobile Development service.
    Software for the moment it is used — not web on a smaller screen.
    Cross-links to UI/UX, Product Engineering, and Web Development are live.
--}}
@extends('layouts.app')

@php
    $title = 'Mobile App Development Services | SKYEMBER';
    $description = 'Mobile app development for iOS and Android, with platform-aware UX, device capabilities, offline behavior, accessibility, testing, and reliable release workflows.';
    $canonical = route('services.mobile-development');

    $problems = [
        [
            'index' => '01',
            'title' => 'Attention is fragmented',
            'body' => 'The user may leave the app, receive a notification, lock the phone, or return later.',
        ],
        [
            'index' => '02',
            'title' => 'Interaction is physical',
            'body' => 'Thumb reach, touch targets, gestures, system navigation, keyboard behavior, and orientation all shape the experience.',
        ],
        [
            'index' => '03',
            'title' => 'Connectivity is not guaranteed',
            'body' => 'The app may need to remain useful while the connection is slow, unstable, or temporarily absent.',
        ],
    ];

    $when = [
        'People need to perform an important task while away from a desk.',
        'The experience benefits from device capabilities such as camera, biometrics, notifications, location, files, or secure local storage.',
        'The product must remain useful through interruptions, changing connectivity, or limited attention.',
        'The mobile experience needs to work as part of a larger product rather than as an isolated app.',
    ];

    $activities = [
        [
            'index' => '01',
            'id' => 'mob-platform',
            'title' => 'Platform-native experience',
            'body' => 'iOS development and Android development should respect the conventions users already understand — native mobile apps that feel learned, not invented.',
            'visual' => 'platform',
        ],
        [
            'index' => '02',
            'id' => 'mob-touch',
            'title' => 'Touch + navigation',
            'body' => 'Mobile UX is physical: thumb reach, touch targets, gestures, back navigation, keyboard behavior, and sheet patterns where they belong.',
            'visual' => 'touch',
        ],
        [
            'index' => '03',
            'id' => 'mob-device',
            'title' => 'Device capabilities',
            'body' => 'Camera, biometrics, notifications, location, files, share, deep links, and secure storage are chosen by product need — not forced into the experience.',
            'visual' => 'device',
        ],
        [
            'index' => '04',
            'id' => 'mob-offline',
            'title' => 'Offline + sync',
            'body' => 'The connection can disappear. The work should not. Offline-first apps keep a reliable local record until the network returns.',
            'visual' => 'offline',
        ],
        [
            'index' => '05',
            'id' => 'mob-lifecycle',
            'title' => 'Lifecycle + release',
            'body' => 'Install, open, background, resume, update, return — mobile app engineering includes the life of the product after launch.',
            'visual' => 'lifecycle',
        ],
    ];

    $continuity = [
        ['label' => 'Task open', 'detail' => 'The work is in hand'],
        ['label' => 'Interrupted', 'detail' => 'Notification, call, lock'],
        ['label' => 'Backgrounded', 'detail' => 'The app is no longer foreground'],
        ['label' => 'Returns', 'detail' => 'Attention comes back'],
        ['label' => 'Restored', 'detail' => 'The task is still here'],
    ];

    $perf = [
        ['title' => 'Startup', 'body' => 'Get to useful content quickly.'],
        ['title' => 'Interaction', 'body' => 'Touch should feel immediate.'],
        ['title' => 'Memory', 'body' => 'Use device resources carefully.'],
        ['title' => 'Network', 'body' => "Don't make every interaction depend on a connection."],
        ['title' => 'Battery', 'body' => 'Background work should have a reason.'],
    ];

    $a11y = [
        ['title' => 'Dynamic text', 'body' => 'Type scales with system settings.'],
        ['title' => 'Screen readers', 'body' => 'Labels and structure remain usable.'],
        ['title' => 'Contrast', 'body' => 'The interface stays perceivable.'],
        ['title' => 'Alternative input', 'body' => 'The platform already provides other ways to interact.'],
        ['title' => 'System settings', 'body' => 'Respect what the person has already chosen.'],
        ['title' => 'Touch alternatives', 'body' => 'Important actions are not pointer-only.'],
    ];

    $states = [
        'Ready',
        'Loading',
        'Empty',
        'Offline',
        'Permission denied',
        'Validation',
        'Error',
        'Success',
        'Interrupted',
        'Restored',
    ];

    $checks = [
        'Small phone',
        'Large phone',
        'Tablet',
        'Slow network',
        'Background/resume',
        'Keyboard visible',
        'Accessibility',
    ];

    $capabilities = [
        'Camera',
        'Biometrics',
        'Notifications',
        'Location',
        'Files',
        'Share',
        'Deep links',
        'Secure storage',
    ];

    $engage = [
        ['title' => 'Context', 'body' => 'Where and when is the app used?'],
        ['title' => 'Focus', 'body' => 'Which tasks belong in the mobile experience?'],
        ['title' => 'Design', 'body' => 'What should be native to each platform?'],
        ['title' => 'Build', 'body' => 'Implement the product and device behavior.'],
        ['title' => 'Validate', 'body' => 'Test on real devices and real conditions.'],
        ['title' => 'Release', 'body' => 'Prepare the app for its lifecycle after launch.'],
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Service',
                'name' => 'Mobile app development services',
                'serviceType' => 'Mobile app development',
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
                        'name' => 'Mobile Development',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <article class="mob-page" data-mob aria-labelledby="mob-heading">
        <header class="mob-hero">
            <div class="container-sky">
                <nav class="mob-crumb" aria-label="Breadcrumb">
                    <ol>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li>
                            <a href="{{ route('services') }}">Services</a>
                            <span aria-hidden="true">/</span>
                        </li>
                        <li aria-current="page">Mobile Development</li>
                    </ol>
                </nav>

                <div class="mob-hero-grid">
                    <div class="mob-hero-copy">
                        <p class="text-eyebrow">Mobile Development</p>
                        <h1 id="mob-heading" class="mob-title">
                            Software built for the moment it is used.
                        </h1>
                        <p class="text-body mob-support">
                            We design and engineer mobile applications around touch, device capabilities, connectivity, interruptions, and platform behavior—so the experience feels native instead of like a web layout inside a phone.
                        </p>
                        <div class="mob-hero-actions">
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

                    <figure class="mob-task" data-mob-reveal aria-label="One focused mobile task in the hand">
                        <div class="mob-task-bar">
                            <p class="mob-task-name">Today's work</p>
                            <p class="mob-muted">In hand</p>
                        </div>
                        <div class="mob-task-body">
                            <p class="mob-kicker">Order</p>
                            <p class="mob-task-title">#10482</p>
                            <p class="mob-muted">City Care Clinic</p>
                            <p class="mob-line">24 × Panadol 500mg</p>
                            <p class="mob-status">Reserved</p>
                            <p class="mob-primary-action">Continue</p>
                            <p class="mob-saved">Saved</p>
                            <ul class="mob-annotations" aria-hidden="true">
                                <li>Touch</li>
                                <li>State</li>
                                <li>Device</li>
                                <li>Connection</li>
                            </ul>
                        </div>
                    </figure>
                </div>
            </div>
        </header>

        <section class="mob-band" aria-labelledby="mob-problem-heading">
            <div class="container-sky">
                <h2 id="mob-problem-heading" class="text-h2 mob-measure">
                    A phone changes the conditions of the work.
                </h2>
                <ol class="mob-problems">
                    @foreach ($problems as $item)
                        <li>
                            <p class="mob-index">{{ $item['index'] }}</p>
                            <h3 class="mob-problem-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-when-heading">
            <div class="container-sky">
                <h2 id="mob-when-heading" class="text-h2 mob-measure">
                    Bring Mobile Development in when the work needs to leave the desktop.
                </h2>
                <ol class="mob-when">
                    @foreach ($when as $i => $line)
                        <li>
                            <span class="mob-index">{{ str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-body">{{ $line }}</span>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-place-heading">
            <div class="container-sky">
                <div class="mob-measure">
                    <h2 id="mob-place-heading" class="text-h2">Mobile is a product surface, not a smaller viewport.</h2>
                    <p class="text-body mob-lead">
                        Mobile application development treats the environment as part of the product. Cross-platform development can share product logic; it should still respect how each platform is actually used.
                    </p>
                </div>

                <div class="mob-anatomy">
                    @foreach ($activities as $item)
                        <article class="mob-beat" aria-labelledby="{{ $item['id'] }}">
                            <div class="mob-beat-copy">
                                <p class="mob-index">{{ $item['index'] }}</p>
                                <h3 id="{{ $item['id'] }}" class="text-h3">{{ $item['title'] }}</h3>
                                <p class="text-body">{{ $item['body'] }}</p>
                            </div>
                            <figure class="mob-panel" aria-hidden="true">
                                @if ($item['visual'] === 'platform')
                                    <p class="mob-kicker">Convention</p>
                                    <ul class="mob-list">
                                        <li class="is-current"><span>Back</span><span>System</span></li>
                                        <li><span>Action</span><span>Primary</span></li>
                                    </ul>
                                @elseif ($item['visual'] === 'touch')
                                    <p class="mob-kicker">Reach</p>
                                    <p class="mob-panel-title">Continue</p>
                                    <p class="mob-muted">Target sized for the thumb. Navigation stays at the edge people already use.</p>
                                @elseif ($item['visual'] === 'device')
                                    <p class="mob-kicker">When useful</p>
                                    <ul class="mob-chips">
                                        @foreach ($capabilities as $cap)
                                            <li>{{ $cap }}</li>
                                        @endforeach
                                    </ul>
                                @elseif ($item['visual'] === 'offline')
                                    <p class="mob-kicker">Work continues</p>
                                    <ol class="mob-steps">
                                        <li class="is-done">Connected</li>
                                        <li class="is-current">Queued</li>
                                        <li>Sync</li>
                                    </ol>
                                @else
                                    <p class="mob-kicker">After launch</p>
                                    <ol class="mob-steps">
                                        <li class="is-done">Open</li>
                                        <li class="is-current">Background</li>
                                        <li>Resume</li>
                                    </ol>
                                @endif
                            </figure>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-signature-heading">
            <div class="container-sky">
                <div class="mob-measure">
                    <h2 id="mob-signature-heading" class="text-h2">Design for the moment, not the screen.</h2>
                    <p class="text-body mob-lead">
                        Interruption, then continuity. The task is still there when attention returns.
                    </p>
                </div>
                <ol class="mob-signature" data-mob-signature aria-label="Interruption then continuity">
                    @foreach ($continuity as $step)
                        <li data-mob-step>
                            <p class="mob-step-label">{{ $step['label'] }}</p>
                            <p class="mob-muted">{{ $step['detail'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-aware-heading">
            <div class="container-sky">
                <div class="mob-measure">
                    <h2 id="mob-aware-heading" class="text-h2">One product. Platform-aware experiences.</h2>
                    <p class="text-body mob-lead">
                        Shared product logic does not require identical interfaces. Where the platform changes the expected interaction, navigation, or system behavior, the implementation should respect that difference.
                    </p>
                </div>
                <figure class="mob-platform" aria-label="Shared product expressed natively on each platform">
                    <p class="mob-kicker">Product intent</p>
                    <p class="mob-panel-title">Complete today's reserved order.</p>
                    <div class="mob-platform-split">
                        <div>
                            <p class="mob-mini">iOS</p>
                            <p class="mob-muted">Platform-native expression</p>
                        </div>
                        <div>
                            <p class="mob-mini">Android</p>
                            <p class="mob-muted">Platform-native expression</p>
                        </div>
                    </div>
                    <p class="mob-muted">Same product. Different expected behavior.</p>
                </figure>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-states-heading">
            <div class="container-sky">
                <div class="mob-measure">
                    <h2 id="mob-states-heading" class="text-h2">The app is more than its first screen.</h2>
                    <p class="text-body mob-lead">
                        Those states have to behave correctly through the mobile lifecycle — not only in the design file.
                    </p>
                </div>
                <ul class="mob-state-list">
                    @foreach ($states as $state)
                        <li>{{ $state }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-fast-heading">
            <div class="container-sky">
                <h2 id="mob-fast-heading" class="text-h2 mob-measure">Performance is felt in the hand.</h2>
                <ul class="mob-perf">
                    @foreach ($perf as $item)
                        <li>
                            <p class="mob-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-a11y-heading">
            <div class="container-sky">
                <h2 id="mob-a11y-heading" class="text-h2 mob-measure">
                    The platform already gives people ways to interact. Use them.
                </h2>
                <ul class="mob-a11y">
                    @foreach ($a11y as $item)
                        <li>
                            <p class="mob-survive-title">{{ $item['title'] }}</p>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-devices-heading">
            <div class="container-sky">
                <div class="mob-measure">
                    <h2 id="mob-devices-heading" class="text-h2">Design on devices, not just in a browser tab.</h2>
                    <p class="text-body mob-lead">
                        A mobile interface can look perfect at one size and fail on another. Validation needs representative devices, different screen sizes, operating-system behavior, input methods, and the conditions people actually encounter.
                    </p>
                </div>
                <figure class="mob-check" aria-label="Representative device conditions to validate">
                    <p class="mob-kicker">Device check</p>
                    <ul class="mob-check-list">
                        @foreach ($checks as $item)
                            <li><span>{{ $item }}</span><span>Checked</span></li>
                        @endforeach
                    </ul>
                </figure>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-rep-heading">
            <div class="container-sky">
                <p class="text-eyebrow">Representative mobile experience</p>
                <div class="mob-rep-grid">
                    <div class="mob-rep-copy">
                        <h2 id="mob-rep-heading" class="text-h2">One task, designed for the hand.</h2>
                        <p class="text-body">
                            Complete, interrupted, restored, synced — the same focused workflow, with the conditions of use still attached.
                        </p>
                        <p class="mob-disclosure">Representative mobile interface — not a published client engagement.</p>
                    </div>
                    <figure class="mob-task mob-task-deep" data-mob-offline aria-label="Representative mobile interface">
                        <div class="mob-task-bar">
                            <p class="mob-task-name">Representative mobile interface</p>
                            <p class="mob-muted" data-mob-conn>Queued</p>
                        </div>
                        <div class="mob-task-body">
                            <p class="mob-kicker">Order #10482</p>
                            <p class="mob-task-title">City Care Clinic</p>
                            <p class="mob-line">Complete → Interrupted → Restored</p>
                            <p class="mob-primary-action" data-mob-sync>Waiting to sync</p>
                        </div>
                    </figure>
                </div>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-ux-heading">
            <div class="container-sky mob-measure">
                <h2 id="mob-ux-heading" class="text-h2">The interaction model comes before the platform code.</h2>
                <p class="text-body mob-lead">
                    Mobile engineering works best when navigation, states, touch behavior, and content hierarchy have already been made explicit.
                </p>
                <a class="solutions-cta" href="{{ route('services.ui-ux-design') }}">
                    See UI/UX Design
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-pe-heading">
            <div class="container-sky mob-measure">
                <h2 id="mob-pe-heading" class="text-h2">Mobile is part of the product, not a separate island.</h2>
                <p class="text-body mob-lead">
                    When the mobile experience shares domain logic, accounts, workflows, or data with a larger product, it should evolve as part of that system.
                </p>
                <a class="solutions-cta" href="{{ route('services.product-engineering') }}">
                    See Product Engineering
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-web-heading">
            <div class="container-sky mob-measure">
                <h2 id="mob-web-heading" class="text-h2">Sometimes mobile complements the web. Sometimes it replaces it.</h2>
                <p class="text-body mob-lead">
                    The right surface depends on the task. Some experiences belong primarily in a browser. Others benefit from a focused mobile workflow.
                </p>
                <a class="solutions-cta" href="{{ route('services.web-development') }}">
                    See Web Development
                    <span class="solutions-arrow" aria-hidden="true">→</span>
                </a>
            </div>
        </section>

        <section class="mob-band mob-band-tight" aria-labelledby="mob-honest-heading">
            <div class="container-sky mob-measure">
                <h2 id="mob-honest-heading" class="text-h2">Sometimes an app isn't the right answer.</h2>
                <p class="text-body">
                    If the task is occasional, content-heavy, or already well served by the web, adding an app can create another surface to maintain without creating enough value.
                </p>
            </div>
        </section>

        <section class="mob-band" aria-labelledby="mob-engage-heading">
            <div class="container-sky">
                <h2 id="mob-engage-heading" class="text-h2 mob-measure">Start with the moment of use.</h2>
                <ol class="mob-engage">
                    @foreach ($engage as $item)
                        <li>
                            <h3 class="mob-survive-title">{{ $item['title'] }}</h3>
                            <p class="text-body">{{ $item['body'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </section>

        <section class="mob-close" aria-labelledby="mob-cta-heading">
            <div class="container-sky mob-close-band">
                <div>
                    <h2 id="mob-cta-heading" class="text-h2">Have a task that belongs in the hand?</h2>
                    <p class="text-body mob-close-copy">
                        Tell us where people need to use the product, what they need to accomplish, and what gets in the way today.
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
