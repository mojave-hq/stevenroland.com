@extends('_layouts.main')

@section('body')
    <figure class="mt-16">
        <img class="object-cover aspect-video rounded-xl bg-gray-50" src="{{ $page->cover_image }}" alt="{{ $page->title }} by {{ $page->author }}">
        <figcaption class="flex mt-4 text-sm leading-6 gap-x-2">
            <div class="flex items-center">
                <x-icon svg="box.info-circle" class="mt-0.5 h-5 w-5 flex-none mr-2" />
                <span>
                    {{ $page->title }}
                </span>
            </div>
        </figcaption>
    </figure>
    <div class="mt-16 prose">
        @yield('content')
    </div>
@endsection