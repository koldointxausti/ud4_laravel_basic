<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario de Contacto</title>

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
                margin-bottom: 1%;
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
            form{
                margin-bottom: 2em;
            }
            #datos-formulario{
                display: grid;
                grid-template-columns: 50% 50%;
                align-items: center;
                justify-content: center;
            }
            #datos-formulario > h2{
                color: #636b6f;
                text-align: center;
                padding: 0 25px;
                font-size: 36px;
                font-weight: lighter;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            #datos-formulario > h2 > span{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="flex-center full-height">
            <div class="title">
                <h1>Formulario de contacto</h1>
                <div class="links">
                    <a href="{{route('home')}}">Home</a>
                </div>
            </div>
            <form action="{{route('formContacto')}}" method="post">
                @csrf
                <h3>Introduzca sus datos de contacto</h3>
                <input type="text" name="nombre" placeholder="Nombre">
                <input type="text" name="apellido" placeholder="Apellido">
                <input type="email" name="email" placeholder="Correo electrónico">
                <input type="number" name="telefono" placeholder="Teléfono (Opcional)">
                <input type="submit" value="Enviar">
            </form>
            @if(isset($error))
                <span style="color:tomato; font-weight: bold;">{{$error}}</span>
            @endif
        </div>
    </body>
</html>
