<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersiswa extends Model
{
    use HasFactory;

protected $table="usersiswa";
    protected $primaryKey="id";
    protected $fillable = [
        
        'datasiswa_id',
        'level',
        

    ];
}
