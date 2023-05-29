<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <title>Super Gestão - Sobre Nós</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">
    </head>
<body>
<html>
    @include('site.layouts._partials.topo')
    @yield('conteudo')
</body>
</html>