@extends('client.layout.master')
@section('content')
<div>
    <h1>home page</h1>
    @if (auth()->user())

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>

    @endif

</div>
@endsection
