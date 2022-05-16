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

    function getKepalaKeluarga($id)
    {
        return $this->db->table('warga')->getWhere(['kepala_keluarga' => 'Y', 'no_kk' => $id])->getRow();
    }

    function getKK($id)
    {
        $table = $this->db->table('warga');
        $table = ($id) ? $table->getWhere(['no_kk' => $id]) : $table->getWhere(['kepala_keluarga' => 'Y']);
        return $table->getResultArray();
    }
}
