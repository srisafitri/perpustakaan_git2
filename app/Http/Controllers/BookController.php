<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all();

        return view('books.index',compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }
    public function save(Request $req)
    {
        $data = $req->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
           
        ]);

        if ($req->file('cover')) {
            $cover_path = $req->cover->store ('public');
        } else {
            $cover_path = "public/default.jpg";
        }

        $data['cover']=str_replace("public/","", $cover_path);

        Book::create($data);
    
        return redirect('books')->with ('success', 'Buku berhasil dibuat');
    }
  
    public function edit($id)
    {
        $book = Book::find($id);

        return view('books.edit', compact('book'));
    }

    public function update(request $req,$id){
    $data = $req->validate([
        'title' => 'required',
        'description' => 'required',
        'author' => 'required',
        'cover' => 'mimes:jpg,png'
       
    ]);

    if ($req->file('cover')) {
        $cover_path = $req->cover->store ('public');
    } else {
        $cover_path = "public/default.jpg";
    }

    $data['cover']=str_replace("public/","", $cover_path);

    Book::where('id',$id)->update($data);

    return redirect('books')->with ('success', 'Buku berhasil diubah');
}

public function destroy($id)
{
    $book = Book::find($id);
    $book ->delete();

    return redirect('books')->with('success', 'Buku berhasil dihapus');
}
    //
}
