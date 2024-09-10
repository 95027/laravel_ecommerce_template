@extends('client.layout.master')
@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>

        <div class="form-group">
            <button type="submit">Login</button>
        </div>

        <div class="form-group">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>
    </form>
@endsection
