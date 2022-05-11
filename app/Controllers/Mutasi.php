<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mutasi extends BaseController
{
    public function dataDomisili($id = null)
    {
        echo ($id) ? $id : 'data kosong';
    }
}
