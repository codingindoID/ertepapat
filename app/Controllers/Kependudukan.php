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

    public function dataWarga()
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

    function simpanWarga()
    {
        $post = $this->request->getVar();
        $cek = $this->model->save($post);
        $page = redirect()->to('/data-warga');
        return ($cek) ? $page->with('success', 'data disimpan') : $page->with('error', 'data gagal disimpan');
    }

    function hapusWarga($id)
    {
        $cek = $this->model->delete($id);
        $page = redirect()->to('/data-warga');
        return ($cek) ? $page->with('success', 'sukses hapus data') : $page->with('error', 'gagal hapus data');
    }

    function ajaxDetailWarga()
    {
        $post = $this->request->getVar('id_warga');
        $data = $this->model->getWarga($post);
        echo json_encode($data);
    }


    /* KARTU KELUARGA */
    function dataKK()
    {
        $data = [
            'title'             => 'Data Kependudukan',
            'sub_title'         => 'data warga',
            'active'            => 'dataWarga',
            'icon'              => 'ti-user',
            'warga'             => $this->model->getWarga(),
        ];
        // dd($data);
        return $this->template->render('kependudukan/kartuKeluarga', $data);
    }
}
