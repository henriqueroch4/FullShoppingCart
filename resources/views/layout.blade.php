<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('min/fullshoppingcart.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/header.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between align-items-center">
            <a class="navbar navbar-expand-lg" href="/">FullShoppingCart</a>
            @auth
            <span class="d-flex align-items-center">
                <a href="javascript:" class="material-icons" id="cart-icon">shopping_cart</a>
                <div class="holder-account-icon align-items-center">
                    <a href="{{route('my_account')}}" class="material-icons" id="account-icon"style="position:relative; text-decoration:none;">account_circle</a>
                    <div class="container account-dropdown list-group" id="account-dropdown" style="display:none">
                        <a href="#" class="list-group-item list-group-item-action">Minha conta</a>
                        <a href="#" class="list-group-item list-group-item-action">Meus pedidos</a>
                        <a href="#" class="list-group-item list-group-item-action">Sair</a>
                    </div>
                </div>
                    
                
            </span>
            
            @endauth
            @guest
                <a href="/entrar" class="navbar navbar-expand-lg">Entrar</a>    
            @endguest
        </nav>
        
        @yield('content')
        
    
    <script src="{{URL::asset('js/plugins/jQuery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/header.js')}}"></script>
</body>
</html>