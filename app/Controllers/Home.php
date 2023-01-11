<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('home/index', $data);
    }

    public function blogs()
    {
        $data = [
            'title' => 'Blog'
        ];
        return view('home/blogs', $data);
    }
}
