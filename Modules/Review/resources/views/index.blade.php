@extends('admin.layout.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('review.name') !!}</p>
@endsection
