@props([
    'icon',
    'label',
    'href',
])

<div class="flex items-center">
    @isset ($icon)
        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full">
            <x-icon :svg="$icon" class="w-5 h-5 text-gray-600 rounded-full fill-current" />
        </span>
    @endisset

    <div class="flex flex-col justify-center ml-4">
        @isset($label)
            <span class="text-sm font-medium text-gray-600">
                {{ $label }}
            </span>
        @endisset

        @isset ($href)
            <a
                href="{{ $href }}"
                target="_blank"
                class="text-xl font-medium text-gray-700 transition duration-200 ease-in-out hover:text-primary-400">
                {{ $slot }}
            </a>
        @else
            <p class="text-xl font-medium text-gray-700">
                {{ $slot }}
            </p>
        @endisset
    </div>
</div>