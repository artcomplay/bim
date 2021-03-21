<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="b577f299055f54fe" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <meta name="description" content="Бегущая строка" />
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Italianno&family=Merienda+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/static/market-slider.css">
        <title>БрестИнтерМаркет</title>


    </head>
    <body class="antialiased rect parallax" style='overflow-x:hidden;'>
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

        <div class="bg" style="overflow-x:hidden;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="head">
                <header-component></header-component>

                <div class="main-content container">
                    <div class="row main-content-row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3" id="left-space" style="padding-right: 0px;">
                            <leftbar-component id="leftbar"></leftbar-component>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9" id="main-space" style="padding-left: 0px;">

                            <div class="container-fluid">
                                <div class="market-info" id="m-i-1"><h1>Бегущая строка</h1></div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class=""><img src="image/info-block/line.png" alt="" class="gallery-image"></div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="awi desc-work">
                                            <h4 class="desc-work-title">Технические характеристики:</h4>
                                            <p>- Разрешение: наиболее популярное разрешение — р10 (расстояние между светодиодами 10 мм.) На каждый квадратный метр дисплея с разрешением p10 придется 1000 светодиодов.
                                             Распространены также p20, p7, p5 и p3. Чем ниже цифра тем меньше расстояние между диодами. Соответственно выше разрешение.</p>
                                            <p>- Яркость светодиодов и потребляемая мощность: различные цвета диодов обладают разной яркостью.
                                             Красные диоды наименее яркие (3000 Кельвин) при этом потребление энергии самое скромное. Белые — самые яркие (8000 Кельвин).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid main-text-container">
                                <p>Бегущая строка — электронное устройство, рабочее полотно которого выполнено из светодиодов.
                                 Предназначена для трансляции текста и простых картинок (как статичных так и анимированных).
                                Бегущие строки изготавливаются из модулей. Стандартный размер светодиодного модуля 32 на 16 см.
                                 Размер рабочей поверхности зависит от количества модулей и кратен их величине.
                                  У светодиодной строки есть свой собственный контроллер который управляет изображением.
                                   Устройство имеет автономную память, компьютер требуется только для обновления текста.
                                Корпус строки собирается из специального алюминиевого профиля.
                                </p>
                            </div>

                            <shemework-component id="shemework"></shemework-component>

                            <partners-component id="partners"></partners-component>

                            <yandex-component id="yandex"></yandex-component>
                        </div>

                    </div>
                </div>
                <footer-component id="footer"></footer-component>
            </div>
        </div>

        
        <script src="{{ asset('js/app.js') }}"></script>     
        <script src="{{ asset('js/ism-2.2.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

    </body>
</html>
