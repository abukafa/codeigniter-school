<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function pengantar()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/pengantar', $data);
    }

    public function sejarah()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/sejarah', $data);
    }

    public function visimisi()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/visi-misi', $data);
    }

    public function struktur()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/struktur', $data);
    }

    public function kepala()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/kepala', $data);
    }

    public function komite()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/komite', $data);
    }

    public function guru()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/guru', $data);
    }

    public function sarana()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/sarana', $data);
    }

    public function hymne()
    {
        $data = [
            'title' => 'Profil'
        ];
        return view('profil/hymne', $data);
    }
}
