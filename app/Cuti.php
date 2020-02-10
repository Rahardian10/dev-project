<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = 'cuti';
    protected $fillable = ['id_karyawan', 'id_jenis_cuti', 'tgl_cuti', 'awal_cuti', 'akhir_cuti', 'alasan_cuti', 'status', 'created_at', 'updated_at'];
}