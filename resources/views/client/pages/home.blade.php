@extends('client.layout.master')
@section('content')
<div>
    <h1>home page</h1>
    @if (auth()->user())

    {{ auth()->user()->serviceProvider->first()->token }}
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>

    @if (auth()->user()->serviceProvider->first()->token)

    @endif
    @endif

</div>
@endsection
