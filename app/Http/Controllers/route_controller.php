<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class route_controller extends Controller
{
    public function home(){
return view('home');
    }
    public function tambah_data_siswa(){
        return view('tambah_data_siswa');
            }
    

    
}

