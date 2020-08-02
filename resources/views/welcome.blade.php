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
