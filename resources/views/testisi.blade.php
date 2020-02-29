<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        @foreach($materi as $p)
        <a href="test/{{$p->id}}"><li>{{ $p->judul }}</li></a>
        @endforeach
    <p>{{$isi->isimateri}}</p>
</body>
</html>