<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return view('aluno.index');
    }

    public function adicionar(Request $dados)
    {
       dd($dados->all());
    }

    public function remover()
    {
        return view('aluno.remover');
    }

    public function atualizar()
    {
        return view('aluno.atualizar');
    }

    public function consultar()
    {
        return view('aluno.consultar');
    }
}
