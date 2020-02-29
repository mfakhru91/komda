@extends('layout.app')

@section('content')
    <div class="jumbotron bg-kelas">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-orange " id="navbar">
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
                    <a href="/dashboard" class="nav-link active">DASHBOARD</a>
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
    <div class="row">
        <div class="col-md-3">
            
        <div class="list-group list" id="listmenu">
            <h4>Daftar Materi KOMDA</h4>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri1" onclick="window.location.href = '/design/1';">Materi Design 1</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri2" onclick="window.location.href = '/design/2';">Materi Design 2</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri3" onclick="window.location.href = '/design/3';">Materi Design 3</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri4" onclick="window.location.href = '/design/4';">Materi Design 4 </button>
            <button type="button" class="list-group-item list-group-item-action active" id="itemMateri5" onclick="window.location.href = '/design/5';">Materi Design 5</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri6" onclick="window.location.href = '/design/6';">Materi Design 6</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri7" onclick="window.location.href = '/design/7';">Materi Design 7</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri8" onclick="window.location.href = '/design/8';">Materi Design 8</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri9" onclick="window.location.href = '/design/9';">Materi Design 9</button>
            <button type="button" class="list-group-item list-group-item-action" id="itemMateri10" onclick="window.location.href = '/design/10';">Materi Design 10</button>
        </div>
        </div>
        <div class="col-md-7 col-md-offset-2">
            <div class="container materi">
                <img src="{{ asset('image/design.jpg') }}" alt="">
                <br>
                <br>
                <h4>DASAR COREL DRAW</h4>
                <hr>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas egestas dolor nec posuere. Duis purus nisi, ullamcorper a condimentum eu, bibendum eu tortor. Pellentesque tincidunt elit id purus mattis rutrum. Praesent tempus, magna et convallis dapibus, turpis elit rutrum odio, a consequat elit massa viverra arcu. Maecenas sed dolor maximus, accumsan turpis sit amet, viverra metus. Maecenas sit amet hendrerit augue. Nam efficitur arcu imperdiet elementum vulputate. Vestibulum ullamcorper urna et ligula sagittis, condimentum auctor magna tincidunt.

                Nullam vel nisi eu orci varius ullamcorper mollis in augue. Suspendisse egestas purus eget magna cursus, sit amet eleifend neque dignissim. Integer rutrum urna eu lorem pharetra malesuada. Donec mattis arcu ultricies mauris blandit euismod eu mattis nunc. Aenean consectetur nisi at ex maximus imperdiet. Aliquam erat volutpat. Ut fringilla tortor eleifend magna auctor, nec tincidunt ipsum varius. Proin mattis, ante vel facilisis semper, lorem est pulvinar leo, vel placerat nunc neque et metus. Nulla facilisi. Nam vel varius augue. Donec placerat tellus nisl, ac feugiat arcu malesuada vitae.

                Curabitur sit amet ex sed risus consequat posuere. Donec pretium odio mi, at egestas sapien egestas vel. Integer vitae rutrum elit, eu tempus sem. Pellentesque ornare lobortis metus, vitae pulvinar mi fringilla ut. Mauris malesuada libero a enim viverra tristique. Donec interdum tempus ultricies. Etiam posuere nibh ut diam imperdiet, quis blandit enim interdum. Nullam vitae molestie diam. Praesent felis leo, bibendum id tellus eget, vehicula ultrices augue. Ut quis sollicitudin nibh.

                Proin luctus dui id ligula bibendum scelerisque. Mauris et est luctus, venenatis sapien ac, ullamcorper massa. Mauris arcu enim, euismod vel bibendum ut, pretium nec velit. Vestibulum ullamcorper neque malesuada eros lobortis, nec congue lorem mattis. Maecenas semper nisl a dui finibus, sed consectetur libero tempor. Curabitur in posuere nisi. Pellentesque eget mi convallis, congue purus sit amet, porta ante. Quisque volutpat velit quis ipsum ultrices, eu blandit odio tincidunt. Curabitur faucibus quam vel augue tristique ultrices. Maecenas nec felis ut eros sagittis aliquam non pellentesque turpis. Mauris bibendum, dui non rhoncus congue, ipsum velit luctus mi, nec laoreet nibh libero quis risus. Phasellus mattis auctor vulputate. Donec maximus, velit eget sagittis porta, eros velit scelerisque massa, ut vehicula nunc leo non justo. Cras lobortis convallis rutrum.

                Maecenas non sollicitudin tellus, vitae volutpat odio. Aliquam erat volutpat. Integer tristique vehicula condimentum. Etiam sed molestie sapien. Nulla laoreet tortor elementum, ullamcorper sapien nec, sodales lacus. In eget velit quis arcu elementum luctus. Nam malesuada blandit sagittis. Duis aliquam sollicitudin diam, ac accumsan velit sollicitudin et. Phasellus fermentum tellus finibus sem viverra aliquam. Sed vulputate dictum nunc at vestibulum. Donec pharetra turpis et neque fringilla, id fermentum quam sollicitudin. Etiam consequat turpis imperdiet, faucibus diam sed, feugiat diam. Mauris eu leo dapibus, pretium libero at, laoreet est. Morbi mattis nec est a imperdiet. Aliquam elementum maximus ullamcorper. Mauris sagittis justo vel facilisis accumsan.

                </p>
                <br>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas egestas dolor nec posuere. Duis purus nisi, ullamcorper a condimentum eu, bibendum eu tortor. Pellentesque tincidunt elit id purus mattis rutrum. Praesent tempus, magna et convallis dapibus, turpis elit rutrum odio, a consequat elit massa viverra arcu. Maecenas sed dolor maximus, accumsan turpis sit amet, viverra metus. Maecenas sit amet hendrerit augue. Nam efficitur arcu imperdiet elementum vulputate. Vestibulum ullamcorper urna et ligula sagittis, condimentum auctor magna tincidunt.

                Nullam vel nisi eu orci varius ullamcorper mollis in augue. Suspendisse egestas purus eget magna cursus, sit amet eleifend neque dignissim. Integer rutrum urna eu lorem pharetra malesuada. Donec mattis arcu ultricies mauris blandit euismod eu mattis nunc. Aenean consectetur nisi at ex maximus imperdiet. Aliquam erat volutpat. Ut fringilla tortor eleifend magna auctor, nec tincidunt ipsum varius. Proin mattis, ante vel facilisis semper, lorem est pulvinar leo, vel placerat nunc neque et metus. Nulla facilisi. Nam vel varius augue. Donec placerat tellus nisl, ac feugiat arcu malesuada vitae.

                Curabitur sit amet ex sed risus consequat posuere. Donec pretium odio mi, at egestas sapien egestas vel. Integer vitae rutrum elit, eu tempus sem. Pellentesque ornare lobortis metus, vitae pulvinar mi fringilla ut. Mauris malesuada libero a enim viverra tristique. Donec interdum tempus ultricies. Etiam posuere nibh ut diam imperdiet, quis blandit enim interdum. Nullam vitae molestie diam. Praesent felis leo, bibendum id tellus eget, vehicula ultrices augue. Ut quis sollicitudin nibh.

                Proin luctus dui id ligula bibendum scelerisque. Mauris et est luctus, venenatis sapien ac, ullamcorper massa. Mauris arcu enim, euismod vel bibendum ut, pretium nec velit. Vestibulum ullamcorper neque malesuada eros lobortis, nec congue lorem mattis. Maecenas semper nisl a dui finibus, sed consectetur libero tempor. Curabitur in posuere nisi. Pellentesque eget mi convallis, congue purus sit amet, porta ante. Quisque volutpat velit quis ipsum ultrices, eu blandit odio tincidunt. Curabitur faucibus quam vel augue tristique ultrices. Maecenas nec felis ut eros sagittis aliquam non pellentesque turpis. Mauris bibendum, dui non rhoncus congue, ipsum velit luctus mi, nec laoreet nibh libero quis risus. Phasellus mattis auctor vulputate. Donec maximus, velit eget sagittis porta, eros velit scelerisque massa, ut vehicula nunc leo non justo. Cras lobortis convallis rutrum.

                Maecenas non sollicitudin tellus, vitae volutpat odio. Aliquam erat volutpat. Integer tristique vehicula condimentum. Etiam sed molestie sapien. Nulla laoreet tortor elementum, ullamcorper sapien nec, sodales lacus. In eget velit quis arcu elementum luctus. Nam malesuada blandit sagittis. Duis aliquam sollicitudin diam, ac accumsan velit sollicitudin et. Phasellus fermentum tellus finibus sem viverra aliquam. Sed vulputate dictum nunc at vestibulum. Donec pharetra turpis et neque fringilla, id fermentum quam sollicitudin. Etiam consequat turpis imperdiet, faucibus diam sed, feugiat diam. Mauris eu leo dapibus, pretium libero at, laoreet est. Morbi mattis nec est a imperdiet. Aliquam elementum maximus ullamcorper. Mauris sagittis justo vel facilisis accumsan.

                </p>

                <div class="d-flex justify-content-end">
                    <form action="{{ route('pelajaran') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="lesson"  value="60">
                        <input type="submit" class="btn btn-primary " value="NEXT LESSON">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection