@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <?php 
    if ($categoria) {
        ?>
        <h1> {{"Estamos en el curso $curso de la categoría $categoria"}}</h1>
        <?php
    }else {
        ?>
        <h1>{{"Estamos en el curso $curso"}}</h1>
        <?php
    }
    ?>
@endsection
