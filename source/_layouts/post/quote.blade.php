@extends('_layouts.main')

@section('body')
    <div class="max-w-2xl mx-auto">
        <figure>
            <blockquote class="font-semibold tracking-tight text-gray-900 text-7xl">
                @yield('content')
            </blockquote>
            <figcaption class="flex mt-2 gap-x-4">
                <x-icon svg="user-card-point-up" class="w-8 h-8" />
                <div class="text-sm leading-6">
                    <div class="font-semibold text-gray-900">{{ $page->author }}</div>
                    {{-- <div class="text-gray-600">@brenna</div> --}}
                </div>
            </figcaption>
        </figure>
    </div>
@endsection
