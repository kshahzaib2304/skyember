{{--
    Page 1 - Contact. The homepage close continues here.
    The brief is prepared in the visitor's own email. Nothing is stored.
--}}
@extends('layouts.app')

@php
    $title = 'SKYEMBER - Contact';
    $description = 'Send SKYEMBER a short brief about the software you need, or write to '.$email.'. We read it and reply with a clear next step.';
    $canonical = route('contact');
    $ready = session('contact.ready') === true
        && is_string(session('contact.mailto'))
        && is_string(session('contact.preview'));
    $errorAnchors = [
        'name' => '#name',
        'email' => '#email',
        'organization' => '#organization',
        'kind' => '#kind-business',
        'problem' => '#problem',
    ];
@endphp

@push('schema')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'ContactPage',
                'name' => 'Contact SKYEMBER',
                'url' => $canonical,
                'description' => $description,
                'mainEntity' => [
                    '@type' => 'Organization',
                    'name' => 'SKYEMBER',
                    'url' => url('/'),
                    'email' => $email,
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
                        'name' => 'Contact',
                        'item' => $canonical,
                    ],
                ],
            ],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    <section class="contact-page" aria-labelledby="contact-heading">
        <div class="container-sky contact-grid">
            <nav class="contact-crumb" aria-label="Breadcrumb">
                <ol>
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                        <span aria-hidden="true">/</span>
                    </li>
                    <li aria-current="page">Contact</li>
                </ol>
            </nav>

            <h1 id="contact-heading" class="contact-title">
                <span>Tell us what</span>
                <span>you're trying</span>
                <span>to solve.</span>
            </h1>

            <p class="text-body contact-summary">
                A short brief is enough. We read it and reply with the next step.
            </p>

            <div class="contact-direct">
                <p class="text-eyebrow">Direct</p>
                <a class="contact-mail" href="mailto:{{ $email }}">{{ $email }}</a>
                <p class="text-small contact-direct-note">Write directly if you already know what to say.</p>
            </div>

            <form
                id="brief"
                class="contact-form"
                method="post"
                action="{{ route('contact.prepare') }}"
                accept-charset="UTF-8"
                novalidate
                aria-labelledby="contact-heading"
            >
                @csrf

                <div class="contact-trap" aria-hidden="true">
                    <label for="company-website">Company website</label>
                    <input id="company-website" type="text" name="company_website" tabindex="-1" autocomplete="off" value="">
                </div>

                @if ($ready)
                    <div class="contact-letter" id="brief-status" role="status">
                        <p class="text-eyebrow">Ready to send</p>
                        <p class="contact-letter-to">To {{ $email }}</p>
                        <pre class="contact-letter-body">{{ session('contact.preview') }}</pre>
                        <a class="btn btn-primary contact-send" href="{{ session('contact.mailto') }}">Open email to send</a>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="contact-errors" id="brief-errors" role="alert" tabindex="-1">
                        <p class="contact-errors-title">The brief needs a few fixes.</p>
                        <ul>
                            @foreach ($errors->messages() as $field => $messages)
                                @foreach ($messages as $message)
                                    <li>
                                        <a href="{{ $errorAnchors[$field] ?? '#brief' }}">{{ $message }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="contact-field {{ $errors->has('name') ? 'is-invalid' : '' }}">
                    <label for="name">Name</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        value="{{ old('name') }}"
                        autocomplete="name"
                        maxlength="120"
                        required
                        spellcheck="false"
                        @if ($errors->has('name')) aria-invalid="true" aria-describedby="name-error" @endif
                    >
                    @error('name')
                        <p class="contact-error" id="name-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="contact-field {{ $errors->has('email') ? 'is-invalid' : '' }}">
                    <label for="email">Work email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        value="{{ old('email') }}"
                        autocomplete="email"
                        inputmode="email"
                        autocapitalize="none"
                        maxlength="160"
                        required
                        spellcheck="false"
                        @if ($errors->has('email')) aria-invalid="true" aria-describedby="email-error" @endif
                    >
                    @error('email')
                        <p class="contact-error" id="email-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="contact-field {{ $errors->has('organization') ? 'is-invalid' : '' }}">
                    <label for="organization">Organization</label>
                    <input
                        id="organization"
                        name="organization"
                        type="text"
                        value="{{ old('organization') }}"
                        autocomplete="organization"
                        maxlength="160"
                        required
                        spellcheck="false"
                        @if ($errors->has('organization')) aria-invalid="true" aria-describedby="organization-error" @endif
                    >
                    @error('organization')
                        <p class="contact-error" id="organization-error">{{ $message }}</p>
                    @enderror
                </div>

                <fieldset class="contact-kinds" @if ($errors->has('kind')) aria-invalid="true" aria-describedby="kind-error" @endif>
                    <legend>
                        What kind of system
                        <span class="contact-optional">Optional</span>
                    </legend>
                    @foreach ($kinds as $value => $label)
                        <label class="contact-choice" for="kind-{{ $value }}">
                            <input
                                id="kind-{{ $value }}"
                                type="radio"
                                name="kind"
                                value="{{ $value }}"
                                @checked(old('kind') === $value)
                            >
                            <span>{{ $label }}</span>
                        </label>
                    @endforeach
                    @error('kind')
                        <p class="contact-error" id="kind-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="contact-field {{ $errors->has('problem') ? 'is-invalid' : '' }}">
                    <label for="problem">The problem</label>
                    <textarea
                        id="problem"
                        name="problem"
                        rows="6"
                        maxlength="1200"
                        required
                        spellcheck="true"
                        aria-describedby="problem-hint{{ $errors->has('problem') ? ' problem-error' : '' }}"
                        @if ($errors->has('problem')) aria-invalid="true" @endif
                    >{{ old('problem') }}</textarea>
                    <p class="contact-hint" id="problem-hint">A few sentences about the operation, the product, or the constraint.</p>
                    @error('problem')
                        <p class="contact-error" id="problem-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="contact-actions">
                    <button type="submit" class="btn {{ $ready ? 'btn-secondary' : 'btn-primary' }}">
                        {{ $ready ? 'Update the brief' : 'Continue in email' }}
                    </button>
                </div>

                <p class="contact-note">
                    You will get the finished brief in your email, addressed to {{ $email }}. Nothing is sent until you send it there.
                </p>
            </form>
        </div>
    </section>
@endsection
