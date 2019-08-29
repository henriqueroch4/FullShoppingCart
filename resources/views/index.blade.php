@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">
    <link rel="stylesheet" href="{{URL::asset('js/plugins/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('js/plugins/owlcarousel/assets/owl.theme.default.min.css')}}">
@endsection

@section('title')
    Home
@endsection

@section('content')

    <div class="container">
        <ul class="list-holder">
            @foreach ($products as $product)
                <li class="box-product align-top" data-id={{$product->id}}>
                    @include('product_box', ['product'=>$product])
                </li>
            @endforeach
        </ul>
    </div>
    
    <script src="{{URL::asset('js/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection