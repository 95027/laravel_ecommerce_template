@extends('employee.layout.master')

@section('content')
    <h1>roles based dashboard</h1>
    <p>{{auth()->user()->name}}</p>
    <form action="{{ route('employee.logout') }}" method="POST">
        @csrf
        <button type="submit">logout</button>
    </form>
@endsection
