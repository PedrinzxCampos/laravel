<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    public function principal()
    {
        return view('principal');
    }
    public function contato()
    {
        return view('contato');
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function produtos()
    {
        return view('produtos');
    }
}