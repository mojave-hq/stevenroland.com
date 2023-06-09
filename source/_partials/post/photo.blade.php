<div class="flex">
    <div class="flex-shrink-0 mr-4 space-y-2">
        <x-icon svg="box.camera" class="w-10 h-10" />

        @if ($post->tags)
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
        @endif
    </div>
    <article class="flex flex-col items-start justify-between max-w-xl">
        <div class="relative group">
            <img src="{{ $post->cover_image }}" alt="{{ $post->title }}" class="object-cover rounded-md bg-gray-50 aspect-video">
            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Read more - {{ $post->title }}">
                    {{ $post->title }}
                </a>
            </h3>
            <p class="mt-2 text-sm leading-6 text-gray-600 line-clamp-3">
                {!! $post->getExcerpt(200) !!}
            </p>
        </div>
    </article>
</div>