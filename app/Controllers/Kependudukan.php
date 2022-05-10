<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kependudukan extends BaseController
{
    public function kartuKeluarga($id = null)
    {
        echo ($id) ? $id : 'tidak ada';
    }
}
