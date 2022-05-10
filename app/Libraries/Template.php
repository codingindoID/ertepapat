<?php

namespace App\Libraries;

class Template
{
    public function render($view, $data = [])
    {
        echo view('pars/template_atas', $data);
        echo view($view, $data);
        echo view('pars/template_bawah');
    }
}
