/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

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
        console.log('Element ' + elements[i] + ' exist');
        const app = new Vue({
            el: elements[i], 
        });
    } else {
        console.log('Element ' + elements[i] + ' not exist');
    }
}


var yandexApi = '<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4fde5c801d2864ec6bd4221b600bbb9d9e7bf8d40abe18f892ec6af316168591&amp;width=500&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>';

$('#yandex-map').append(yandexApi);