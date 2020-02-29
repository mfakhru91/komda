<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="text-center mb-5">SERTIFIKAT E-LEARNING KOMDA</h1>
        <p class="mb-1">sertifikat ini deberikan kepada :</p>
        <h3 class="">{{ Auth::user()->name }}</h3>
        <p class="mb-1">Atas prestasi peserta yang telah Elearning Komda dengan materi yang diambil</p>
        <h3>DESIGN GRAFIS</h3>
     </div>
     
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" type="text/css" href="/css/sertifikat.css">
</head>
<body>
    <div class="container" id="test">
    <div class="jumbotron" >
        <table style="width:100%; margin-top: -50px;">
            <tr>
                <td>
                    <img src="/image/LOGO_KOMDA.png" style="height:100px" alt="">
                </td>
                <td>
                    <h3 class="text-right" >KOMDA</h3>
                    <p class="text-right" style="margin-top:-20px">Komunitas Multimedia Darussalam</p>
                </td>
            </tr>
        </table>
        <div class="text-center">
            <h1>SERTIFIKAT E-LEARNING KOMDA</h1>
            <p class="mb-1">sertifikat ini deberikan kepada :</p>
            <h3 class="">{{ Auth::user()->name }}</h3>
            <p class="mb-1">Atas prestasi peserta yang telah Elearning Komda dengan materi yang diambil</p>
            <h3>DESIGN GRAFIS</h3>
        </div>
        <table style="width:100%; margin-top: 50px;">
                <tr>
                <td style="width: 50%;">
                    <p style="">Disetujui Oleh</p>
                    <img src="/image/ttd.png" alt="" style="height:100px">
                    <p>Muhammad Risky Ardianysah</p>
                </td>
                <td class="text-right">
                    <p>Komunitas Multimedia Darussaam</p>
                    <img src="/image/komdaqr.png" alt="" style="height:100px"> 
                </td>
                </tr>
        </table>
    </div>
    <footer class="footer">
    </footer>
    </div>
    <button type="button" class="btn" onclick="printHtmlCss()">
        Print Sertifikat
    </button>
    <script src=" https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script>
        function printHtmlCss() {
        printJS({
            printable: 'test',
            type: 'html',
            css: '/css/sertifikat.css',
            scanStyles: false
        })
        }
    </script>
</body>
</html>