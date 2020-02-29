<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('/image/LOGO_KOMDA.PNG') }}" />
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style-dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/jqueryUi/jquery-ui.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="jumbotron">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="/index">
            <img src="{{ asset('/image/LOGO_KOMDA.PNG') }}" alt="" style="height:30px;">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="/daftarkelas" class="nav-link ">DAFTAR KELAS </a>
                </li>
                <li class="nav-item">
                    <a href="/index/dashboard" class="nav-link active">DASHBOARD</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="" class="nav-link">LEARNING ROOM </a>
                </li> -->
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
        <div class="row biodata-pengguna">
            <div class="col-md-2 col-sm-3">
                <img src="{{ asset('/image/users.PNG') }}" alt="" class="img-fluid rounded-circle">
            </div>
            <div class="col-md-10 col-sm-9">
                <h3>{{ Auth::user()->name }}</h3>
                <br>
                <br>
                <br>
                <span class="align-bottom">BERGABUNG {{ Auth::user()->created_at }}</span><br>
                <b><span class="align-bottom text-bold">{{ Auth::user()->alamat }}</span></b>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4" id="kelas1">
                <img class="img-fluid" src="{{ asset('/image/DesignGrafis.PNG') }}" alt="">
                <br>
                <br>
                <p id="pelajaran1"></p>
                <div class="progress mb-3">
                    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: {{ Auth::user()->design }}%;">
                         {{ Auth::user()->design }} %
                      </div>

                </div>
                <a href="/design"  class="btn btn-sm btn-primary">Lanjut Belajar...</a>
                <a href="/sertifikat" id="sertifikat1" class="btn btn-sm btn-success" hidden>Sertifikat</a>
                <br>
            </div>
            <div class="col-md-4" id="kelas2">
                <img class="img-fluid" src="{{ asset('/image/videograpy.PNG') }}" alt="">
                <br>
                <br>
                <p id="pelajaran2"></p>
                <div class="progress mb-3">
                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: {{ Auth::user()->videoEditing }}%;">
                         {{ Auth::user()->videoEditing }} %
                      </div>

                </div>
                <a href="/design"  class="btn btn-sm btn-primary">Lanjut Belajar...</a>
                <a href="/sertifikat" id="sertifikat2" class="btn btn-sm btn-success" hidden>Sertifikat</a>
            </div>
            <div class="col-md-4" id="kelas3">
                <img class="img-fluid" src="{{ asset('/image/photograpy.PNG') }}" alt="">
                <br>
                <br>
                <div class="progress mb-3">
                <div  class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: {{ Auth::user()->photograpy }}%;">
                         {{ Auth::user()->photograpy }} %
                      </div>

                </div>
                <a href="/design"  class="btn btn-sm btn-primary">Lanjut Belajar...</a>
            </div>
        </div>
    </div>
<script>
var kelas1 = document.getElementById('kelas1');
var kelas2 = document.getElementById('kelas2');
var kelas3 = document.getElementById('kelas3');
var sertifikat1 = document.getElementById('sertifikat1');
var pelajaran1 = document.getElementById('pelajaran1');
var pelajaran2 = document.getElementById('pelajaran2');
let sertifikat2 = document.getElementById('sertifikat2');
var isikelas1 = "{{ Auth::user()->design}}";
var isikelas2 = "{{ Auth::user()->videoEditing}}";
var isikelas3 = "{{ Auth::user()->photograpy}}";
var para1 = document.createElement("h4");
var para2 = document.createElement("h4");
var para3 = document.createElement("h4");
var node1 = document.createTextNode(" SELESAI");
var node2 = document.createTextNode(" SELESAI");
var node3 = document.createTextNode(" SELESAI");
para1.appendChild(node1);
para2.appendChild(node2);
para3.appendChild(node3);
function daftarkelas()
{
    if(isikelas1 == '0'){
        kelas1.style.visibility = "hidden";
        kelas1.disabeled;
    }
    if(isikelas2 == '0'){
        kelas2.style.visibility = "hidden";
        kelas2.disabeled;
    }
    if(isikelas3 == '0'){
        kelas3.style.visibility = "hidden";
    }
}
function selesai()
{
    if(isikelas1 == 100 ){
        pelajaran1.appendChild(para1);
        sertifikat1.hidden = false;

    }if(isikelas2 == 100 ){
        pelajaran2.appendChild(para2);
        sertifikat2.hidden = false;
    }
}
selesai();
daftarkelas();
</script>
</body>
</html>