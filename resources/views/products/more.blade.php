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
    {{-- <div class="container main-container">
        <div class="row">
          <div class="col-sm">
            <span id="product-name" class="mb-3"><strong>{{$product->name}}</strong></span>
            
            
          </div>
          <div class="col-sm">
                <img src="{{url('storage/').'/'.$product->image_url}}" alt="" class="float-right">
          </div>
        </div>
        <div class="row">
            <div class="col-sm"><span id="product-price" class="m-4">{{$product->price}}</span></div>
        </div>
    </div> --}}
    <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">
                    <div>
                        <input type="checkbox">
                    </div>
                </th>
                <th scope="col">ID #</th>
                <th scope="col"></th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Categoria</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <div>
                        <input type="checkbox">
                    </div>
                </td>
                <td></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td></td>
              </tr>
              <tr>
                <td>
                    <div>
                        <input type="checkbox">
                    </div>
                </td>
                <td></td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td></td>
              </tr>
              <tr>
                <td>
                    <div>
                        <input type="checkbox">
                    </div>
                </td>
                <td></td>
                <td></td>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td></td>
              </tr>
            </tbody>
          </table>
    <button class="btn btn-primary float-right">Editar produto</button>
@endsection