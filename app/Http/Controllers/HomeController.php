<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function apie_mus()
    {
        return view('apie-mus');
    }

    public function paslaugos()
    {
        return view('paslaugos');
    }

    public function kontaktai()
    {
        return view('kontaktai');
    }
}

