<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title'             => 'Home',
            'sub_title'         => 'home',
            'active'            => 'home',
            'icon'              => 'ti-home',
        ];
        return $this->template->render('home/index', $data);
    }
}
