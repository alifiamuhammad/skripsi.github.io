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
            if(Auth::guard('datasiswa')->attempt(['NIS' => $request->NIS, 'password' => $request->password])){
                return  redirect('home2');
          
            
            }
        
        return redirect('/')
        ->withInput()
        ->withErrors(['login_gagal' => 'Username atau Password anda salah']);
}
public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}
}
