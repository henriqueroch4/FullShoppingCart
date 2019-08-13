@extends('layout')

@section('css')
    <link rel="stylesheet" href="{{URL::asset('css/products_page.css')}}">
@endsection
@section('title')
    Produtos
@endsection

@section('header')
    Produtos
@endsection

@section('content')
        
            {{-- <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="{{$product->id}}">{{$product->name}}</span>
                <span class="d-flex">
                    <a href="produtos/{{$product->id}}" class="btn btn-info btn-sm mr-1"><i class="material-icons">launch</i></a>
                    <form action="/produtos/{{$product->id}}" method="post" onsubmit="return confirm('Tem certeza que deseja remover o produto {{$product->name}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                    </form>
                </span> 
            </li> --}}
            <div class="container">
                <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">
                                <div>
                                    <input type="checkbox" onclick="checkAll(event)">
                                </div>
                            </th>
                            <th scope="col">ID #</th>
                            <th scope="col"></th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td style="width:10px;">
                                    <div>
                                        @csrf
                                        <input type="checkbox" name="products[]" value="{{$product->id}}">
                                    </div>
                                </td>
                                <td style="width:80px;">{{$product->id}}</td>
                                <td style="width:53px;"><img src="{{url('storage/').'/'.$product->image_url}}" alt="" class="product-img"></td>
                                <td>{{$product->name}}</td>
                                <td style="width:150px;">{{number_format($product->price, 2, '.', '')}}</td>
                                <td style="width:100px; text-align:center;">{{$category::find($product->category_id)->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
                <button class="btn btn-dark" onclick="getCheckedInput()">Deletar</button>
            </div>
           
    <a class="btn btn-primary mt-2 float-right" href="produtos/criar">Cadastrar produto</a>
    <script>
        function getCheckedInput(){
            let formData = new FormData();
            var checkbox = document.querySelectorAll("input[name='products[]']");
            checkbox.forEach(element => {
                if(element.checked){
                    formData.append('id',element.value)
                    formData.append
                    var url=`/produtos/${element.value}`;
                    fetch(url, {
                        body: formData,
                        method: 'DELETE'
                    }).then(()=>{
                        console.log("sucesso");
                    });
                    formData.delete('id');
                }
            });
            
        }
        function checkAll(e){
            console.log(e.target.checked);
            var checkbox = document.querySelectorAll("input[name='products[]']");
            if(e.target.checked){
                checkbox.forEach(element => {
                    element.checked=true;
                });
            }else{
                checkbox.forEach(element => {
                    element.checked=false;
                });
            }
            
           
           
        }
    </script>
@endsection