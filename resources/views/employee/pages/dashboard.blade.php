@extends('employee.layout.master')

@section('content')
    <h1>roles based dashboard</h1>
    <form action="{{ route('employee.logout') }}" method="POST">
        @csrf
        <button type="submit">logout</button>
    </form>
@endsection
