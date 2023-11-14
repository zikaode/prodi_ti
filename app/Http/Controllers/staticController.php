<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticController extends Controller
{
    /**
     * Display a Index Of Web.
     */

    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function dataMahasiswa()
    {
        return view('dataMahasiswa');
    }

    public function strukturPimpinan()
    {
        return view('strukturPimpinan');
    }

    public function kuesionerMahasiswa()
    {
        return view('kuesionerMahasiswa');
    }

    public function kuesionerAlumni()
    {
        return view('kuesionerAlumni');
    }

    public function dataDosen()
    {
        return view('dataDosen');
    }

    public function laboratorium()
    {
        return view('laboratorium');
    }
    // public function ruangdosen()
    // {
    //     return view('ruangdosen');
    // }

    public function ruang()
    {
        return view('ruang');
    }

    public function general()
    {
        return view('general');
    }

    public function perpustakaan()
    {
        return view('perpustakaan');
    }

    public function pages($param)
    {
        switch ($param) {
            case '1':
                return view('pages.first');
                break;
            case '2':
                return view('pages.second');
                break;
            case '3':
                return view('pages.third');
                break;
            case '4':
                return view('pages.fourth');
                break;
            default:
                abort(404);
                break;
        }
    }

    public function kurikulum()
    {
        return view('kurikulum');
    }

    public function berita()
    {
        return view('berita');
    }
}
