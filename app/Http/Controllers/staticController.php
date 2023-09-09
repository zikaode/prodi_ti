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
    public function pengumuman()
    {
        return view('pengumuman');
    }
}
