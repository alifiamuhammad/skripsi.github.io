<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Kelas;

class dropdow extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $Jurusan = Jurusan::create(['Nama_Jurusan' => 'MIIA']);
  
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XMIIA-1']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XMIIA-2']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XMIIA-2']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XMIIA-3']);

        $Jurusan = Jurusan::create(['Nama_Jurusan' => 'IIS']);
  
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XIIS-1']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XIIS-2']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XIIS-3']);
        Kelas::create(['jurusan_id' => $Jurusan->id, 'Nama' => 'XIIS-4']);
  
  
  
        /*------------------------------------------
        --------------------------------------------
        India Country Data
        --------------------------------------------
        --------------------------------------------*/
       
  
    }
}
