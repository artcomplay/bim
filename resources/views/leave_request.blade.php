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

        <div class="bg" style="overflow-x:hidden;">
            <div class="col-12" id="head">
                <header-component></header-component>

                <div class="main-content container" style="height: 100%;">
                    <div class="row main-content-row">


                        <div class="col-sm-12" style="padding: 30px;">
                            <div class="container-fluid">
                                <div class="market-info"><h1>Оставьте заявку, и наши менеджеры свяжутся с вами:</h1><!--<img class="icons-front" src="image/icons/design-tools.png" alt="">--></div>
                            </div>

                            <div class="col-sm-10 offset-md-1">
                                <div class="mt-cont">
                                    <p>Отправьте контакты и информацию о своем заказе. Мы свяжемся с вами для подтверждения и уточнения деталей заказа.</p>
                                </div>
                            </div>

                            <div class="col-sm-6 offset-md-3">
                                <div class="row">
                                    <div class="col-sm-12">

                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                        <form action="{{ route('contact-form') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name">Имя</label>
                                                <input type="text" name="name" value="" placeholder="Введите имя" id="" class="form-control inp-form">

                                                <label for="email">Email</label>
                                                <input type="email" name="email" placeholder="Введите email" id="" class="form-control inp-form">

                                                <label for="phone">Телефон</label>
                                                <input type="tel" name="phone" placeholder="Введите номер телефона" id="" class="form-control inp-form">

                                                <label for="message">Текст сообщения</label>
                                                <textarea name="message" placeholder="Введите текст сообщения" id="message" class="form-control inp-form" cols="30" rows="5"></textarea>

                                                <!--<label for="image">Изображение</label>
                                                <input type="file" name="image" accept=".png,.jpg,.jpeg,.bmp,.svg,.webp,.gif,.cdr,.psd,image/*">-->
                                                
                                                <input type="checkbox" name="check" id="">
                                                <p class="agree-p">Я принимаю условия <a href="" style="font-size: 12px;" id="agreement">"Соглашения на обработку персональных данных."</a></p><br>
                                                

                                                <button type="submit" class="btn btn-success btn-send">Отправить</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>



                            </div>
                            <div class="col-sm-10 offset-md-1">
                                <div class="mt-container">
                                    <p id="text-block" style="font-size: 12px; display: none;">
                                                                                        
                                    <span>Соглашение разработано в соответствии с Законом Республики Беларусь «Об информации, информатизации и защите информации» от 10.11.2008 №455-З (далее – «Закон») и иными законодательными актами Республики Беларусь.</span><br>

                                    <span class="cursive"> Пользователь дает свое согласие на обработку его персональных данных, а именно совершение действий, предусмотренных Законом Республики Беларусь «Об информации, информатизации и защите информации» от 10.11.2008 №455-З и иными законодательными актами Республики Беларусь, и подтверждает, что, давая такое согласие, он действует свободно, своей волей и в своем интересе.</span><br>

                                    Присоединяясь к настоящему Соглашению и оставляя свои данные на Сайте brestintermarket.com, (далее – Сайт), путем заполнения полей онлайн-заявки <br>
                                    1.1. Пользователь:  <br>
                                    1.1.1. подтверждает, что указанные им персональные данные принадлежат лично ему; <br>
                                    1.1.2. признает и подтверждает, что он внимательно и в полном объеме ознакомился с настоящим Соглашением и содержащимися в нем условиями обработки его персональных данных, указываемых им в полях он-лайн заявки на сайте; <br>
                                    1.1.3. признает и подтверждает, что все положения настоящего Соглашения и условия обработки его персональных данных ему понятны; <br>
                                    1.1.4. дает согласие на обработку Сайтом предоставляемых персональных данных в целях информирования его о продукции и предложениях компании; <br>
                                    1.1.5. выражает согласие с условиями обработки персональных данных без каких-либо оговорок и ограничений. <br>
                                    Согласие Пользователя на обработку персональных данных является конкретным, информированным и сознательным. <br>
                                    Настоящее согласие Пользователя применяется в отношении обработки следующих персональных данных: <br>
                                    3.1. фамилия, имя, отчество; <br>
                                    3.2. место нахождения (город, область); <br>
                                    3.3. номер телефона; <br>
                                    3.4. адрес электронной почты (E-mail). <br>
                                    Пользователь, предоставляет сайту brestintermarket.com право осуществлять следующие действия (операции) с персональными данными: <br>
                                    4.1. сбор и накопление; <br>
                                    4.2. хранение в течение установленных нормативными документами сроков хранения отчетности, но не менее трех лет, с момента даты прекращения пользования услуг Сайта Пользователем; <br>
                                    4.3. уточнение (обновление, изменение); <br>
                                    4.4. использование в коммерческих целях; <br>
                                    4.5. осуществлять информационную рассылку; <br>
                                    4.6. уничтожение; <br>
                                    4.7. передача по требованию суда, в т.ч. третьим лицам, с соблюдением мер, обеспечивающих защиту персональных данных от несанкционированного доступа. <br>
                                    Указанное согласие действует бессрочно с момента предоставления данных и может быть отозвано Вами путем подачи заявления администрации Сайта с указанием данных, определенных ст. 14 Закона «О персональных данных». <br>
                                    Отзыв согласия на обработку персональных данных может быть осуществлен путем направления Пользователем соответствующего распоряжения в простой письменной форме на адрес электронной почты (E-mail) reklama_bim@tut.by <br>
                                    Сайт не несет ответственности за использование (как правомерное, так и неправомерное) третьими лицами информации, размещенной Пользователем на Сайте, включая её воспроизведение и распространение, осуществленные всеми возможными способами. <br>
                                    Сайт имеет право вносить изменения в настоящее Соглашение. При внесении изменений в актуальной редакции указывается дата последнего обновления. Новая редакция Соглашения вступает в силу с момента ее размещения, если иное не предусмотрено новой редакцией Соглашения. <br>
                                    К настоящему Соглашению и отношениям между пользователем и Сайтом, возникающим в связи с применением Соглашения подлежит применению материальное и процессуальное право Республики Беларусь. <br>
                                    </p>
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
