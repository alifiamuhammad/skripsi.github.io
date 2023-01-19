<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Kyslik\ColumnSortable\Sortable;
class kelas extends Model
{
    use HasFactory, Sortable;
    protected $fillable = [
        'Nama','jurusan_id','id'
    ];

    public $sortable = ['id', 'Nama','No'];

   
        public function kelass()
        {
            return $this->hasMany(DataSiswa::class);
        }
     }
