<template>
    <div class="left-bar-content container-fluid">
        <div class="main-left">
            <div class="services">
                Услуги
            </div>
            <div class="vertical-menu">
                <ul class="menu-list">
                    <li class="list-item"><a href="">Объемные буквы</a></li>
                    <li class="list-item"><a href="">Световые короба</a></li>
                    <li class="list-item"><a href="">Реклама на авто</a></li>
                    <li class="list-item"><a href="">Таблички и вывески</a></li>
                    <li class="list-item"><a href="">Стенды информации</a></li>
                    <li class="list-item"><a href="">Интерьерная реклама</a></li>
                    <li class="list-item"><a href="">Штендеры</a></li>
                    <li class="list-item"><a href="">Оклейка витрин и окон</a></li>
                    <li class="list-item"><a href="">Указатели и пилоны</a></li>
                    <li class="list-item"><a href="">Таблички на дом</a></li>
                    <li class="list-item"><a href="">Широкоформатная  печать</a></li>
                </ul>
            </div>

            <hr>
            <div class="container-fluid leave-request">
                <a href="/leave-request">Оставить заявку</a>
            </div>

            <div class="left-center container-fluid nu-gutters">
                <div class="date-time">
                    <div id="dates"></div>
                    <div id="times"></div>
                </div>
                <div class="weather">
                    <a href="https://clck.yandex.ru/redir/dtype=stred/pid=7/cid=1228/*https://yandex.by/pogoda/153" target="_blank"><img src="https://info.weather.yandex.net/153/2.ru.png?domain=by" border="0" alt="Яндекс.Погода"/><img width="1" height="1" src="https://clck.yandex.ru/click/dtype=stred/pid=7/cid=1227/*https://img.yandex.ru/i/pix.gif" alt="" border="0"/></a>
                </div>

                <!--
                <div class="money-info-block">
                    <div class="money-info">
                        <iframe frameborder="0" height="131" marginheight="0" marginwidth="0" scrolling="no" src="https://admin.myfin.by/outer/informer/brest/full" width="100%"></iframe>
                    </div>
                </div>
                -->

                <!--<div class="elfsight-app-2e9a99e9-90c6-4571-8d27-e1bde002305d"></div>-->
            </div>

            <div id="instagramm"></div>
            <div class="elfsight-app-b09a6443-ca96-4cc9-b36e-215680fa1a86"></div>
        </div>


        <div class="bottom-left">
            <div class="row left-adres">
                <ul>
                    <li>Брест, Карла Маркса 37</li>
                    <li>reklama_bim@tut.by</li>
                    <li>375 (33) 340-58-09</li>
                    <li>8 (0162) 21-65-09</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component leftbar mounted.')
        }
    }
</script>                
