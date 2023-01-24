@extends('layouts.app')

@section('title', 'input buku')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Input Buku</h2>
                </div>
                <div class="card-body">
                    <form action="{{url('/books/save')}}" method="post" enctype="multipart/form-data">
                        @csrf

                       

                        <div class="mb-3">
                            <label for="title" class="form-label">title</label>
                            <input name="title" id="title" type="text" class="form-control">
                            @if ($errors->has('title'))
                            <div class="alert alert-danger">
                                <span class="text-danger"> TITLE HARUS DIISI</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <textarea name="description" id="description" cols="10" rows="10"
                                class="form-control"></textarea>
                            @if ($errors->has('description'))
                            <div class="alert alert-danger">
                                <span class="text-danger"> DESCRIPTION HARUS DIISI</span>
                            </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <label for="author" class="form-label">author</label>
                            <input name="author" id="author" type="text" class="form-control">
                            @if ($errors->has('author'))
                            <div class="alert alert-danger">
                                <span class="text-danger"> AUTHOR HARUS DIISI</span>
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="cover" class="form-label">foto sampul buku</label>
                            <input name="cover" id="cover" type="file" class="form-control">
                            @if ($errors->has('cover'))
                            <div class="alert alert-danger">
                                <span class="text-danger"> COVER HARUS DIISI</span>
                            </div>
                            @endif

                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-md btn-success">Simpan Data</button>
                            
                        </div>
                    </form>

                    @endsection