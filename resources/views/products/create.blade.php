@extends('layout')

@section('title')
    Produtos
@endsection

@section('header')
    Cadastrar produtos
@endsection

@section('content')

    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" action="/produtos/criar/">
            <label for="name">Nome do produto: </label>
            <input type="text" class="form-control" name='name' id="name" placeholder="Insira o nome do produto">
        </div>
        <div class="form-group">
            <label for="price">Preço do produto: </label>
            <input type="number" step="0.01" class="form-control" name='price' id="price" placeholder="Insira o preço do produto">
        </div>
        <div class="form-group">
            <label for="price">Preço do produto: </label>
            <select class="custom-select" name="category_id">
                <option selected value=null>Categoria do produto</option>
                @foreach ($categories as $category)
                    <option name="category_id" value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="image">Imagem do produto: </label>
            <input type="file" class="form-control" name='image' id="image" placeholder="Insira a imagem do produto">
        </div>
        <button type="submit" class="btn btn-primary">
            Cadastrar
        </button>
    </form>
    
@endsection