<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="b577f299055f54fe" />
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <meta name="description" content="Наши специалисты предлагают заказчикам необычные и эффектные идеи по созданию рекламных конструкций." />
        <meta name="yandex-verification" content="b577f299055f54fe" />
        <meta name="google-site-verification" content="faOtvAJTY70V4h8_D3eoM1nYlwIYnVNOHgiBrjFB2tA" />
        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Italianno&family=Merienda+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/static/market-slider.css">
        <!-- Yandex.Metrika counter -->
            <script type="text/javascript" >
            (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(72839407, "init", {
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
            });
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/72839407" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
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
                                <div class="market-info" id="m-i-1"><h1>О компании БрестИнтерМаркет</h1></div>
                            </div>


                            <div class="ab-us">
                                <h1>РЕКЛАМНО - ПРОИЗВОДСТВЕННАЯ КОМПАНИЯ ООО "БРЕСТИНТЕРМАРКЕТ"</h1>
                                <p>
                                    Наша компания рада предложить полный спектр услуг по внешнему оформлению магазина и наружных витрин любого формата и сложности. 
                                </p>
                                <p>
                                    Мы более 20 лет на рынке и за это время заслужили хорошую репутацию и доверие наших клиентов. Имея богатый опыт работы, нестандартный творческий подход и массу креатива, наши специалисты предлагают заказчикам необычные и эффектные идеи по созданию рекламных конструкций.
                                </p>
                                <p>
                                    Обращаясь в ООО «БрестИнтерМаркет», вы попадаете в надежную компанию, где трудятся профессионалы, обладающие многолетним опытом работы, которые учитывают пожелание клиентов и воплощают самые оригинальные идеи.
                                </p>
                            </div>
                            <div class="ab-us">
                                <h5>РЕКВИЗИТЫ</h5>

                                <div class="row ">
                                    <div class="col-sm-12">

                                    </div>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 no-gutters">Наименование ЮЛ</div><div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 no-gutters">Общество с ограниченной ответственностью "БрестИнтерМаркет"</div>
                                    <hr>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 no-gutters">УНП</div><div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 no-gutters">291476438</div>
                                    <hr>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 no-gutters">Юридический адрес</div><div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 no-gutters">Брестская обл., г. Брест, ул. Карла Маркса, д. 37</div>
                                    <hr>
                                </div>
                                <br>
                                <h5>ВИДЫ ДЕЯТЕЛЬНОСТИ</h5>

                                <div class="row">
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 no-gutters">Код основного вида деятельности по ОКЭД</div><div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 no-gutters">73110</div>
                                    <hr>
                                    <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 no-gutters">Наименование основного вида деятельности по ОКЭД</div><div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 no-gutters">Деятельность по созданию рекламы</div>
                                </div>
                            </div>                            

                            

                            


                            

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
