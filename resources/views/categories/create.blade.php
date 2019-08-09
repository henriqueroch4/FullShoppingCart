@extends('layout')

@section('title')
    Categorias
@endsection

@section('conteudo')
    <div class="container mt-5">
            <form>
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Categoria:</label>
                    <input type="text" class="form-control" name='name' id="name" placeholder="Insira o nome da categoria">
                </div>
                <a type="submit" class="btn btn-primary text-white" href='cadastrar/nova'>
                    Cadastrar
                </a>
            </form>
    </div>
    
@endsection