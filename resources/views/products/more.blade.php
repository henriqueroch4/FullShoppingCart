@extends('layout')

@section('title')
    Produto
@endsection

@section('header')
    {{$product->name}}
@endsection

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="{{url('storage/').'/'.$product->image_url}}" alt="" class="img-thumbnail"></td>
                <td>{{$product->price}}</td>
                <td>{{$product->category_id}}</td>
            </tr>
        </tbody>
    </table>
@endsection