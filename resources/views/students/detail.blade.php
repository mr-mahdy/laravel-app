@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Detail Mahasiswa</h1>
        </div>
    </div>


    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$student->nama}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                <p class="card-text">{{$student->email}}</p>
                <p class="card-text">{{$student->jurusan}}</p>
                <a href="/students/{{$student->id}}/edit" class="btn btn-success">Edit</a>
                <form action="/students/{{$student->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Hapus</button>
                </form>
                <a href="/students" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection