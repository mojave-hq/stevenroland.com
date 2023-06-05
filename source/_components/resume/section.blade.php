@props([
    'title'
])

<section>
    @isset($title)
        <div class="relative flex items-center mb-6">
            <div class="top-0 pr-4 lg:absolute -left-14">
                <div class="p-2 transition duration-700 ease-in-out bg-white rounded-full shadow-lg">
                    <x-icon svg="dot" class="w-5 h-5 transition duration-700 ease-in-out fill-current text-primary-500" />
                </div>
            </div>
        
            <p class="text-3xl font-medium text-gray-800 transition duration-700 ease-in-out">
                {{ $title }}
            </p>
        </div>
    @endisset

    <div class="space-y-9">
        {{ $slot }}
    </div>
</section>