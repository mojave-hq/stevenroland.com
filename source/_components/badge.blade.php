@props([
    'content'
])

<span class="inline-flex items-center p-2 text-white transition-all duration-500 rounded-full backdrop-blur-sm bg-primary-500/70 group focus:ring-2 focus:ring-primary-400 focus:ring-offset-2 focus:outline-none">
    {{ $slot }}
  
    @if ($content)
        <span class="inline-block overflow-hidden transition-all duration-500 whitespace-nowrap group-hover:max-w-screen-2xl group-focus:max-w-screen-2xl max-w-0 scale-80 group-hover:scale-100 group-hover:px-2 group-focus:px-2">
            {{ $content }}
        </span>
    @endif
</span>