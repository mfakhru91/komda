
@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            
        <div class="list-group list" id="listmenu">
            <h4>Daftar Materi KOMDA</h4>
            @foreach($materi as $p)
                <button type="button" class="list-group-item list-group-item-action" id="itemMateri1" onclick="window.location.href = '/test/{{$p->id}}';">{{$p->judul}}</button>
            @endforeach
            
        </div>
        </div>
        <div class="col-md-7 col-md-offset-2">
            <div class="container materi">
                <img src="{{ asset('image/design.jpg') }}" alt="">
                <br>
                <br>
                <h4>{{$isi->judul}}</h4>
                <hr>
                <p>
                {{$isi->isimateri}}
                </p>

                <div class="d-flex justify-content-end">
                    <form action="{{ route('pelajaran') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="lesson"  value="20">
                        <input type="submit" class="btn btn-primary " value="NEXT LESSON">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection