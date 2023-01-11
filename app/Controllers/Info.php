<?php

namespace App\Controllers;

class Info extends BaseController
{
    public function jadwal()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/jadwal', $data);
    }

    public function agenda()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/agenda', $data);
    }

    public function foto()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/galeri-foto', $data);
    }

    public function video()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/galeri-video', $data);
    }

    public function form()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/form', $data);
    }

    public function ppdb()
    {
        $data = [
            'title' => 'Informasi'
        ];
        return view('info/ppdb', $data);
    }
}
