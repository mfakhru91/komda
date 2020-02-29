<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .jumbotron{
            /* background-image: url('/image/bgrnpdf.jpg');
            background-repeat: no-repeat;
            background-size: 100%; */
            background-color: rgb(238, 238, 238);
            padding: 50px;
            padding-top: 100px;
            padding-bottom: 40px;
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        .img{
            height: 100px;
        }
        .btn{
            background-color: rgb(0, 204, 0);
            padding: 10px;
            color:white;
            font-family: Arial, Helvetica, sans-serif;
            text-decoration: none;
            border-radius: 10px;
        
        }
    </style>
</head>
<body>
    <div class="jumbotron">
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
                    <p style="margin-bottom:80px">Disetujui Oleh</p>

                    <p>Muhammad Risky Ardianysah</p>
                </td>
                </tr>
        </table>
    </div>
    <footer style="background-color:rgb(255, 136, 0); height: 60px; margin-bottom: 20px;">
    </footer>
</body>
</html>