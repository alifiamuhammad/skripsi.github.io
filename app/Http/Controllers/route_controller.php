<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class route_controller extends Controller
{
 
    public function home(){
        return view('home');
            }
            public function homes(){
                return view('homesiswa');
                    }
                    public function homeguru(){
                        return view('homeguru');
                            }
                            public function error(){
                                return view('ss');
                                    }
    
  

    
}

