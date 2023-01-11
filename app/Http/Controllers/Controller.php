<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
public function store(Request $request)
{
  
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalname();
        $dtupload = new upload;
        $dtupload->Nama=$request->Nama;
        $dtupload->gambar=$namaFile;
        $dtupload->deskripsi=$request->deskripsi;
        $dtupload->OB=$request->OB;
        $dtupload->waktu=$request->waktu;
        $nm->move(public_path().'/img',$namaFile);
        $dtupload->save();
    
    return redirect('Barang')->with('status','Data Berhasil Di Simpan!!');
}