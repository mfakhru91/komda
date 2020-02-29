<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/profil.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/jqueryUi/jquery-ui.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="jumbotron">
        <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <i>*Bergabung {{ Auth::user()->created_at }}</i>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a href="index/academy" class="nav-link ">DAFTAR KELAS </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link active">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">LEARNING ROOM </a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <div class="text-center">
            <img src="{{ asset('/image/user orange.png')}}" alt="" style="height:100px">
            <h1>{{ Auth::user()->name }}</h1>
            <a href="/edit" class="btn btn-secondary btn-sm">edit profil</a>
        </div>
    </div>
    <div class="container">
        <div class="container-fluid">
            @if(session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
            @endif
            <p>EMAIL :  {{ Auth::user()->email }}</p>
            <p>NO TELP : {{ Auth::user()->no_tlp }} </p>
            <p>ALAMAT : {{ Auth::user()->alamat}}</p>
        </div>
    </div>
<script>
document.getElementById("p2").style.width = "50%";
</script>
</body>
</html>