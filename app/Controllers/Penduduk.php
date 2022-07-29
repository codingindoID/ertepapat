<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MPenduduk;

class Penduduk extends BaseController
{
    public function __construct()
    {
        $this->modelPenduduk = new MPenduduk();
    }
    public function index()
    {
        $data = [
            'active'    => 'penduduk',
            'title'     => 'Master',
            'sub'       => 'Penduduk',
            'icon'      => 'icofont-chart-histogram',
            'rekap'     => $this->modelPenduduk->findAll()
        ];

        $this->template->render('penduduk/index', $data);
    }

    function formTambahPenduduk()
    {
        $data = [
            'active'    => 'penduduk',
            'title'     => 'Master',
            'sub'       => 'Form Tambah Penduduk',
            'icon'      => 'icofont-paperclip'
        ];

        $this->template->render('penduduk/form-penduduk', $data);
    }

    function submitPenduduk()
    {
        $var = $this->request->getVar();
        // dd($var);
        $cek =  $this->modelPenduduk->save($var);
        return redirect()->back()->with($cek ? 'success' : 'error', $cek ? 'Data Disimpan' : 'gagal');
    }
}
