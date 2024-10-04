@extends('admin.layout.master')

@section('content')
    <h1>roles based dashboard</h1>
    <div>
        {{ auth()->user()->name}}
    </div>
@endsection
