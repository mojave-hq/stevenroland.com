---
pagination:
    collection: content
    perPage: 5
---

@extends('_layouts.main')

@section('content')
    <x-hero />

    <div class="flow-root">
        @include('_partials.posts', ['posts' => $pagination->items])
    </div>
@endsection
