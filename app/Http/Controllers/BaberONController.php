<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaberONController extends Controller
{
    public function __construct()
    {
        // Aplica o middleware de autenticação a todas as ações deste controlador
        $this->middleware('auth');
    }

    public function index()
    {
        return view('BaberON.index');
    }
}
