<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>АДСК</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/slick-fullscreen.css') }}">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css?v=2.0') }}">
    </head>
    <body>
        <div id="sidebar_toggler_mobile"></div>
        <div class="sidebar collapsed translated">
            <div id="sidebar_toggler">
                <span>МЕНЮ</span>
            </div>
            <div class="clearfix"></div>
            <div class="logo"></div>
            <ul class="sidebar-list">
                <li class="sidebar-item"><a href="#about" class="sidebar-anchor">Про нас</a></li>
                <li class="sidebar-item"><a href="#advantages" class="sidebar-anchor">Преимущества</a></li>
                <li class="sidebar-item"><a href="#equipment" class="sidebar-anchor">Оборудование</a></li>
                <li class="sidebar-item"><a href="#production" class="sidebar-anchor">Каталог продукции</a></li>
                <li class="sidebar-item"><a href="#certificates_section" class="sidebar-anchor">Сертификаты</a></li>
                <li class="sidebar-item"><a href="#contacts" class="sidebar-anchor">Контакты</a></li>
            </ul>
        </div>

        <a href="https://api.whatsapp.com/send?phone=77273924144" target="_blank" class="whatsapp">
            <span>+7 (727) 392 4144</span>
        </a>
        <div id="welcome"></div>
        <div class="lightbox">
            <div>
                <img src="{{ asset('/img/slider/1.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/2.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/3.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/4.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/5.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/6.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/7.jpg') }}" width="100%">
            </div>
            <div>
                <img src="{{ asset('/img/slider/8.jpg') }}" width="100%">
            </div>
        </div>
        <div class="container-fluid main">
            <section class="section-3" id="about">
                <div class="container-fluid" style="height:100%;">
                    <div class="row pt-5" style="height:100%;">
                        <div class="col-md-4 align-self-start offset-md-1">
                            <img src="{{ asset('/img/triangle.png') }}" alt="Logotype" class="figure">
                            <div class="llp-text">
                                ТОО ASI Construction является официальным торговым представителем ТОО «АДСК».
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="h2"><span>О компании</span></div>
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
                    </div>
                </div>
            </section>
            <hr class="border-top">
            <section class="section-4" id="advantages">
                <div class="container-fluid" style="height:100%;">
                    <div class="row pt-5" style="height:100%;">
                        <div class="col-md-10 offset-md-1">
                            <div class="row">
                                <div class="col-md-5">
                                    <img src="{{ asset('/img/double-triangle.png') }}" alt="Logotype" class="figure">
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="h2"><span>ПРЕИМУЩЕСТВА</span></div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-5">
                                    <p><b>КОНКУРЕНТНЫЕ ЦЕНЫ</b> обеспечиваются:</p>
                                    <ul>
                                        <li>- Высокопроизводительным европейским оборудованием;</li>
                                        <li>- Профессиональным менеджментом, оптимизирующим производство;</li>
                                        <li>- Все инертные материалы доставляются со своих карьеров;</li>
                                        <li>- Близкое расположение карьеров к заводам.</li>
                                    </ul><br>
                                    <p><b>ВЫСОКОЕ КАЧЕСТВО</b></p>
                                    <ul>
                                        <li>- Высокопроизводительным европейским оборудованием;</li>
                                        <li>- Качественные инертные материалы со своих карьеров;</li>
                                        <li>- Сертифицированная продукция и соответствие<br> всем государственным стандартам качества РК.</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <p><b>УЧЕТ ИНТЕРЕСОВ И ВОЗМОЖНОСТЕЙ ЗАКАЗЧИКОВ</b></p>
                                    <ul>
                                        <li>- Лояльная система условий поставки потребителям и гибкая ценовая политика;</li>
                                        <li>- Предоставление дополнительных услуг по транспортировке и укладке асфальтобетонной смеси;</li>
                                        <li>- Профессиональная консультация заказчика.</li>
                                        <li>&nbsp;</li>
                                    </ul><br>
                                    <p><b>ОПЕРАТИВНОСТЬ</b></p>
                                    <ul>
                                        <li>- Выполнение заявки заказчика в кратчайшие сроки;</li>
                                        <li>- Наличие собственной логистической площадки, позволяющей произвести<br> оперативную отгрузку
                                        готовой продукции железнодорожным и автомобильным транспортом.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="border-top">
            <section class="section-5" id="equipment">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="h2">Оборудование</div>
                        <div class="gallery" id="gallery">
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/1.jpg') }})"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/2.jpg') }})"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/3.jpg') }})"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/4.jpg') }})"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/5.jpg') }})"></div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/6.jpg') }})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="border-top">
            <section class="section-6 section-production" id="production">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div id="production_slider">
                                @for($i = 1; $i < 10; $i++)
                                <div class="gallery-item">
                                    <div class="gallery-img" style="background-image:url({{ asset('/img/production/' . $i . '.jpg') }})"></div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="h1">Наша продукция</div>
                            <p style="font-size:14pt;">Современный завод по производству вибропрессованных бетонных изделий по европейской технологии позволяет производить широкий ассортимент тротуарной плитки и бордюров.</p>
                            <a href="{{ asset('/ADSK trade.pdf') }}" class="pdf-button mt-5" download>Скачать продукцию в PDF ⤓</a>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="border-top">
            <section class="section-13 pb-5" id="certificates_section">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="h2">Сертификаты</div>
                        <p>Мы заинтересованы в успешном развитии бизнеса своих клиентов, поэтому всегда предоставляет качественную продукцию по оптимальным
                            ценам в сжатые сроки.</p>
                        <p>Компания зарекомендовала себя как надежный поставщик розничных и оптовых заказов. Мы гарантируем безупречное соблюдение сроков
                            выполнения обязательств и высокое качество всей поставленной продукции.</p>
                        <p>Наше предприятие сертифицированно и соответствует требованиям международных стандартов:
                            ИСО 9001, ИСО 14001, OHSAS 18001, ГОСТ ИСО/МЭК 17025.</p>
                        <div class="gallery" id="certificates">
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/1.png') }})"></div>
                                <div class="certificate-title">Смеси асфальтобетонные</div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/2.png') }})"></div>
                                <div class="certificate-title">Смеси асфальтобетонные горячие</div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/3.png') }})"></div>
                                <div class="certificate-title">Смеси асфальтобетонные горячие ЩМАС-20</div>
                            </div>
                            <div class="gallery-item">
                                <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/4.png') }})"></div>
                                <div class="certificate-title">Эмульсия битумная катионная ЭБК-2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="border-top">
            <section class="section-14" id="contacts">
                <div class="container pt-5" style="height:100%">
                    <div class="row" style="height:100%">
                        <div class="col-md-6 offset-md-1 my-5">
                            <div class="meet mb-5">
                                <span>Контакты</span>
                            </div>
                            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/9429940001112310/center/76.90811634063722,43.28493780125924/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.908109,43.284744/zoom/16/routeTab/rsType/bus/to/76.908109,43.284744╎Алматинская дорожно-строительная компания, компания по производству асфальта?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Алматинская дорожно-строительная компания, компания по производству асфальта</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":500,"borderColor":"#a3a3a3","pos":{"lat":43.28493780125924,"lon":76.90811634063722,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"9429940001112310"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </div>
                        <div class="col-md-5 mb-5 align-self-center">
                            <div class="contacts row">
                                <div class="col-md-6">
                                    <p class="mt-3">Республика Казахстан, <br>город Алматы,<br> ул. Бокейханова, 55а</p>
                                </div>
                                <div class="col-md-5">
                                    <a href="tel:+77272942643" class="mt-3 d-block">+7 (727) 294‒26‒43</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <footer class="pt-3 pb-4 text-center">
                    Сайт разработан <a href="https://red1group.kz" target="_blank">Red1Group</a>.
                </footer>
            </div>
        </div>
        <div id="dark_bg"></div>
        <div id="viewer"></div>
    </body>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/slick-fullscreen.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <script src="{{ asset('js/app.js?v=2.0') }}"></script>
</html>
