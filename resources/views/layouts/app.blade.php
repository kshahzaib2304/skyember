<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F7F9FC">

    <x-seo
        :title="$title ?? 'SKYEMBER - Software that moves business forward'"
        :description="$description ?? 'We design and engineer custom software, business platforms, and digital products for organizations ready to move beyond off-the-shelf tools.'"
        :canonical="$canonical ?? null"
        :image="$image ?? null"
        :type="$type ?? 'website'"
        :robots="$robots ?? null"
    />

    @stack('schema')

    <link rel="icon" href="{{ asset('images/brand/mark.png') }}" type="image/png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-background text-foreground">
    <a href="#main" class="skip-link">Skip to content</a>

    <x-navbar />

    <main id="main">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
