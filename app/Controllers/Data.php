<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data'
        ];
        return view('data/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Data'
        ];
        return view('data/login', $data);
    }
}
