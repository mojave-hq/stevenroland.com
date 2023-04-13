@extends('_layouts.main')

@section('body')
    <div class="max-w-2xl mx-auto">
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $page->title }}</h1>
    </div>

    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image">
    @endif

    <div class="max-w-2xl mx-auto mt-10">
        <div class="prose">
            @yield('content')
        </div>
    </div>
@endsection
