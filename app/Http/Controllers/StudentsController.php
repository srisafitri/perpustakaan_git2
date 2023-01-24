<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index ()
{
    $student=Student::all();
    return view('students.index',compact('student'));
}

public function create ()
{
    return view('students.create');
}

public function save(Request $req)
{
$data = $req->all();
$req->validate([
    'nis' => 'required',
    'nama' => 'required',
    'alamat' => 'required',
    'kelas' => 'required',
    'jenis_kelamin' => 'required',
    'foto' => "mimes:jpg,png"
]);

if ($req->file('foto')) {
$foto_path = $req->foto->store('public/foto_siswa');
} else {
    $foto_path = "public/foto_siswa/default.jpg";
}

$data['foto']=str_replace("public/foto_siswa","",$foto_path);

Student::create($data);

return redirect('student')->with ('success', 'Data siswa berhasil dibuat');
}

public function edit ($id)
{
    $student =Student::find($id);

    return view('students.edit', compact('student'));
}

public function update (Request $req, $id)
{
    $data = 
$req->validate([
    'nis' => 'required',
    'nama' => 'required',
    'alamat' => 'required',
    'kelas' => 'required',
    'jenis_kelamin' => 'required',
    'foto' => "mimes:jpg,png"
]);

if ($req->file('foto')) {
$foto_path = $req->foto->store('public/foto_siswa');
} else {
    $foto_path = "public/foto_siswa/default.jpg";
}

$data['foto']=str_replace("public/foto_siswa","",$foto_path);

Student::where ('id', $id)->update($data);

return redirect('students')->with ('success', 'Data siswa berhasil diubah');
}

public function destroy($id)
{
    $student =Student::find($id);
    $student->delete();

    return redirect('students')->with('success','Data siswa berhasil di hapus');
}
    //
}
