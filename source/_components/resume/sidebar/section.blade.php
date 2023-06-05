@props([
    'title'
])

<div {{ $attributes }}>
    <p class="text-xl font-medium text-gray-700 transition duration-700 ease-in-out">
        {{ $title }}
    </p>

    <div class="mt-6 space-y-6">
        {{ $slot }}
    </div>
</div>