<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class DataSiswa extends Model
{
   
    use HasFactory, Sortable;
    
    protected $table="datasiswa";
    protected $primaryKey="id";
    protected $fillable = [
        'NIS',
        'Nama',
        'Alamat',
        'Kelas',
        'Email',
        'NoHP',
        'Password',
        'level',
        'Alamat',
        
        

    ];
    public $sortable = ['NIS', 'Nama', 'Kelas'];
   
}
