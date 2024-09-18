<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('employee.login') }}" method="POST">
        @csrf
        <input type="text" name="email" value="admin@mail.com">
        <input type="password" name="password" value="password">
        <button type="submit">submit</button>
    </form>
</body>

</html>
