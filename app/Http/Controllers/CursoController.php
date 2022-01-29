<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bienvenido a los cursos!";
    }

    public function create(){
        return 'Crear un cruso';
    }

    public function show($curso, $categoria = null){
        if ($categoria) {
            return "Estamos en el curso $curso de la categoria $categoria";
        }else {
            return "Estamos en el curso $curso";
        }
    }
}
