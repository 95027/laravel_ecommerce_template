@extends('admin.layout.master')
@section('content')
    <h1>Admin Dashboard</h1>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
@endsection
