@extends('vendor.layout.master')
@section('content')
    <div>
        <h1>vendor dashboard</h1>
            <form action="{{ route('vendor.logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
    </div>
@endsection
