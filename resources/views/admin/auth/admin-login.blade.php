<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/loginPage.css') }}">
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>
        <form id="loginForm" action="{{ route('admin.login') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="email" placeholder="" value="admin@mail.com">
                <span class="error-message" id="username-error"></span>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" value="password">
                <span class="error-message" id="password-error"></span>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        function validateForm() {
            let valid = true;

            // Reset error messages and input shadows
            document.getElementById('username-error').innerText = '';
            document.getElementById('password-error').innerText = '';
            document.getElementById('username').style.boxShadow = '';
            document.getElementById('password').style.boxShadow = '';

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();

            // Username validation
            if (username === '') {
                document.getElementById('username-error').innerText = 'Username is required';
                document.getElementById('username').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            }

            // Password validation
            if (password === '') {
                document.getElementById('password-error').innerText = 'Password is required';
                document.getElementById('password').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            }

            return valid; // Return true if the form is valid, false if there are errors
        }
    </script>
</body>

</html>
