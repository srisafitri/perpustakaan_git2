<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function Authenticate(Request $req)
    {
        $scredentials = [
            'email' => $req->email,
            'password' => $req->password,
        ];

        if(auth::attempt($scredentials)) {
            $req->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        
        return back()->withErrors ([
            'email' => 'Emai/Password Tidak terdaftar !!!'
        ]);
    }

    public function Register()
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $req)
    {
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'no_telepon' => 'required',
            'alamat' => 'required',
            'foto_profile' => 'mimes.jpg.png'
        ]);

        $data['password'] = Hash::make($req->password);
        if ($req->file('foto_profil')) {
            $foto_profile_path = $req->foto_profile->store ('public/profil');
        } else {
            $foto_profile_path = "public/default.jpg";
        }
        
    
        $data['foto_profil']=str_replace("public/profil","", $foto_profile_path);

        user::create($data);

        return redirect('login')->with('success', 'Anda Berhasil Registrasi, Silahkan Login !!!');
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect('/login');
    }
    //
}
