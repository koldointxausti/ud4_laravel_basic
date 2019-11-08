<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contacto</title>

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
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
            }
            .title h1{
                color: #636b6f;
                padding: 0 25px;
                font-size: 36px;
                font-weight: lighter;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .bold{
                font-weight: bold; 
                margin-right: .5em;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="title">
                <h1>Contacto</h1>
                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                    <a href="{{route('blog.id',['id'=>3])}}">Blog sin nombre</a>
                    <a href="{{route('blog.name',['id'=>3,'name'=>'Koldo'])}}">Blog con nombre</a>
                </div>
            </div>
            <div class="content">
                <ul>
                    @if(isset($dni))
                        <li><span class="bold">DNI:</span> {{$dni}}</li>
                    @endif
                    <li>
                        <span class="bold">Nombre:</span>
                        @if(isset($nombre))
                            {{$nombre}}
                        @else
                            Koldo
                        @endif
                    </li>
                    <li>
                        <span class="bold">Apellido:</span>
                        @if(isset($apellido))
                            {{$apellido}}
                        @else
                            Intxausti
                        @endif
                    </li>
                    @if(isset($email))
                        <li><span class="bold">Correo electrónico:</span> {{$email}}</li>
                    @endif
                    @if(isset($telefono))
                        <li><span class="bold">Teléfono:</span> {{$telefono}}</li>
                    @endif
                </ul>
            </div>
        </div>
    </body>
</html>
