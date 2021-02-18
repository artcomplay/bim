<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="b577f299055f54fe" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
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
                                <div class="market-info" id="m-i-1"><h1>Cветовые короба</h1></div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class=""><img src="image/info-block/corob.png" alt="" class="gallery-image"></div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="awi desc-work">
                                            <h4 class="desc-work-title">Характеристики:</h4>
                                            <p>- Борта склеены из ПВХ 3-5 мм. или выполняются с использованием различных спецпрофилей в зависимости от размеров</p>
                                            <p>- Задняя стенка — ПВХ 5-10 мм. либо возможна установка оцинкованного листа, металлокаркас в зависимости от размеров</p>
                                            <p>- Изображение – печать или аппликация пленкой</p>
                                            <p>- Внутренняя подсветка – светодиодные модули. Яркость и частота установки модулей опредиляются индивидуальными особенностями изделия.</p>
                                            <p>- Сроки изготовления: от 5 рабочих дней</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid main-text-container">
                                <p>Световые короба из акрила представляют собой вывески,
                                 имеющие внутреннюю подсветку лицевая панель которых изготавливается из акрилового стекла, обеспечивающего пропускание света.
                                    Они выразительны, действуют даже ночью. Изображение может наносится на пленку, которая наклеивается на лицевую панель.
                                    Для подсветки в основном используются светодиодные модули которые крепятся на задней панели.
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
