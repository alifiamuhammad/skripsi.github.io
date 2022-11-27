<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSiswa;

class DataSiswaController extends Controller
{
    public function index()
{

	$posts = DataSiswa::sortable()->paginate();
  
    return view('dt_siswa',['data' =>$posts]);
	
    
}
public function detailsiswa(){
    return view('detail_siswa');
        }
    
public function tambah_data_siswa(){
    return view('tambah_data_siswa');
                }
public function store(Request $request)
                {
                    $this->validate($request, [
                        'NIS'=> 'required|max:15',
                        'Nama'=> 'required',
                        'Alamat'=> 'required',
                        'Kelas'=> 'required',
                        'Email'=> 'required',
                        'NoHP'=> 'required|max:13',
                    ]);


                    DataSiswa::create([
                        'NIS'     => $request->NIS,
                        'Nama'   => $request->Nama,
                        'Alamat' => $request->Alamat,
                        'Kelas' => $request->Kelas,
                        'Email' => $request->Email,
                        'NoHP' => $request->NoHP,
                        
                    ]);
            
                    //redirect to index
                    return redirect('dt_siswa')->with(['success' => 'Data Berhasil Disimpan!']);
                    
                    $messages = array(
                        'same'    => 'The :attribute and :other must match.',
                        'size'    => 'The :attribute must be exactly :size.',
                        'between' => 'The :attribute must be between :min - :max.',
                        'in'      => 'The :attribute must be one of the following types: :values',
                    );
                }        
}
