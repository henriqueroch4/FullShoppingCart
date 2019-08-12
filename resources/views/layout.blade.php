<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
            <a class="navbar navbar-expand-lg" href="/">Home</a>
            @auth
                <a href="/sair" class="navbar navbar-expand-lg text-danger">Sair</a>    
            @endauth
            @guest
                <a href="/entrar" class="navbar navbar-expand-lg">Entrar</a>    
            @endguest
        </nav>
    <div class="container">
        <div class="jumbotron mt-2">
            <h1 class="display-4">@yield('header')</h1>
        </div>   
    @yield('content')
    </div>
</body>
</html>