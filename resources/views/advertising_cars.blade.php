<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="b577f299055f54fe" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <meta name="description" content="Реклама на авто" />
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
                                <div class="market-info" id="m-i-1"><h1>Реклама на авто</h1></div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class=""><img src="image/info-block/auto.png" alt="" class="gallery-image"></div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <div class="awi desc-work">
                                            <h4 class="desc-work-title">Как мы работаем?</h4>
                                            <p>Чтобы оклеить автомобиль сложным рекламным продуктом, необходимо использовать широкоформатную печать. Все начинается с разработки макета:</p>
                                            <p>- Клиент может представить свой собственный макет, выполненный в любом из следующих форматов: CDR, AI, PDF.</p>
                                            <p>- Профессионалы могут доработать или адаптировать эскиз, предложенный заказчиком, учитывая основные пожелания и требования, а также технические моменты реализации, после чего эскиз предлагается на рассмотрение и утверждение.</p>
                                            <p>- Cовременные возможности широкоформатной печати не имеют практически ограничений по количеству цветов.</p>
                                            <p>- Tакже специалисты могут разработать макет с нуля, используя самый сложный дизайн.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid main-text-container">
                                <p>
                                    <span class="desc-work-title">Способы применения</span>    <br>
                                    - плоттерная нарезка пленки под нужный размер и конфигурацию – это способ отлично подходит для простых изображений и не подходит для многоцветной рекламы, для которой оптимальным вариантом станет полноцветная печать.<br>
                                    - пленка наносится на выбранные клиентом участки кузова – двери, лобовое или боковое стекло, капот, борта и так далее.<br>
                                    - все работы проводятся исключительно в чистом помещении, специально оборудованном для этих целей, что позволяет исключить образование пузырей и заломов.<br>
                                    - снять рекламу, которая стала неактуальной, очень просто без царапин и следов, для этого нужно обратиться в нашу компанию.<br>
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
