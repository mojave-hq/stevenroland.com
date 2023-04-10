---
title: Posts
description: From inspiration to implementation, I write about web development, design, and more.
pagination:
    collection: content
    perPage: 15
---

@extends('_layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $page->title }}</h2>
        @if ($page->description)
            <p class="mt-2 text-lg leading-8 text-gray-600">{{ $page->description }}</p>
        @endif
    </div>

    @include('_partials.posts', ['posts' => $pagination->items])
@endsection
