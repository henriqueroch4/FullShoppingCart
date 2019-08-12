@extends('layout')

@section('title')
    Produtos
@endsection

@section('header')
    Produtos
@endsection

@section('content')
<ul class="list-group">
        @foreach ($products as $product)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="{{$product->id}}">{{$product->name}}</span>
                <span class="d-flex">
                    <a href="" class="btn btn-info btn-sm mr-1"><i class="material-icons">edit</i></a>
                    <form action="/categorias/{{$product->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja remover o produto {{$product->name}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                    </form>
                </span>
                
                    
            </li>
        @endforeach
    </ul>
    <a class="btn btn-primary mt-2 float-right" href="produtos/criar">Cadastrar produto</a>
@endsection