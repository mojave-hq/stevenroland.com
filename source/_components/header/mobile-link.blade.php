@props([
    'value',
])

<a {{ $attributes->only(['href', 'title']) }} class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-gray-50">
    {{ $value ?? $slot }}
</a>
