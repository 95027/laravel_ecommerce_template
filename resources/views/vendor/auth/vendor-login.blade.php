<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vendor Login</title>
</head>

<body>
    <h1>Vendor Login Form</h1>

    <form action="{{route('vendor.login')}}" method="POST">
        @csrf
        <!-- Email Field -->
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <!-- Password Field -->
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <!-- Remember Me Checkbox -->
        <div>
            <input type="checkbox" id="remember" name="remember">
            <label for="remember">Remember Me</label>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>

</html>
