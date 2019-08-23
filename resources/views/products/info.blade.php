@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/products_page.css')}}">
@endsection
@section('title')
    Produto
@endsection

@section('header')
    {{$product->name}}
@endsection

@section('content')
      <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group" action="/produtos/criar/">
            <label for="name">Nome do produto: </label>
            <input type="text" class="form-control" name='name' id="name" placeholder="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="price">Preço do produto: </label>
            <input type="number" step="0.01" class="form-control" name='price' id="price" placeholder="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="price">Categoria do produto: </label>
            <select class="custom-select" name="category_id">
                @foreach ($categories as $category)
                    <option name="category_id" value="{{$category->id}}" {{($category->id==$productCategory->id)?'selected':''}}>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <img src="{{URL::asset('storage/'."$product->image_url")}}" alt="">
        </div>

        <div class="form-group" style="display:none">
            <label for="image">Imagem do produto: </label>
            <input type="file" class="form-control" name='image' id="image" placeholder="Insira a imagem do produto">
        </div>
        <button type="submit" class="btn btn-primary float-right">
            Salvar alteraçōoes
        </button>
      </form>
    
@endsection