<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{-- Estiles --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="error">
            @yield('error_image')
            <h1 class="error__title">@yield('error_title')</h1>
            <p class="error__paragrap" >@yield('error_paragrap')</p>
            <a href="/" class="error__btn">Ir a Inicio</a>
        </div>
    </body>
</html>
