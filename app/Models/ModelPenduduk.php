<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenduduk extends Model
{
    function getWarga($id = null)
    {
        if ($id) {
            return $this->db->table('data_warga')->getWhere(['id_warga' => $id])->getResultArray();
        }
        return $this->db->table('data_warga')->get()->getResultArray();
    }
}
