@extends('layout/main')

@section('title', 'List Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>List Students</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-5">
            <a href="/students/create" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$student->nama}}</td>
                        <td>
                            <a href="/students/{{$student->id}}" class="badge badge-primary">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection