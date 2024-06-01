<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanKaryawan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nama',
        'TanggalLamar',
        'TanggalPenerimaan',
        'Jabatan',
        'Gaji',
        'Departemen',
        'LokasiKerja',
    ];
}
