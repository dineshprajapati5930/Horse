<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
<!-- <header class="container-fluid bg-success row ">
            <div class="col-md-4 ">Horse</div>
            <div class="col-md-4">Horse</div>
            <div class="col-md-4">Horse</div>
</header> -->

    <table border="1" align="center" style="text-align:center;">
        <tr>
            <th>no</th>
            <th>name</th>
            <th>email</th>
        </tr>
       
        <tr>
            <td>{{Auth::user()->id}}</td>
            <td> {{Auth::user()->name;}}
            </td>
            <td><?php echo $user = Auth::user()->email;?></td>
        </tr>
    </table>
    <a href="profile">view </a>
</body>
</html>