@props([
    'value',
])

<a {{ $attributes->only(['href', 'title']) }} class="text-sm font-semibold leading-6 text-gray-900">
    {{ $value ?? $slot }}
</a>
