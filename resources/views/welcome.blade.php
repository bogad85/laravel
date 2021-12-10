<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ВСЕАВТОЗАПЧАСТИ.РУС</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
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
                text-align: center;
            }

            .title {
                font-size: 48px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 200;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md > a {
                color: #008000;
                font-size: 48px;
                font-weight: 600;
                margin-bottom: 30px;
                letter-spacing: .1rem;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <a href="http://galvani.bogad85.beget.tech">ВСЕАВТОЗАПЧАСТИ.РУС</a>
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Автозапчасти</a>
                    <a href="https://laracasts.com">Масла и автохимия</a>
                    <a href="https://laravel-news.com">Шины и диски</a>
                    <a href="https://blog.laravel.com">Аксессуары</a>
                    <a href="https://github.com/laravel/laravel">Контакты</a>
                </div>
            </div>
        </div>
    </body>
</html>
