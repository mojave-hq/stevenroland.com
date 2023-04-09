@extends('_layouts.main')

@section('body')
<div class="p-8">
    <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
</div>
@endsection
