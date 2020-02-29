<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('/image/LOGO_KOMDA.PNG') }}" />
    <title>Daftar Kelas</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/daftarkelas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/kelas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/jqueryUi/jquery-ui.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3890bb4844.js" crossorigin="anonymous"></script>
</head>
<body>
@yield('content')
<footer class="footer" style="margin-top:20px">
        <img src="{{ asset('/image/footer.png')  }}" alt=""class="img-fluid" name="design">
</footer>
</body>
<script type="text/javascript" src="{{ asset('/js/pelajaran1.js') }}"></script>
<script>
    window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }
    var disable1 = document.getElementById("itemMateri1");
    var disable2 = document.getElementById("itemMateri2");
    var disable3 = document.getElementById("itemMateri3");
    var disable4 = document.getElementById("itemMateri4");
    var disable5 = document.getElementById("itemMateri5");
    var disable6 = document.getElementById("itemMateri6");
    var disable7 = document.getElementById("itemMateri7");
    var disable8 = document.getElementById("itemMateri8");
    var disable9 = document.getElementById("itemMateri9");
    var disable10 = document.getElementById("itemMateri10");
    var angka = "{{ Auth::user()->design }}";
    function disableitem(){
        if( angka == 1){
            disable2.disabled = true;
            disable3.disabled = true;
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 20 || angka <= 20){

            disable3.disabled = true;
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 30 || angka <= 30){
            disable4.disabled = true;
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 40 || angka <= 40){
            disable5.disabled = true;
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 50 || angka <= 50){
            disable6.disabled = true;
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 60 || angka <= 60){
            disable7.disabled = true;
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 70 || angka <= 70){
            disable8.disabled = true;
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 80 || angka <= 80){
            disable9.disabled = true;
            disable10.disabled = true;
        }if(angka == 90 || angka <= 90){
            disable10.disabled = true;
        }if(angka == 100 || angka <= 100){
        }   
    }
    disableitem();
</script>
</body>
</html>