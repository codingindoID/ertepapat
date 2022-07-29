<?php

namespace App\Models;

use CodeIgniter\Model;

class MPenduduk extends Model
{
    protected $table            = 'penduduk';
    protected $primaryKey       = 'id_penduduk';
    protected $allowedFields    = ['nik', 'no_kk', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'rt', 'rw', 'desa', 'kecamatan', 'alamat_lengkap', 'agama', 'status_kawin', 'pekerjaan', 'kewarganegaraan', 'jk', 'gol_darah', 'tanggal_diinput', 'tanggal_diipdate'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_diinput';
    protected $updatedField  = 'tanggal_diupdate';
}
