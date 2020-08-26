<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Asi Construction</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/slick-fullscreen.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css?v=4.0') }}">
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

        <a href="https://api.whatsapp.com/send?phone=77022946913" target="_blank" class="whatsapp">
            <span>+7 (702) 294‒69‒13</span>
        </a>
        <div id="welcome"></div>
        <div class="lightbox">
            <div>
                <img src="{{ asset('/img/slider/1.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/2.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/3.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/4.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/5.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/6.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/7.jpg') }}" width="100%" alt="Asi Construction">
            </div>
            <div>
                <img src="{{ asset('/img/slider/8.jpg') }}" width="100%" alt="Asi Construction">
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
                            <a href="{{ asset('/ASI.pdf') }}" class="pdf-button mt-5" download>Скачать продукцию в PDF ⤓</a>
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
                            <a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001026613374/center/76.9549584388733,43.250032316880116/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/firm/70000001026613374/photos/70000001026613374/center/76.9549584388733,43.250032316880116/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.955229,43.250245/zoom/17/routeTab/rsType/bus/to/76.955229,43.250245╎Avenue, компания по организации и оформлению мероприятий?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Avenue, компания по организации и оформлению мероприятий</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":"100%","height":500,"borderColor":"#a3a3a3","pos":{"lat":43.250032316880116,"lon":76.9549584388733,"zoom":17},"opt":{"city":"almaty"},"org":[{"id":"70000001026613374"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                        </div>
                        <div class="col-md-5 mb-5 align-self-center">
                            <div class="contacts row">
                                <div class="col-md-6">
                                    <p class="mt-3">Республика Казахстан, <br>город Алматы,<br> ул. Кабанбай батыра, 76</p>
                                </div>
                                <div class="col-md-5">
                                    <a href="tel:+77022946913" class="mt-3 d-block">+7 (702) 294‒69‒13</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container footer-container">
                <footer class="pt-3 pb-4 text-center">
                    Сайт разработан <a href="https://red1group.kz" target="_blank">Red1Group</a>.
                </footer>
            </div>
        </div>
        <div id="dark_bg"></div>
        <div id="viewer"></div>
        <div id="formModalBtn" data-toggle="modal" data-target="#formModal">Обратный звонок</div>
        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="formModalLabel">Оставьте свой номер телефона и мы перезвоним вам</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-5 text-center">
                        <form action="" id="form">
                            @csrf
                            <div class="form-group">
                                <label for="name">Имя:</label>
                                <input type="text" class="form form-control form-control-lg" id="name" placeholder="Ваше имя" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Номер телефона:</label>
                                <input type="text" class="form form-control form-control-lg" id="phone" placeholder="Ваш номер телефона" required>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6Lf6EMAZAAAAAHMtUT8ZDIVAFteSCbighG-5leCO"></div>
                            <button class="mt-3 btn btn-success shadow-md btn-lg">Позвоните мне</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="{{ asset('js/slick-fullscreen.js') }}"></script>
        <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
        <script src="{{ asset('js/app.js?v=4.0') }}"></script>
    </body>
</html>
