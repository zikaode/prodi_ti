<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commonController extends Controller
{
    /**
     * Display a Index Of Web.
     */
    
    public function index()
    {
        return view('home');
    }
}
