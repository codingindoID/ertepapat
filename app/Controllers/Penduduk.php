<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPenduduk;

class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->MPenduduk = new MPenduduk();
    }
    public function index()
    {
        $data = [
            'active'    => 'penduduk',
            'title'     => 'Master',
            'sub'       => 'Penduduk',
            'icon'      => 'icofont-chart-histogram',
            'rekap'     => $this->MPenduduk->findAll()
        ];

        $this->template->render('penduduk/index', $data);
    }

    function formTambahPenduduk()
    {
        $data = [
            'active'    => 'penduduk',
            'title'     => 'Master',
            'sub'       => 'Form Tambah Penduduk',
            'icon'      => 'icofont-paper'
        ];

        $this->template->render('penduduk/form-penduduk', $data);
    }
}
