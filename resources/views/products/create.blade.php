@extends('layout')

@section('title')
    Produtos
@endsection

@section('header')
    Cadastrar produtos
@endsection

@section('content')

    <form method="POST">
        @csrf
        <div class="form-group" action="/produtos/criar/">
            <label for="exampleInputEmail1">Nome do produto: </label>
            <input type="text" class="form-control" name='name' id="name" placeholder="Insira o nome do produto">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Preço do produto: </label>
            <input type="float" class="form-control" name='price' id="price" placeholder="Insira o preço do produto">
        </div>
        <select class="custom-select" id="categoriesSelect" name="categoriesNames">
        <option selected>Categoria do produto</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="exampleInputEmail1">Imagem do produto: </label>
            <input type="file" class="form-control" name='image' id="image" placeholder="Insira a imagem do produto">
        </div>
        <button type="submit" class="btn btn-primary">
            Cadastrar
        </button>
    </form>
@endsection