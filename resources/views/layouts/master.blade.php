<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Control Stock</title>

        <!-- importacion de CSS -->
        @include('styles')

    </head>
    <body>

        @include('layouts.partials.navigation')
        @include('layouts.partials.header')

        {{-- Esta clase muestra las notificaciones --}}
        <div class='notifications top-right'></div>

        {{-- Esta clase contiene la vista --}}
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-md-offset-0">
                        @yield('content')
                    </div>
                </div>
        </div>

        {{-- Importacion de librerias externas --}}
        @include('scripts')
        {{-- Importacion del creador de la tabla --}}
        @include('table_creator')
        @include('layouts.partials.footer')
        {{-- Controlador de errores --}}
        @include('error_handler')
    </body>
</html>
