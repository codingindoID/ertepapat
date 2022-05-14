<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenduduk extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id_warga';
    protected $allowedFields = ['nama', 'nik', 'no_kk', 'alamat', 'pekerjaan', 'no_hp', 'kepala_keluarga', 'tempat_lahir', 'tanggal_lahir', 'jk'];

    function getWarga($id = null)
    {
        return ($id) ? $this->find($id) : $this->findAll();
    }
}
