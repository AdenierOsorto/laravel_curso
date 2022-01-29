<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('curso.index');
    }

    public function create(){
        return view('curso.create');
    }

    public function show($curso, $categoria = null){
        // return view('curso.show', ['curso' => $curso, 'categoria' => $categoria]);
        return view('curso.show', compact('curso', 'categoria'));
    }
}
