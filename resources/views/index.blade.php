<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
</head>
<body>
    <div class=" header">
        <p class="text-center">e - learning komunitas multimedia Darussalam </p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-transparant">
        <a class="navbar-brand" href="#">KOMDA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a href="/daftarkelas" class="nav-link btn btn-secondary">DAFTAR KELAS </a>
                </li>
            </ul>
            <ul class="navbar-nav my2 my-lg-0">
                <a href="/masuk" class="btn btn-primary">MASUK</a>
                <a href="/daftar" class="btn btn-danger">DAFTAR</a>
            </ul>  
        </div>
    </nav>
    <div class="jumbotron awal">
        <h3 class="text-center">Bermimpilah yang sebesar-besarnya dan jadilah seperti yang kau impikan </h3>
        <p class="text-center">Jadilah tuan rumah di negeri sendiri dengan belajar langsung dari para inovator dan developer expert</p>
        <img src="{{ asset('/image/LOGO_KOMDA.PNG') }}" alt="" class="mx-auto d-block">
    </div>
    <div class="container">
        <h3 class="text-center">2 Pilar yang Dapat Kamu Manfaatkan</h3>
            <p class="text-center">berikut ini adalah 2 tujuan dari website KOMDA ini</p>
            <div class="container-fluid">
            <div class="row">
                <div class="col">
                   <div class="text-center">
                    <img src="{{ asset('/image/toga.PNG') }}" alt="">
                   </div>
                    <h3 class="text-center">Academy</h3>
                    <p class="text-center text-justify">
                        Belajar menggunakan kurikulum yang telah divalidasi industri IT internasional seperti Google, Microsoft, dan LINE. Diskusikan Code yang kamu tulis dengan para Expert.
                    </p>
                </div>
                <div class="col">
                <div class="text-center">
                    <img src="{{ asset('/image/challenge.PNG') }}" alt="">
                   </div>
                    <h3 class="text-center">challenge</h3>
                    <p class="text-center text-justify">
                    Uji kemampuanmu dengan mengikuti Challenge yang diselenggarakan oleh perusahaan IT nasional dan multi-nasional.
                    </p>
                </div>
            </div>
            </div>
            <div class="jumbotron">
                <p class="text-center">
                    komda dengan segala kekurangannya akan berjalan dan membentuk para multimediawan yang bisa bermanfaat bagi umat dan bangsa
                </p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                    <img src="{{ asset('image/design.jpg')}}" alt="" style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">DESIGN GRAFIS</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <img src="{{ asset('image/video_editing.jpg')}}" alt="" style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">VIDEO EDITING</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <img src="{{ asset('image/komda1.jpg')}}" alt="" style="height:200px">
                    <div class="card-body">
                        <h5 class="card-title">PHOTOGRAPY</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                </div>
            </div>
    </div>
    <footer class="footer" style="margin-top:20px">
        <img src="{{ asset('/image/footer.png')  }}" alt=""class="img-fluid">
    </footer>
</body>
</html>