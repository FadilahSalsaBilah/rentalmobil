<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    function index()
    {
        return view('pages.auth.Login');
    }

    function login(request $request)
    {
        $validatedUser = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //cek login, jika berhasil maka login 
        if(Auth::attempt($validatedUser)){
            return redirect()->to('/tipemobil');
        } else {
            return redirect()->to('/login');
        }
    }

    function logout(request $request)
    {
        Auth::Logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');

    }

}
