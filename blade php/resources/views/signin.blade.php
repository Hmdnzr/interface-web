<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
</head>

<body class="row">
    
    <div class="col-4"></div>
    <div class="col-4 container-fluid p-4 bg-secondary" style="text-align:center;margin-top: 200px; text-align:center;">
    <p>Sign In<p>
    <form action="/registrasi" method="POST" name="pengunjung" id="pengunjung">
    {{csrf_field()}}
        <table style="margin-left:75px;">
              <tr><td>User Name</td><td><input type=text name="username"> </td></tr>
              <tr><td>Password</td><td><input type=text name="password"> </td></tr>
        </table>               
          
        <input type="submit" class="btn btn-success danger" id="submit" value="Sign In" style="margin-left: 200px;">

    </form>
    <br>
    

</div>
    <div class="col-4"></div>
</body>
</html>
