<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'warga';
    // protected $primaryKey       = 'id';
    // protected $allowedFields    = [];

    function getData()
    {
        return [
            'warga'     => $this->countAllResults()
        ];
    }
}
