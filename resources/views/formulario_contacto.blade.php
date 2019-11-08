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
            #error-container{
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
            }
            .error{
                flex-basis:calc(30% - 2em);
                color:white;
                background-color: tomato; 
                border-radius: 1em; 
                padding: .5em 1em; 
                margin: .5em 0;
                font-weight: bold;
                cursor: default;
                display: flex;
                align-items: center;
            }
            .error:hover{
                box-shadow: 1px 1px 7px gray;
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

            <!-- USANDO MIS COMPROBACIONES (formContacto)
            <form action="{{--route('formContacto')--}}" method="post">-->

            <!-- USANDO LA FUNCIÓN VALIDATE DE LARAVEL (formContacto) -->
            <form action="{{route('formContactoValidar')}}" method="post">
                @csrf
                <h3>Introduzca sus datos de contacto</h3>
                <input type="text" name="dni" placeholder="DNI" value="{{old('dni')}}">
                <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
                <input type="text" name="apellido" placeholder="Apellido" value="{{old('apellido')}}">
                <input type="email" name="email" placeholder="Correo electrónico" value="{{old('email')}}">
                <input type="number" name="telefono" placeholder="Teléfono (Opcional)" value="{{old('telefono')}}">
                <input type="submit" value="Enviar">
            </form>
            <!-- USANDO MIS COMPROBACIONES (formContacto) -->
            @if(isset($error))
                <span style="color:tomato; font-weight: bold;">{{$error}}</span>
            @endif
            <!-- USANDO LA FUNCIÓN VALIDATE DE LARAVEL (formContacto) -->
            @if($errors->any())
                <h3>Errores</h3>
                <div id="error-container">
                    @foreach($errors->all() as $error)
                        <span class="error">{{$error}}</span>
                    @endforeach
                </div>
            @endif
        </div>
    </body>
</html>
