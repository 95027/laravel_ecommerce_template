@extends('client.layout.master')
@section('content')
    <div>
        <h1>home page</h1>
        @if (auth()->user())
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        @endif

        <form action="{{ route('stripe.payment') }}" method="POST">
            @csrf
            <button type="submit">pay now</button>
        </form>
        <form action="{{ route('stripe.refund') }}" method="POST">
            @csrf
            <button type="submit">refund now</button>
        </form>
        <h1 class="text-3xl text-red-500 font-bold underline">
            Hello world!
          </h1>
    </div>
@endsection
