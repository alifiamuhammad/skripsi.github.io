<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
class auth_controller extends Controller
{
    public function proses_login(Request $request)
    {
    
        request()->validate(
            [
                'username' =>' required',
                'password' => 'required',
            ]);
            $kredensil = $request->only('username' , 'password');
            if(Auth::attempt($kredensil)){
                $user= Auth::user();
            if($user->level == 'admin'){
                return redirect()->intended('home1')->with('alert-success', 'You are now logged in as admin.');
            }else if($user->level == 'siswa'){
                    return redirect()->intended('home2');
            }
            return redirect()->intended('/');
        }
        return redirect('/')
        ->withInput()
        ->withErrors(['login_gagal' => 'Username atau Password anda salah']);
}
}
