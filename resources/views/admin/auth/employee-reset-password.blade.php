<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset password | Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('assets/admin/css/loginPage.css') }}">
</head>

<body>
    <div class="login-container-2">
        <h1 class="reset-heading">Reset Password</h1>
        <form id="loginForm" action="{{ route('employee.update-password') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <input type="hidden" name="token" value="{{ request()->query('token') }}"/>
            <input type="hidden" name="email" value="{{ request()->query('email') }}"/>
            <div class="input-group">
                <label for="oldpassword">Old Password</label>
                <input type="password" id="oldpassword" name="OldPassword">
                <span class="error-message" id="oldpassword-error"></span>
            </div>
            <div class="input-group">
                <label for="password">New Password</label>
                <input type="password" id="password" name="password">
                <span class="error-message" id="password-error"></span>
            </div>
            <div class="input-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" id="confirmpassword" name="confirmPassword">
                <span class="error-message" id="confirmpassword-error"></span>
            </div>
            <button type="submit">Update</button>
        </form>
    </div>

    <script>
        function validateForm() {
            let valid = true;

            // Reset error messages and input shadows
            document.getElementById('oldpassword-error').innerText = '';
            document.getElementById('password-error').innerText = '';
            document.getElementById('confirmpassword-error').innerText = '';

            const oldPassword = document.getElementById('oldpassword').value.trim();
            const newPassword = document.getElementById('password').value.trim();
            const confirmPassword = document.getElementById('confirmpassword').value.trim();

            // Old Password validation
            if (oldPassword === '') {
                document.getElementById('oldpassword-error').innerText = 'Old password is required';
                document.getElementById('oldpassword').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            }

            // New Password validation
            if (newPassword === '') {
                document.getElementById('password-error').innerText = 'New password is required';
                document.getElementById('password').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            } else if (newPassword.length < 8) {
                document.getElementById('password-error').innerText = 'Password must be at least 8 characters long';
                document.getElementById('password').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            }

            // Confirm Password validation
            if (confirmPassword === '') {
                document.getElementById('confirmpassword-error').innerText = 'Confirm password is required';
                document.getElementById('confirmpassword').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            } else if (newPassword !== confirmPassword) {
                document.getElementById('confirmpassword-error').innerText = 'Passwords do not match';
                document.getElementById('confirmpassword').style.boxShadow = '3px 3px 0 #ff0606';
                valid = false;
            }

            return valid;
        }
    </script>
</body>

</html>
