@extends('layout')

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
    
    <script src="{{URL::asset('js/main.js')}}"></script>
@endsection