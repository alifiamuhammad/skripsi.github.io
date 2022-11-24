<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

class DataSiswaController extends Controller
{
    public function index()
{

	
    $posts = DataSiswa::all();
    return view('dt_siswa',['data' =>$posts]);
	

}
public function detailsiswa(){
    return view('detail_siswa');
        }
    
}
