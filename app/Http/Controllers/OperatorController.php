<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Operator;

class OperatorController extends Controller
{
    public function index ()

{
    $operators=Operator::all();
    return view('operator.index',compact('operators'));
}

public function create()
{
    return view('operator.create');
}

public function save(Request $req)
{
    $data = $req->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'jenis_kelamin' => 'required'
    ]);

    operator::create($data);

    return redirect('operators')->with('success', 'Data Berhasil Di Simpan');
}

public function edit ($id)
{
    $operator = Operator::find($id);

    return view('Operator.edit', compact('operator'));
}

public function update (Request $req,$id)
{
    $data = 
    $req->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'jenis_kelamin' => 'required'
    ]);

    Operator::where('id',$id)->update($data);

    return redirect('operators')->with ('success', 'Data operator berhasil diubah');
}

public function destroy($id)
{
    $operator=Operator::find($id);
    $operator->delete();

    return redirect('operators')->with('success','Data Operator berhasil Di hapus');
}
    //
}
