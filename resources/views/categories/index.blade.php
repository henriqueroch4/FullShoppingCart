@extends('layout')

@section('title')
    Categorias
@endsection


@section('content')

@include('header', ["title"=>"Categorias"])

    <div class="container mt-5">
        @include('message', ['message' => $message]) 
        <ul class="list-group">
            @foreach ($categories as $category)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span id="{{$category->id}}">{{$category->name}}</span>
                    <span class="d-flex">
                        <a href="" class="btn btn-info btn-sm mr-1"><i class="material-icons">edit</i></a>
                        <form action="/categorias/{{$category->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja remover a categoria {{$category->name}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                        </form>
                    </span>
                    
                        
                </li>
            @endforeach
        </ul>
        <a class="btn btn-primary mt-2 float-right" href="{{route('cadastrar.categoria')}}">Cadastrar categoria</a>    
    </div>

@endsection