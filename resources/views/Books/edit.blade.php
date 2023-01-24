@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card p-4">
                <div class="card-header">
                    <h2 class="text-center">Form Edit Buku</h2>
</div>
<div class="card-body">
    <form action="{{url('/books/update', $book->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

    <!-- ini hasil search -->
        <!-- <div class="alert alert-success" role="alert">
                        <strong>Sukses!</strong> Data Berhasil Disimpan
                        </div>
                        <script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 5000);
</script> -->

        <div class="mb-3">
        <label for="title" class="form-label">title </label>
        <input name="title" id="title" type="text" value="{{$book->title}}" class="form-control">
</div>

        <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" cols="10" rows="10" value="{{$book->description}}" class="form-control">{{$book->description}}</textarea>
</div>

        <div class="mb-3">
        <label for="author" class="form-label">author</label>
        <input name="author" id="author" type="text" value="{{$book->author}}" class="form-control">
</div>

        <div class="mb-3">
            <img src="storage/{{$book->cover}}" class="w-50 m-2" alt="Gambar edit">
        <label for="cover" class="form-label">foto sampul buku</label>
        <input name="cover" id="cover" type="file" class="form-control">
</div>

        <div class="mb-3">
            <button type="submit" class="btn btn-md btn-success">Ubah Data</button>
</div>
</form>

@endsection