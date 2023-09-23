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

    public function pages()
    {
        return view('page');
    }
}
