@props([
    'post'
])

<article class="flex flex-col items-start justify-between max-w-xl">
    <div class="relative group">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
            {!! $post->getContent() !!}
        </h3>
    </div>
    <div class="relative flex items-center mt-4 gap-x-4">
        <x-icon svg="user-card-point-up" class="w-10 h-10" />
        <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
                {{ $post->author }}
            </p>
        </div>
    </div>
</article>