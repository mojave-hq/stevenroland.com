---
pagination:
    collection: posts
    perPage: 5
---

@extends('_layouts.main')

@section('body')
    @include('_partials.hero')

    <div class="flow-root">
        @include('_partials.posts', ['posts' => $pagination->items])
    </div>
@endsection
