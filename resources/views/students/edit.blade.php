@extends('layout/main')

@section('title', 'Ubah Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Form Ubah Data Mahasiswa</h1>
        </div>
    </div>


    <div class="container mt-5">
        <form action="/students/{{$student->id}}" method="post">
            @method('patch')
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{$student->nama}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="number" class="form-control @error('nrp') is-invalid @enderror" name="nrp" id="nrp" value="{{$student->nrp}}">
                @error('nrp')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{$student->email}}">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input class="form-control" id="jurusan" name="jurusan" value="{{$student->jurusan}}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </div>
        </form>
    </div>
</div>
@endsection