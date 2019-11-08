<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <title>@yield('titre')</title>
</head>
<body>
    <div class="interface">
        @include('layout.header')
        @include('layout.footer')
        <div class="body">
            @section("contenu")
            <h1>Bienvenue sur ma page</h1>
            @show
        </div>
    </div>
</body>
</html>
