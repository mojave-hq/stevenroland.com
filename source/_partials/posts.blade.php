<div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto">
        <div class="pt-10 mt-10 space-y-16 sm:mt-16 sm:pt-16">
            @foreach ($posts as $post)           
                @includeIf("_partials.post.{$post->type}", ['post' => $post])
            @endforeach
        </div>
    </div>
</div>
