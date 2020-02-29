<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Edit Profil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/edit_profil.css') }}" rel="stylesheet">
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
          <img src="{{ asset('/image/logo_komda.png')}}" style="height:150px" alt="">
        </div>
    </div>
    <div class="container">
        <form enytype="multipart/form-data" method="POST" action="/edit"  >
          @csrf
          <div class="form-group row">
              <div class="col-sm-2">
              <img src="{{ asset('/image/user orange.png')}}" class=" img-rounded" alt="">
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ Auth::user()->email }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputAddress" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
              <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputNotlp" class="col-sm-2 col-form-label">No Telp</label>
              <div class="col-sm-10">
              <input type="number" class="form-control no-tlpn" name="no_tlp"value="{{ Auth::user()->no_tlp }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputAddress" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <textarea id="" class="form-control" name="alamat">{{ Auth::user()->alamat }}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputNotlp" class="col-sm-2 col-form-label">Photo</label>
              <div class="col-sm-10">
              <input type="file" id="avatar" name="avatar" class="form-control">
              </div>
            </div>
            <div class="form-group ">
            <input type="submit" class="btn btn-primary " value="Submit" name="submit">
            </div>
        </form>
    </div>
  </body>
</html>
