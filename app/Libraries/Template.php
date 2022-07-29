<?php

namespace App\Libraries;

class Template
{
    public function render($view, $data = [])
    {
        echo view('pars/tema_atas', $data);
        echo view($view, $data);
        echo view('pars/tema_bawah');
    }
}
