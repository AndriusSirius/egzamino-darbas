<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atsiliepimai;

class AtsiliepimaiController extends Controller
{
    public function index()
    {
        $atsiliepimai = Atsiliepimai::all();
        return view('atsiliepimai.atsiliepimai', compact('atsiliepimai'));
    }
}
