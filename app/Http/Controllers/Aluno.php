<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{   
    function show(){
    $alunos = [
        (Object) ['nome'=> 'Diogo', 'telefone'=>'123', 'email'=>'diogo@hotmail.com'],
        (Object) ['nome'=> 'Seleide', 'telefone'=>'321', 'email'=>'seleide@hotmail.com'],
        (Object) ['nome'=> 'Filoxina', 'telefone'=>'999', 'email'=>'filo@hotmail.com'],
    ];

    return view('aluno', compact('alunos'));
    }

    function professor_show(){
        $professores = [
            (Object) ['nome'=> 'Diogo', 'telefone'=>'123'],
            (Object) ['nome'=> 'Felipe', 'telefone'=>'321'],
    
        ];
    
        return view('professor', compact('professores'));
}

    function curso_show(){
    $cursos = [
        (Object) ['curso'=> 'Desenvolvimento Sistemas', 'horario'=>'Tarde'],
        (Object) ['curso'=> 'Administração', 'horario'=>'Noite'],

    ];

    return view('curso', compact('cursos'));
}

function componente_show(){
    $componentes = [
        (Object) ['componente'=> 'PW', 'horario'=>'Tarde'],
        (Object) ['componente'=> 'Finanças', 'horario'=>'Noite'],

    ];

    return view('componente', compact('componentes'));
}


}