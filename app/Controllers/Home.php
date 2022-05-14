<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    function __construct()
    {
        $this->model = new HomeModel();
    }
    public function index()
    {
        $data = [
            'title'             => 'Home',
            'sub_title'         => 'home',
            'active'            => 'home',
            'icon'              => 'ti-home',
            'count'             => $this->model->getData()
        ];
        // dd($data);
        return $this->template->render('home/index', $data);
    }
}
