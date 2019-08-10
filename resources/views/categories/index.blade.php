@extends('layout')

@section('title')
    Categorias
@endsection

@section('conteudo')
    <div class="container">
            <div class="jumbotron mt-2">
                <h1 class="display-4">Categorias</h1>
            </div>    
            <ul class="list-group">
                @foreach ($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span id="{{$category['id']}}">{{$category['name']}}</span>
                        <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button> 
                    </li>
                @endforeach
            </ul>
            <a class="btn btn-primary mt-2 float-right" href="{{route('cadastrar.categoria')}}">Cadastrar categoria</a>
    </div>
    
@endsection