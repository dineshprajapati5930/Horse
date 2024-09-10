<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>


<form action="login" mthod="post" style="border:1px solid black; margin:auto; width:20%; text-align:center;">
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
        
    <div>Email</div>
    <div>
        <input type="email" name="email" placeholder="Enter email">
    </div>

    <div>password</div>
    <div>
    <input type="password" name="password" placeholder="Enter password">
    </div>

    <div>
        <input type="submit" name="submit" value="submit">
    </div>
</form>
</body>

</html>