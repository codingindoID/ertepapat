<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenduduk;

class Kependudukan extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelPenduduk();
    }

    public function dataWarga($id = null)
    {
        $data = [
            'title'             => 'Data Kependudukan',
            'sub_title'         => 'data warga',
            'active'            => 'dataWarga',
            'icon'              => 'ti-user',
            'warga'             => $this->model->getWarga(),
        ];
        // dd($data);
        return $this->template->render('kependudukan/dataWarga', $data);
    }
}
