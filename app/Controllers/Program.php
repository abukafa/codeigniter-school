<?php

namespace App\Controllers;

class Program extends BaseController
{
    public function karakter()
    {
        $data = [
            'title' => 'Program'
        ];
        return view('program/karakter', $data);
    }

    public function teknologi()
    {
        $data = [
            'title' => 'Program'
        ];
        return view('program/teknologi', $data);
    }

    public function wirausaha()
    {
        $data = [
            'title' => 'Program'
        ];
        return view('program/wirausaha', $data);
    }
}
