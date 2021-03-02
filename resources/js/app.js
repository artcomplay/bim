/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { indexOf, functions } = require('lodash');

require('./bootstrap');


window.Vue = require('vue').default;



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('header-component', require('./components/HeaderComponent.vue').default);
Vue.component('slider-component', require('./components/SliderComponent.vue').default);
Vue.component('infoblocks-component', require('./components/InfoblocksComponent.vue').default);
Vue.component('shemework-component', require('./components/ShemeworkComponent.vue').default);
Vue.component('yandex-component', require('./components/YandexComponent.vue').default);
Vue.component('workblock-component', require('./components/WorkblockComponent.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('partners-component', require('./components/PartnersComponent.vue').default);
Vue.component('leftbar-component', require('./components/LeftbarComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var elements = ['#head', '#leftbar', '#slider','#infoblocks','#shemework','#workblock','#partners','#yandex','#footer'];



for(i = 0; i <= elements.length; i++){
    
    if ($(elements[i]).length){
        const app = new Vue({
            el: elements[i], 
        });
    }
}


var yandexApi = '<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4fde5c801d2864ec6bd4221b600bbb9d9e7bf8d40abe18f892ec6af316168591&amp;width=500&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>';

var yandexApiMobile = '<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4fde5c801d2864ec6bd4221b600bbb9d9e7bf8d40abe18f892ec6af316168591&amp;width=292&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>';




var instagrammWidget = '<script src="https://apps.elfsight.com/p/platform.js" defer></script>';

$('#instagramm').append(instagrammWidget);

let screenWidth = $(window).width();




if(screenWidth < 1024){
    $('.menu-horizontal ul li').css('display', 'grid');
    $('.header-content').css('height', 'auto');
    $('.left-adres').remove();
    $('#left-space').css('padding-right', '15px');
    $('#main-space').css('padding-left', '15px');
    $('.bim').css('padding-top', '15%').css('margin-left', '24%').css('font-size', '22px');
    $('.logo-img').css('margin-left', '0%').css('width', '95px'); 
    $('.bim-info').css('margin-left', '10%');
    $('hr').remove();
    $('.vertical-menu').css('margin-bottom','20px');
    $('#yandex-map').append(yandexApiMobile);
    $('.yandex-map').css('position', 'relative').css('margin-top', '30px').css('margin-left', '15px').css('margin-right','15px');
    $('.footer-menu').children('ul').css('display', 'grid');
    $('.market-info').css('background', 'linear-gradient(to right, #ffe81a, #ffd921, rgb(255 202 38)');
} else if(screenWidth > 1024){
    $('#yandex-map').append(yandexApi);
    $('#m-i-1').append('<img class="icons-front" src="image/icons/design-tools.png" alt="">');
    $('#m-i-2').append('<img class="icons-front" src="image/icons/plan-scheme.png" alt="">');
    $('#m-i-3').append('<img class="icons-front" src="image/icons/partnership.png" alt="">');
}

