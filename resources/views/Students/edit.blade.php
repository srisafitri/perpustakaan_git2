@extends('layouts.app')

@section('title','edit siswa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Edit siswa</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/students/update')}}/{{$student->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nis" class="form-label">nis</label>
                            <input name="nis" id="nis" type="text" value="{{$student->nis}}" class="form-control">
                            @error('nis')
                            <div class="alert alert-danger">
                                <span class="text-danger"> NIS HARUS DIISI</span>
                            </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input name="nama" id="nama" type="text" value="{{$student->nama}}" class="form-control">
                            @error('nama')
                            <div class="alert alert-danger">
                                <span class="text-danger"> NAMA HARUS DIISI</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input name="alamat" id="alamat" type="text" value="{{$student->alamat}}" class="form-control">
                            @error('alamat')
                            <div class="alert alert-danger">
                                <span class="text-danger"> ALAMAT HARUS DIISI</span>
                            </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input name="foto" id="foto" type="file" value="{{$student->foto}}" class="form-control">
                            @error('foto')
                            <div class="alert alert-danger">
                                <span class="text-danger"> FOTO HARUS DIISI</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kelas" class="form-label"></label>
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="10" {{ $student->kelas==='10' ? 'selected' : '' }}> x</option>
                                <option value="11" {{ $student->kelas==='10' ? 'selected' : '' }}>XI</option>
                                <option value="12" {{ $student->kelas==='10' ? 'selected' : '' }}>XII</option>
                            </select>
                            @error('kelas')
                            <div class="alert alert-danger">
                                <span class="text-danger"> KELAS HARUS DIISI</span>
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label"></label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="laki-laki"{{ $student->jenis_kelamin==='laki laki' ? 'selected' : '' }}>laki laki</option>
                                <option value="perempuan"{{ $student->jenis_kelamin==='perempuan' ? 'selected' : '' }}>perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="alert alert-danger">
                                <span class="text-danger"> JENIS KELAMIN HARUS DIISI</span>
                            </div>
                            @enderror
                            <div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
                                </div>
                    </form>

                    @endsection