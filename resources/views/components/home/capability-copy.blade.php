@props(['capability'])

<div>
    <p class="font-display text-[0.8125rem] font-semibold tracking-[0.18em] text-primary-deep">
        {{ $capability['index'] }}
    </p>
    <h3 id="{{ $capability['id'] }}" class="text-h3 mt-3 text-pretty text-foreground">
        {{ $capability['title'] }}
    </h3>
    <div class="mt-4 h-px w-full bg-border" aria-hidden="true"></div>
    <p class="text-body mt-4 text-pretty">
        {{ $capability['summary'] }}
    </p>
    <ul class="mt-5 flex flex-wrap items-center gap-x-2 gap-y-1 text-sm text-muted">
        @foreach ($capability['terms'] as $term)
            <li>{{ $term }}</li>
            @if (! $loop->last)
                <li class="text-muted" aria-hidden="true">·</li>
            @endif
        @endforeach
    </ul>
</div>
