<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('bootstrap-css/css/bootstrap.css')}}">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
</head>
<body>
    <div class="container" style="width: 100%; height: 100%; ">
        <div class="card-container" style="display: flex; justify-content: center; align-items: center; margin-top: 5%;">
            <div class="card" style="width: 70%; ">
                <div class="card-body" >
                    <h1 style="text-align:center">
                        Login
                    </h1>
                    <h5 style="text-align:center">
                        Selamat Datang Kembali di Masjid Lorem ipsum dolor sit amet.
                    </h5>
                    <div class="form-div px-5 mt-5" >
                        <form action="{{route('registrasi.submit')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Contoh : Fulan">
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contoh : Fulan123">
                            </div>
                            <button type="submit" class="btn btn-success mt-3" style="width: 100%">
                                Registrasi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</body>
</html>