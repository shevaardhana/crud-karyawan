<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'mulai_kerja','posisi','nama', 'nama_bank','no_rekening','tempat_lahir','tgl_lahir','alamat_tinggal',
        'no_ktp', 'no_hp', 'emergency_call', 'status', 'nama_emergency_call'
    ];
}
