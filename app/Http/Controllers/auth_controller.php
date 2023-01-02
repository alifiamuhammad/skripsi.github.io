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
                'NIS' =>' required',
                'password' => 'required',
            ]);
            if(Auth::guard('datasiswa')->attempt(['NIS' => $NIS, 'password' => $password])){
                return  redirect('home2');
            }elseif(Auth::guard('user')->attempt(['username' => $username, 'password' => $password])){
                 return redirect('home1');
            }
           
           
        
        return redirect('/')
        ->withInput()
        ->withErrors(['login_gagal' => 'Username atau Password anda salah']);
}
}
