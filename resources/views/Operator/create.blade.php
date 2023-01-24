@extends('layouts.app')

@section('title', 'input operator')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Operator</h2>
</div>
<div class="card-body">
    <form action="{{url('operators/save')}}" method="POST">
        @csrf

        <div class="mb-3">
        <label for="nama" class="form-label">nama</label>
        <input name="nama" id="nama" type="text" class="form-control">
        @error('nama')
        <div class="alert alert-danger">
            <span class="text-danger">Nama Harus Diisi</span>
</div>
@enderror
</div>

        <div class="mb-3">
        <label for="jabatan" class="form-label">jabatan</label>
        <select name="jabatan" id="jabatan" class="form-control">
            <option value="Kepala_Perpustakaan"> Kepala Perpustakaan</option>
            <option value="Bendahara_Perpustakaan"> Bendahara Perpustakaan</option>
</select>
@error('nama')
        <div class="alert alert-danger">
            <span class="text-danger">Nama Harus Diisi</span>
</div>
@enderror
</div>

        <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">author</label>
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
            <option value="laki-laki"> laki laki</option>
            <option value="perempuan"> perempuan</option>
</select>
@error('nama')
        <div class="alert alert-danger">
            <span class="text-danger">Nama Harus Diisi</span>
</div>
@enderror
</div>

        <div class="mb-3">
            <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
</div>
</form>

@endsection