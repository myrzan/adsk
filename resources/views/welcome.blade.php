<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>АДСК</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

        <a href="https://api.whatsapp.com/send?phone=77273924144" target="_blank" class="whatsapp">
            <span>+7 (727) 392 4144</span>
        </a>
        <div id="welcome">
            <img src="{{ asset('/img/logo_white.png') }}" alt="ADSK">
        </div>
        <div class="container-fluid main">
            <section class="section-1"></section>
            <section class="section-2"></section>
            <section class="section-3">
                <div class="container-fluid" style="height:100%;">
                    <div class="row" style="height:100%;">
                        <div class="col-md-4 align-self-start offset-md-1">
                            <img src="{{ asset('/img/triangle.png') }}" alt="Logotype" class="figure">
                            <div class="llp-text">
                                ТОО ASI Construction является официальным торговым представителем ТОО «АДСК».
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="h2">Кто мы? <span>О компании</span></div>
                            <p class="about-text">«Алматинская дорожно строительная компания» является одной из динамично развивающихся отечественных
                                компаний по производству высококачественной продукции для дорожного и гражданского строительства.
                                Компания зарекомендовала себя как надежный поставщик розничных и оптовых заказов. Мы гарантируем
                                безупречное соблюдение сроков выполнения обязательств и высокое качество всей поставленной продукции.
                                Наша команда высококвалифицированных сотрудников оперативно выполняет любые заявки заказчиков.
                                ТОО «АДСК» заинтересовано в успешном развитии бизнеса своих клиентов, поэтому всегда предоставляет
                                качественную продукцию по оптимальным ценам в сжатые сроки. Мы ждем Вашего звонка и будем рады,
                                если Ваша компания станет нашим постоянным клиентом! В свою очередь коллектив ТОО «АДСК» приложит
                                все усилия для благополучия Вашей производственной и экономической деятельности!</p>
                        </div>
                        <div class="col-md-1 border-left">
                            <span class="side-logo">АДСК</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-4">
                <div class="container-fluid" style="height:100%;">
                    <div class="row" style="height:100%;">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{ asset('/img/double-triangle.png') }}" alt="Logotype" class="figure">
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="h2"><span>ПРЕИМУЩЕСТВА</span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <p><b>КОНКУРЕНТНЫЕ ЦЕНЫ</b> обеспечиваются:</p>
                                    <ul>
                                        <li>- Высокопроизводительным европейским оборудованием;</li>
                                        <li>- Профессиональным менеджментом, оптимизирующим производство;</li>
                                        <li>- Все инертные материалы доставляются со своих карьеров;</li>
                                        <li>- Близкое расположение карьеров к заводам.</li>
                                    </ul>
                                    <p><b>ВЫСОКОЕ КАЧЕСТВО</b></p>
                                    <ul>
                                        <li>- Высокопроизводительным европейским оборудованием;</li>
                                        <li>- Качественные инертные материалы со своих карьеров;</li>
                                        <li>- Сертифицированная продукция и соответствие всем государственным стандартам качества РК.</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <p><b>УЧЕТ ИНТЕРЕСОВ И ВОЗМОЖНОСТЕЙ ЗАКАЗЧИКОВ</b></p>
                                    <ul>
                                        <li>- Лояльная система условий поставки потребителям и гибкая ценовая политика;</li>
                                        <li>- Предоставление дополнительных услуг по транспортировке и укладке асфальтобетонной смеси;</li>
                                        <li>- Профессиональная консультация заказчика.</li>
                                        <li>&nbsp;</li>
                                    </ul>
                                    <p><b>ОПЕРАТИВНОСТЬ</b></p>
                                    <ul>
                                        <li>- Выполнение заявки заказчика в кратчайшие сроки;</li>
                                        <li>- Наличие собственной логистической площадки, позволяющей произвести оперативную отгрузку
                                        готовой продукции железнодорожным и автомобильным транспортом.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 border-left">
                            <span class="side-logo">АДСК</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.onepage-scroll.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
