<div class="flex">
    <div class="flex-shrink-0 mr-4">
        <x-icon svg="box.quote-alt-right" class="w-10 h-10" />

        <div class="absolute z-10">
            <x-badge>
                <x-icon svg="box.purchase-tag-alt" class="w-6 h-6" />

                <x-slot name="content">
                    @foreach ($post->tags as $tag)
                        {{ $tag }}
                    @endforeach
                </x-slot>
            </x-badge>
        </div>
    </div>
    <article class="flex flex-col items-start justify-between max-w-xl">
        <div class="relative group">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                {!! $post->getContent() !!}
            </h3>
        </div>
        <div class="relative flex items-center mt-4 gap-x-4">
            <div class="text-sm leading-6">
                <p class="font-semibold text-gray-900">
                    &mdash;
                    {{ $post->author }}
                </p>
            </div>
        </div>
    </article>
</div>