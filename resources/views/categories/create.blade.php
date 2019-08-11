@extends('layout')

@section('title')
    Categorias
@endsection

@section('header')
    Categorias
@endsection

@section('content')
    <div class="container mt-5">
            <form method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria:</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Insira o nome da categoria">
                </div>
                <button type="submit" class="btn btn-primary">
                    Cadastrar
                </button>
            </form>
    </div>
    
@endsection