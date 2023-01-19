<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\jurusan;
use App\Models\DataSiswa;
class kelas_controller extends Controller
{
     public function kelas()
    {
        $posts = kelas::sortable()->paginate();
  
    return view('data_kelas',['data' =>$posts]);
    }

    public function detailkelas($id){

        return view('detail_kelas',[
                'post' => kelas::find($id)
            ]);
            }
    public function tambah_data_kelas(){
      $data['jurusans'] = jurusan::get(["Nama_Jurusan", "id"]);
      return view('tambah_data_kelas', $data);
                            }

            public function store(Request $request)
            {
                $this->validate($request, [

                    'Nama'=> 'required',
                    'jurusan_id'=> 'required',
                ]);
               kelas::create([
                    'Nama'   => $request->Nama,
                    'jurusan_id'     => $request->jurusan_id,
                    
                ]);
        
                //redirect to index
                return redirect('data_kelas')->with(['success' => 'Data Berhasil Disimpan!']);
            }
        }

