<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGuru extends Model
{
    use HasFactory;
    protected $table="data_gurus";
    protected $fillable = [
        'NIP',
        'Nama',
        'id_mapel',
        'Email',
        'Foto',
        'NoHP',
        'password',
        'level',
        'Alamat',
        
        

    ];
}
