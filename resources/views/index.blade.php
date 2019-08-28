@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">
@endsection

@section('title')
    Home
@endsection

@section('content')
    <ul class="list-holder">
        @foreach ($products as $product)
            <li class="box-product" data-id={{$product->id}}>
                @include('product_box', ['product'=>$product])
            </li>
        @endforeach
    </ul>
    
@endsection