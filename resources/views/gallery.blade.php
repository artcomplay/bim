<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Italianno&family=Merienda+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/static/market-slider.css">
        <title>БрестИнтерМаркет</title>


    </head>
    <body class="antialiased rect parallax">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="bg">
            <div class="col-12" id="head">
                <header-component></header-component>

                <div class="main-content container" style="height: 100%;">
                    <div class="row main-content-row">


                        <div class="col-sm-12" style="padding: 30px;">
                            <div class="container-fluid">
                                <div class="market-info"><h1>Изготовление рекламных конструкций любой сложности</h1><img class="icons-front" src="image/icons/design-tools.png" alt=""></div>
                            </div>

                            <div class="container">
                                <div class="gallery">
                                    @foreach($photo as $photo_src)
                                        <div class="gallery-item">
                                            <img class="gallery-image" src="storage/gallery/{{ $photo_src }}" alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <yandex-component id="yandex" style="margin-top: 106px; margin-left: 44.6%;"></yandex-component>
                        </div>
                    </div>
                </div>
                <footer-component id="footer"></footer-component>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
