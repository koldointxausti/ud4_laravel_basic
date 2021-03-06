<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>

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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="title">
                <h1>Este es el artículo numero {{$id}}</h1>
            </div>
            <div class="links">
                <a href="{{route('home')}}">Home</a>
                <a href="{{route('contacto')}}">Contacto</a>
            </div>
            @if(isset($name))
                <div class="content" style="margin-top: 5%; font-size: 24px;">
                    El id {{$id}}, corresponde a {{$name}}.
                </div>
            @endif
        </div>
    </body>
</html>
