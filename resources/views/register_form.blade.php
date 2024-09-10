<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register_form" method="post" style="border:1px solid black; margin:auto; width:20%; text-align:center;">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>name</div>
        <div><input type="text" name="name"></div>

        <div>email</div>
        <div><input type="email" name="email"></div>

        <div>password</div>
        <div><input type="password" name="password"></div>

        <div>Role</div>
        <div><input type="text" name="role"></div>

        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>
</html>