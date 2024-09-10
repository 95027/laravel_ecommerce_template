@extends('client.layout.master')
@section('content')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Email Password Reset Link</button>
        </div>
    </form>
@endsection
