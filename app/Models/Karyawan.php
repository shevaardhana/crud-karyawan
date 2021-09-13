<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'mulai_kerja','posisi','nama','rekening','tempat_lahir','tgl_lahir','alamat',
        'no_ktp', 'no_hp'
    ];
}
