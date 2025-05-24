<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawans';
    protected $fillable = ['id','nama', 'alamat','tgl_lahir', 'agama','pendidikan','jabatan','statuspernikahan','etnis','statusaktif'];
}
