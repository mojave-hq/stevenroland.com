<nav  {{ $attributes->merge(['class' => 'flex my-8 text-base']) }}>
    @if ($previous = $pagination->previous)
        <a
            href="{{ $previous }}"
            title="Previous Page"
            class="px-5 py-3 mr-3 text-gray-900 transition-all duration-500 bg-gray-200 rounded backdrop-blur-sm hover:bg-black hover:text-white"
        >&LeftArrow;</a>
    @endif

    @foreach ($pagination->pages as $pageNumber => $path)
        <a
            href="{{ $path }}"
            title="Go to Page {{ $pageNumber }}"
            class="bg-gray-200 text-gray-900 backdrop-blur-sm hover:bg-black transition-all duration-500 hover:text-white rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
        >{{ $pageNumber }}</a>
    @endforeach

    @if ($next = $pagination->next)
        <a
            href="{{ $next }}"
            title="Next Page"
            class="px-5 py-3 mr-3 text-gray-900 transition-all duration-500 bg-gray-200 rounded backdrop-blur-sm hover:bg-black hover:text-white"
        >&RightArrow;</a>
    @endif
</nav>