<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Kelas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/daftarkelas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/jqueryUi/jquery-ui.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    @auth
            <nav class="navbar navbar-expand-lg navbar-dark bg-orange ">
                <a class="navbar-brand" href="/index">
                    <img src="{{ asset('/image/LOGO_KOMDA.PNG') }}" alt="" style="height:30px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a href="/daftarkelas" class="nav-link active ">DAFTAR KELAS </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link ">DASHBOARD</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">LEARNING ROOM </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <img src="{{ asset('/image/User Orange.PNG') }}" alt="" style="height:30px;">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/profil" class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">Keluar</i></a>
                        </li>
                    </ul>
                </div>
            </nav>
    @endauth
    <div class="jumbotron academy-beckground">  
        @unless (Auth::check())
            <a href="/home" class="btn btn-academy">KOMDA</a>
        @endunless 
        <div class="row">
            <div class="col-sm-5">
                <h1>DAFTAR KELAS </h1>
                <p>Kelas academy tersedia bagi yang belum memiliki kemampuan MULTIMEDIA  (beginner) hingga yang sudahmahir (advance).</p>
                <hr class="daftar-kelas">
            </div>
            <div class="col-sm-7 ">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ asset('/image/btn_groub1.png')  }}" alt="" class="img-fluid">
                        <p class="judul-academy">BELAJAR DESIGN GRAPHIC</p>
                        <p class="" id="penjelasan1">Memulai belajar dari hal mendasar tentang designer dengan berbagai software editing Bersama para designer expert</p>
                        @auth
                            <a href="{{ route('tambahkelasdesign')}}" name="tambahdesign" id="kelas1" class="btn btn-tambah btn-secondary btn-sm">Tambahkan Kelas</a>
                        @endauth
                        <img src="{{ asset('/image/btn_groub3.png')  }}" alt="" class="img-fluid">
                        <p class="judul-academy">BELAJAR PHOTOGRAPHY</p>
                        <p id="penjelasan2">Memulai belajar dari hal mendasar tentang PHOTOGRAPHY  serta Teknik pengambilan angle dan hal - hal dasar lainnya</p>
                        @auth
                            <a href="{{ route('tambahkelasphotograpy')}}" name="tambahphotograpy" id="kelas2" class="btn btn-tambah btn-secondary btn-sm">Tambahkan Kelas</a>
                        @endauth
                    </div>
                    <div class="col-sm-6">
                    <img src="{{ asset('/image/btn_groub2.png')  }}" alt="" class="img-fluid">
                        <p class="judul-academy">BELAJAR VIDEOEDITING</p>
                        <p id="penjelasan3">Memulai belajar dari hal mendasar tentang VIDEOGRAPHY  dengan berbagai software editing dan Teknik pengambilan video</p>
                        @auth
                            <a href="{{ route('tambahkelasvideoediting')}}" name="tambahvideoediting" id="kelas3" class="btn btn-tambah btn-secondary btn-sm">Tambahkan Kelas</a>
                        @endauth
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <img src="{{ asset('/image/footer.png')  }}" alt=""class="img-fluid">
    </footer>
</body>
@auth
<script>
var kelas1 = document.getElementById('kelas1');
var kelas2 = document.getElementById('kelas2');
var kelas3 = document.getElementById('kelas3');
var penjelasan1 = document.getElementById('penjelasan1');
var penjelasan2 = document.getElementById('penjelasan2');
var penjelasan3 = document.getElementById('penjelasan3');
var isikelas1 = "{{ Auth::user()->design}}";
var isikelas2 = "{{ Auth::user()->videoediting}}";
var isikelas3 = "{{ Auth::user()->photograpy}}";
var para1 = document.createElement("b");
var para2 = document.createElement("b");
var para3 = document.createElement("b");
var node1 = document.createTextNode(" Kelas Ini Sudah Di ambil..");
var node2 = document.createTextNode(" Kelas Ini Sudah Di ambil..");
var node3 = document.createTextNode(" Kelas Ini Sudah Di ambil..");
para1.appendChild(node1);
para2.appendChild(node2);
para3.appendChild(node3);
function daftarkelas()
{
    if(isikelas1 >= 1){
        kelas1.style.visibility = "hidden";
        penjelasan1.appendChild(para1);
    }if(isikelas3 >= 1){
        kelas2.style.visibility = "hidden";
        penjelasan2.appendChild(para2);
    }if(isikelas2 >= 1){
        kelas3.style.visibility = "hidden";
        penjelasan3.appendChild(para3);
    }
}
daftarkelas();
</script>
@endauth
</html>