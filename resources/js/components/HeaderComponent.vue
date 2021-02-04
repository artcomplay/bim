<template>
    <div class="header-content container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 no-gutters">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <img src="image/logo.png" alt="БрестИнтерМаркет" class="logo-img">
                </div>
                    <h2 class="bim col-12">BrestInterMarket</h2>
                    <h6 class="bim-info col-12">Изготовление и монтаж наружной рекламы</h6>
                <div class="col-12 menu-horizontal">
                    <ul>
                        <li class="h-list"><a href="/" class="menu-home">ГЛАВНАЯ</a></li>
                        <li class="h-list"><a href="/gallery" class="menu-portfolio">ПОРТФОЛИО</a></li>
                        <li class="h-list"><a href="/about-us" class="menu-company">О КОМПАНИИ</a></li>
                        <li class="h-list"><a href="/contacts" class="menu-contacts">КОНТАКТЫ</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 no-gutters container-fluid header-contacts">
                <ul>
                    <li>
                        <span class="icon-adres">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </span>
                        <a href="#map">Брест, Карла Маркса 37</a>
                    </li>
                    <li>
                        <span class="icon-adres">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                        </span>
                        <a href="mailto:reklama_bim@tut.by">reklama_bim@tut.by</a>
                    </li>
                    <li>
                        <span class="icon-adres">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg>
                        </span>
                        <a href="tel:+375333405809">375 (33) 340-58-09</a>
                    </li>
                    <li>
                        <span class="icon-adres">
                            <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-phone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg>
                        </span>
                        <a href="tel:80162216509">8 (0162) 21-65-09</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component header mounted.')
        }
    }
</script>
