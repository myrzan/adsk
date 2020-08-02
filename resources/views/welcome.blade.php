<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>АДСК</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/onepage-scroll.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css?v=' . microtime()) }}">
    </head>
    <body>
        <div class="sidebar collapsed">
            <div id="sidebar_toggler">
                <span>МЕНЮ</span>
            </div>
            <div class="clearfix"></div>
            <div class="logo"></div>
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Про нас</a></li>
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Преимущества</a></li>
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Оборудование</a></li>
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Каталог продукции</a></li>
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Сертификаты</a></li>
                <li class="sidebar-item"><a href="#" class="sidebar-anchor">Контакты</a></li>
            </ul>
        </div>

        <a href="https://api.whatsapp.com/send?phone=77273924144" target="_blank">
            <div class="whatsapp">
                <span>+7 (727) 392 4144</span>
            </div>
        </a>
        <div id="welcome"></div>
        <div class="container main">
            <section></section>
            <section></section>
        </div>
    </body>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.onepage-scroll.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
