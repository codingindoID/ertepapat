<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Domisili extends BaseController
{
    public function mutasi($id = null)
    {
        echo ($id) ? $id : 'kosong';
    }
}
