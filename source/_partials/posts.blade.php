<div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto">
        <div class="pt-10 mt-10 space-y-16 sm:mt-16 sm:pt-16">
            @foreach ($posts->where('featured', true) as $featuredPost)
                <div class="overflow-hidden bg-gray-200 rounded-lg">
                    <div class="flex items-center p-2 text-gray-500">
                        <x-icon svg="box.pin" class="w-5 h-5" />
                        <span class="ml-1 text-xs font-semibold uppercase">Pinned</span>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        @includeIf("_partials.post.{$featuredPost->type}", ['post' => $featuredPost])
                    </div>
                </div>
            @endforeach

            @foreach ($posts->where('featured', false) as $post)
                @includeIf("_partials.post.{$post->type}", ['post' => $post])
            @endforeach
        </div>
    </div>
</div>
