<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .title{
                display: grid;
                grid-template-columns: 50% 50%;
                align-items: center;
                justify-content: center;
            }
            .title h1{
                color: #636b6f;
                text-align: center;
                padding: 0 25px;
                font-size: 36px;
                font-weight: lighter;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="title">
                
                @php
                    $json_saludos = file_get_contents(base_path('resources/js/saludos.json'));
                    $saludos = json_decode($json_saludos);
                @endphp

                @foreach($saludos as $saludo)
                <h1
                    @if(isset($color))
                        style="color:#{{$color}}"
                    @endif
                >
                    {{$saludo}}

                    @if(isset($nombre) && $nombre)
                        {{$nombre}}
                    @endif
                    @if(isset($apellido))
                        {{$apellido}}
                    @endif
                    !
                </h1>
                @endforeach
            </div>
            <div class="links">
                @php
                    // da un valor por defecto al nombre e inicializa la variable apellido si no está definida
                    if(!isset($nombre)) $nombre = "koldo";
                @endphp
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('saludar')}}">Saludar</a>
                <a href="{{route('saludar',['nombre'=>$nombre,'apellido'=>$apellido])}}">Saluda a {{$nombre}} {{$apellido}}</a>
                <a href="{{route('saludar',['nombre'=>$nombre,'color'=>'f56042','apellido'=>$apellido])}}">Saludar a {{$nombre}} {{$apellido}} en rojo</a>
                <a href="{{route('saludar',['nombre'=>$nombre,'color'=>'428df5','apellido'=>$apellido])}}">Saludar a {{$nombre}} {{$apellido}} en azul</a>
            </div>
        </div>
    </body>
</html>

