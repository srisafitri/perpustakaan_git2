<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.profil');
    }

    public function changePassword(Request $req, $id)
    {
        $change = [ 
        'password' => Hash::make($req->password)
        
    ];
    
    

    User::where('id', $id)->update($change);

    return redirect('profil')->with('success', 'Password anda berhasil diubah');
    }
}
