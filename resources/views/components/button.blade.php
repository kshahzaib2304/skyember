@props([
    'href' => null,
    'variant' => 'primary',
    'type' => 'button',
])

@php
    $variants = [
        'primary' => 'btn btn-primary',
        'secondary' => 'btn btn-secondary',
        'ghost' => 'btn btn-ghost',
        'on-dark' => 'btn btn-on-dark',
        'secondary-on-dark' => 'btn btn-secondary-on-dark',
    ];
    $classes = ($variants[$variant] ?? $variants['primary']) . ' ' . ($attributes->get('class') ?? '');
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->except('class')->merge(['class' => trim($classes)]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->except('class')->merge(['class' => trim($classes)]) }}>
        {{ $slot }}
    </button>
@endif
