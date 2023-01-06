<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class DataSiswa extends  Authenticatable
{
   
    use HasFactory, Sortable;
    
    protected $table="datasiswa";
    protected $primaryKey="id";
    protected $fillable = [
        'NIS',
        'Nama',
        'Alamat',
        'Kelas_id',
        'Jurusan_id',
        'Email',
        'Foto',
        'NoHP',
        'password',
        'level',
        'Alamat',
        
        

    ];
    public function jurusanx() {
       return $this->belongsTo(Jurusan::class, 'Jurusan_id');

    }
    public $sortable = ['NIS', 'Nama', 'Kelas'];

   
   
}
