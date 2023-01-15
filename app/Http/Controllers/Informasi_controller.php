<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
class Informasi_controller extends Controller
{
public function informasi(){
        return view('informasi');
            }
 public function tambah_informasi(){
         return view('Tambah_informasi');  
            }

public function store(Request $request){
    $data=new Informasi();
        $file->$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
                            }
}

