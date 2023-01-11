<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function data()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/data', $data);
    }

    public function prestasi()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/prestasi', $data);
    }

    public function ekskul()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/ekskul', $data);
    }

    public function osis()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/osis', $data);
    }

    public function beasiswa()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/beasiswa', $data);
    }

    public function tatatertib()
    {
        $data = [
            'title' => 'Siswa'
        ];
        return view('siswa/tata-tertib', $data);
    }

    public function alumni()
    {
        $data = [
            'title' => 'Alumni'
        ];
        return view('siswa/alumni', $data);
    }
}
