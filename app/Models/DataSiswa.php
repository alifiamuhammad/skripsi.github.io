<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class DataSiswa extends Model
{
   
    use HasFactory, Sortable;
    
    protected $table="data_siswa";
    protected $fillable = [
        'NIS',
        'Nama',
        'Alamat',
        'Kelas',
        'Email',
        'NoHP',
        

    ];
    public $sortable = ['NIS', 'Nama', 'Kelas'];
   
}
