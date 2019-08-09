@extends('layout')

@section('title')
    Categorias
@endsection

@section('conteudo')
    <div class="container">
            <div class="jumbotron">
                <h1 class="display-4">Categorias</h1>
            </div>    
            <a class="btn btn-primary text-white" href="{{route('cadastrar.categoria')}}">Cadastrar categoria</a>
    </div>
    
@endsection