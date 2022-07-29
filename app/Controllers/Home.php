<?php

namespace App\Controllers;

class Home extends BaseController
{
    function __construct()
    {
    }
    public function index()
    {
        $data = [
            'active'    => 'beranda',
            'title'     => 'beranda',
            'sub'       => 'beranda',
            'icon'      => 'icofont-home'
        ];
        $this->template->render('index', $data);
    }
}
