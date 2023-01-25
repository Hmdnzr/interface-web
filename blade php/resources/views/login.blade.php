<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/asset/Asset/media/Logo-UHAMKA-Hanya-Logo-Utama.png" type="#">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Login</title>
    
</head>

<body class="row" style="background-image: url(https://www.psdgraphics.com/wp-content/uploads/2019/04/blue-light-flare.jpg); background-size: cover; background-position: center; height: 100vh; color: ;">
   
   <div class="col-12"><h1 class="text-white text-center" style="background: rgb(49, 47, 47)"> Silahkan Login</h1> 
    <div class="col-4"></div>
    <div class="col-8 container-fluid p-4 bg-transparent rounded-3" style="text-align:center;margin-top: 200px; height: 270px; text-align:center;">
        <p class="text-dark fw-bold bg-primary " style="font-size: 3vh">Log In<p>
        <form action="/login" method="POST" name="pengunjung" id="pengunjung" >
        {{csrf_field()}}
            <table style="display: flex; justify-content: center" >
                <tr><td></td><td><input type=text name="username" value="username" class="text-primary"> </td></tr>
                <tr><td></td><td><input type=password name="password" value="Password"> </td></tr>
            </table>      
            <p>
                @if ($message = Session::get('error'))
                {{ $message }}
                @endif
                @if ($message = Session::get('success'))
                {{ $message }}
                @endif
            </p>
            <input type="submit" class="btn btn-success danger" id="submit" value="submit" style="margin-left: 1vh;">
        </form>
        <br>
        <div class="container">
        <div class="col " >
        <p class="bg-transparent">Belum Daftar? Silahkan <a class="text-light" href="/signin">Sign In</a></p>
    </div>
</div>
    </div>
</div>
    <div class="col-4"></div>
</body>
</html>
