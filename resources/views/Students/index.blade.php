@extends('layouts.app')

@section('title', 'Daftar Siswa')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <a href="{{url('/students/create')}}" class="btn btn-md btn-primary my-2">Tambah Data Baru</a>
</div>
</div>
@if(Session::has('success'))
<div class="row">
    <div class="col-6">
        <div class="alert alert-success alert-dismissible text-center">
            <span>{{Session::get('success') }}</span>
</div>
</div>
</div>
@endif
<div class="row">
    <div class="card p-4">
        <div class="card-header">
            <i class=" fas fa-table me-1"></i>
            Data Siswa
</div>
<div class="card-body">
    <table id="datatablesSimple">
        <thead>
            <tr>
                <th>nis</th>
                <th>nama</th>
                <th>alamat</th>
                <th>kelas</th>
                <th>foto</th>
                <th>jenis_kelamin></th>
                <th>Aksi</th>
</tr>
</thead>
<tfoot>
    <tr>
        <th>nis</th>
        <th>nama</th>
        <th>alamat</th>
        <th>kelas</th>
        <th>foto</th>
        <th>jenis_kelamin</th>
        <th>Aksi</th>
</tr>
</tfoot>
<tbody>
    @foreach($student as $student)
    <tr>
        <td>{{$student->nis}}</td>
        <td>{{$student->nama}}</td>
        <td>{{$student->alamat}}</td>
        <td>{{$student->kelas}}</td>
        <td><img src="storage/foto_siswa/{{$student->foto}}" alt="Foto Siswa" width="100"/></td>
        <td>{{$student->jenis_kelamin}}</td>

        <td>
            <a href="{{url('/students/edit')}}/{{$student->id}}" class="btn btn-warning btn-md text-white">Edit</a>
            <form action="{{url('/students/delete')}}/{{$student->id}}" method="POST">
                @csrf 
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-md">Hapus</button>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection