@props([
    'title' => 'SKYEMBER - Software that moves business forward',
    'description' => 'We design and engineer custom software, business platforms, and digital products for organizations ready to move beyond off-the-shelf tools.',
    'canonical' => null,
    'image' => null,
    'type' => 'website',
    'robots' => null,
])

@php
    $canonicalUrl = $canonical ?? url()->current();
    $imageUrl = $image ?? asset('images/brand/mark-320.png');
    $siteName = config('app.name', 'SKYEMBER');
@endphp

<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">
@if ($robots)
    <meta name="robots" content="{{ $robots }}">
@endif
<link rel="canonical" href="{{ $canonicalUrl }}">

<meta property="og:type" content="{{ $type }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonicalUrl }}">
<meta property="og:image" content="{{ $imageUrl }}">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $imageUrl }}">

<script type="application/ld+json">
{!! json_encode([
    '@'.'context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'SKYEMBER',
    'url' => url('/'),
    'logo' => asset('images/brand/mark.png'),
    'description' => 'We design and engineer custom software, business platforms, and digital products for organizations ready to move beyond off-the-shelf tools.',
    'email' => 'info@skyember.com',
    'slogan' => 'Software solutions for a smarter tomorrow',
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'contactType' => 'business inquiries',
        'email' => 'info@skyember.com',
        'url' => url('/contact'),
        'availableLanguage' => 'English',
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
