<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        
        <!-- CSS Personalizado -->
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>

    <body>
        @include('app.layouts._partials.topo')
        @yield('conteudo')

        <script src="js/masks.js"></script>
    </body>
</html>