<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
      return view('Auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return  redirect('dashboard');
            }
            if(Auth::user()->role_id == 2){
                return  redirect('verifikasi');
            }
            if(Auth::user()->role_id == 3){
                return  redirect('rektor');
            }
        }

                Session::flash('status', 'Failed');
                Session::flash('message', 'Login invalid');
                return redirect('/login')->with('message', 'Anda Belum Memiliki Akun, Silakan Registrasi!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');

    }
}
