<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>АДСК</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/onepage-scroll.css') }}">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" href="{{ asset('css/app.css?v=' . microtime()) }}">
    </head>
    <body>
        <div id="sidebar_toggler_mobile"></div>
        <div class="sidebar collapsed">
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
        <div id="welcome">
            <img src="{{ asset('/img/logo_white.png') }}" alt="ADSK">
        </div>
        <div class="container-fluid main">
            <section class="section-1"></section>
            <section class="section-2"></section>
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
                    </div>
                </div>
            </section>
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
            <section class="section-5" id="equipment">
                <div class="container pt-5">
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
                         <div class="gallery-item">
                            <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/7.jpg') }})"></div>
                        </div>
                         <div class="gallery-item">
                            <div class="gallery-img" style="background-image:url({{ asset('/img/gallery/8.jpg') }})"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-6 section-production" id="production">
                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3">
                            <img src="{{ asset('/img/production/1.jpg') }}" alt="Наша продукция">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>Тротуарная плита «Новый город»</h5>
                            <p>Плитка «Новый город», как и другие серии тротуарной плитки нашего производства,
                                отличается высокими эксплуатационными свойствами - износостойкостью,
                                морозостойкостью, стойкостью к химическим воздействия и низким водопоглощением</p>
                            <p>Размеры элементов: 160х160х80 / 200х160х80 / 240х160х80 мм.</p>
                            <p>Мы производим широкий ассортимент тротуарной плитки (брусчатки) «Новый город»:
                                классические цвета - серый, красный, коричневый, желтый, бордовый, синий, черный.</p>
                            <p>При условии правильного ухода за тротуарной плиткой срок службы увеличивается
                                в несколько раз. Служба качества предоставит все необходимые рекомендации
                                и ответит на вопросы по уходу за мощением.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-7 section-production">
                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5 mb-3">
                            <img src="{{ asset('/img/production/2.png') }}" alt="Тротуарная плита «БРУСЧАТКА»">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>Тротуарная плита «БРУСЧАТКА»</h5>
                            <p>Мы производим широкий ассортимент высококачественной тротуарной брусчатки
                                для мощения дорожек, тротуаров, пешеходных зон и т.д. Продукция производится
                                на современном немецком оборудовании методом двухслойного вибропрессования
                                из бетона</p>
                            <p>Размеры элементов: 200х100х60, 200х100х8.
                                Мы производим широкий ассортимент тротуарной плитки (брусчатки):
                                классические цвета - серый, красный, коричневый, желтый, бордовый, синий, черный.
                                «Брусчатка» имеет правильные прямоугольные формы (ее еще называют «кирпичик»)
                                и является универсальным решением для мощения, с одинаковым успехом используемым
                                для благоустройства городских или частных объектов</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-7 section-production">
                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/3.png') }}" alt="Тротуарная плитка КВАДРАТ">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>Тротуарная плита «КВАДРАТ» («Прямоугольник»)</h5>
                            <p>Плитка «Квадрат» ( «Прямоугольник») оптимальное решение для мощения таких
                                объектов, как стоянки легкового транспорта, пешеходные зоны, парковые дорожки и т.п.
                                Небольшие размеры и закругленные края каждого отдельного элемента создают
                                возможность отхода от строгой геометрии и позволяют создавать в процессе
                                мощения плавные изгибы требуемого радиуса.
                            </p>
                            <p>Размеры элементов: 200х200х60 200х200х80 600х300х80 мм.</p>
                            <p>Мы производим широкий ассортимент тротуарной плитки: классические
                                цвета - серый, красный, коричневый, желтый, бордовый, синий, черный.</p>
                            <p>При условии правильного ухода за тротуарной плиткой срок службы увеличивается
                                в несколько раз. Служба качества предоставит все необходимые рекомендации
                                и ответит на вопросы по уходу за мощением.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-8 section-production">
                <div class="container pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/4.png') }}" alt="БОРДЮР «МАГИСТРАЛЬНЫЙ»">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>БОРДЮР «МАГИСТРАЛЬНЫЙ»</h5>
                            <p>Бордюр «Магистральный» используется в современном дорожном строительстве.
                                Он выполняет роль разделительной линии между проезжей частью и пешеходной зоной,
                                продлевает срок эксплуатации дорожного полотна, защищая дорогу от разрушения.</p>
                            <p>Размер: 1000х300х180 мм.</p>
                            <p>Высококачественный магистральный бордюр шириной 180мм, отличается высокими
                                эксплуатационными характеристиками.</p>
                            <p>Этот высококачественный магистральный бордюр отличается высокими
                                эксплуатационными характеристиками и оптимальной ценой.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-9 section-production">
                <div class="container pt-5">
                    <div class="row my-auto" style="height:initial">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/5.png') }}" alt="БОРДЮР «ДОРОЖНЫЙ»">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>БОРДЮР «ДОРОЖНЫЙ»</h5>
                            <p>Бордюр «Дорожный» производится из высококачественного
                                вибропрессованного бетона.</p>
                            <p>Размер: 1000х300х150 мм</p>
                            <p>Предназначен для разделения автомобильных дорог от пешеходных зон.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-10 section-production">
                <div class="container pt-5">
                    <div class="row my-auto" style="height:initial">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/6.png') }}" alt="БОРДЮР «САДОВЫЙ»">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>БОРДЮР «САДОВЫЙ»</h5>
                            <p>Бордюр «Садовый» или «Тротуарный» - широко используется при благоустройстве
                                тротуаров, парковых зон, загородных участков и других подобных объектов.</p>
                            <p>Размер: 1000х200х80 мм</p>
                            <p>Бордюр «Садовый» - стандартный материал для оформления клумб
                                и пешеходных дорожек.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-11 section-production">
                <div class="container pt-5">
                    <div class="row my-auto" style="height:initial">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/7.png') }}" alt="БЛОК «СТЕНОВОЙ» ПУСТОТЕЛЫЙ">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>БЛОК «СТЕНОВОЙ» ПУСТОТЕЛЫЙ</h5>
                            <p>Блок «Стеновой» Пустотелый - отличается оптимальными габаритными размерами
                                и точной геометрией, что позволяет обеспечивать высокую скорость строительных
                                работ и экономию кладочного раствора за счет минимизации высоты монтажного шва.</p>
                            <p>Размер: 390х190х190 мм.</p>
                            <p>Предназначен для кладки наружных стен при возведении зданий различного назначения.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-12 section-production">
                <div class="container pt-5">
                    <div class="row my-auto" style="height:initial">
                        <div class="col-md-5">
                            <img src="{{ asset('/img/production/8.png') }}" alt="БЛОК «СТЕНОВОЙ СПЛИТЕРНЫЙ»">
                        </div>
                        <div class="col-md-7">
                            <div class="h1">Наша продукция</div>
                            <h5>БЛОК «СТЕНОВОЙ СПЛИТЕРНЫЙ»</h5>
                            <p>Блок «Стеновой сплитерный» используются в малоэтажном строительстве - для
                                возведения наружных стен, а также для возведения межквартирных перегородок
                                в многоквартирных домах и промышленных зданиях.</p>
                            <p>Размер: 390х190х190 мм</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-13 mb-5 pb-5" id="certificates_section">
                <div class="container pt-5">
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
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/2.png') }})"></div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/3.png') }})"></div>
                        </div>
                        <div class="gallery-item">
                            <div class="gallery-img" style="background-image:url({{ asset('/img/certificates/4.png') }})"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-14" id="contacts">
                <div class="container pt-5" style="height:100%">
                    <div class="row" style="height:100%">
                        <div class="col-md-6 my-5">
                            <div class="meet">
                                <span>Встретимся?</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5    align-self-center">
                            <div class="contacts row">
                                <div class="col-md-6">
                                    <div class="contacts-action">
                                        <span>Приезжайте</span>
                                    </div>
                                    <p class="mt-3">Республика Казахстан, <br>город Алматы,<br> ул. Кабанбай батыра, 76</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="contacts-action">
                                        <span>Звоните</span>
                                    </div>
                                    <a href="tel:+77022946913" class="mt-3 d-block">+7 702 294 69 13</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="dark_bg"></div>
        <div id="viewer"></div>
    </body>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.onepage-scroll.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
