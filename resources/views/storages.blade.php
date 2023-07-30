@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500">Склады</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li class="active">
                                Склады
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding contact-us clearfix">
        <div class="container">
            <h3 class="text-custom-blue">Региональные склады по стране</h3>

            <div class="row">
                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Воронеж</h4>
                        </div>
                    </div>
                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>проспект Труда 151</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>neo-led@mail.ru, svetdiodov@list.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>+7(980)340-21-10 (Иван), +7(950)758-68-18 (Никита)</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>+7(473)261-09-35, +7(473)276-29-29 </p>

                    <ul class="fs-16 pl-3 pt-2">
                        <li>Полный ассортимент</li>
                        <li>Цены производителя</li>
                        <li>Оперативная отправка по области и в регионы</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Екатеринбург</h4>
                        </div>
                    </div>

                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>Полевая 78</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>plastster.ekb@mail.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>+ 7 (912) 6514439 (Роман)</p>
                    <p class="fs-16"><i class="fa fa-external-link pr-2"></i><a href="https://ekb.plastster.ru">ekb.plastster.ru</a></p>
                    <p class="fs-16">Долго ждать груз? Забирай со склада в Екатеринбурге!</p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Вся продукция в наличии в больших количествах</li>
                        <li>Напрямую от производителя</li>
                        <li>Розница и опт</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Тольятти</h4>
                        </div>
                    </div>
                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>ул. Ботаническая 24</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>potolkidesign163@gmail.com</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>8 902 376 55 65</p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Полный перечень продукции</li>
                        <li>Всегда в наличии</li>
                        <li>Отправка в регионы</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Набережные Челны</h4>
                        </div>
                    </div>

                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>пос. ГЭС, улица Ленина, дом 46</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>indortrans@yandex.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>+ 7 (917) 2582450 Марат</p>
                    <p class="fs-16"><i class="fa fa-external-link pr-2"></i><a href="http://chelny-plastster.ru">chelny-plastster.ru</a></p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Вся продукция в наличии в больших количествах</li>
                        <li>Быстро, удобно, оперативно</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Москва</h4>
                        </div>
                    </div>

                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>МО г. Лобня Краснополянский тупик 2</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>info@leddsvet.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>8 4955 1711 22 , 8(929)6547707, 8(964)5004411 Арам, Сергей.</p>
                    <p class="fs-16"><i class="fa fa-external-link pr-2"></i><a href="https://leddsvet.ru/">leddsvet.ru</a></p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Ежедневная доставка в любой район Москвы</li>
                        <li>Самовывоз</li>
                        <li>Полный ассортимент продукции</li>
                        <li>Мелкий опт, крупный опт</li>
                        <li>Работаем со всеми Тк.</li>
                        <li>Оперативно реагируем на все обращения!</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Краснодар</h4>
                        </div>
                    </div>
                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>улица Ставропольская 107/8</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>8 861 290 10 50</p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Оперативное пополнение склада</li>
                        <li>Цены производителя</li>
                        <li>Мелкий опт, крупный опт</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Новосибирск</h4>
                        </div>
                    </div>

                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>Глащука 2</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>skaras@mail.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>8 913 986 1234 Сергей</p>
                    <p class="fs-16"><i class="fa fa-external-link pr-2"></i><a href="http://neboland.ru/">neboland.ru</a></p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Полный ассортимент продукции</li>
                        <li>Цены производителя</li>
                        <li>Оперативная отправка в регионы</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Крым</h4>
                        </div>
                    </div>
                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>ул. Шабалина 10а</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>office@stylishroom.com.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>8 978 736 3252, 8 800 234 2377</p>
                    <p class="fs-16"><i class="fa fa-external-link pr-2"></i><a href="http://neboland.ru/">neboland.ru</a></p>
                    <p class="fs-16">Склад в городе Севастополь.</p>
                    <ul class="fs-16 pl-3 pt-2">
                        <li>Всегда всё в наличии</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <div class="section-head pt-4">
                        <div class="section-heading">
                            <h4 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >Оренбург</h4>
                        </div>
                    </div>
                    <p class="fs-16"><i class="fa fa-map-marker pr-2"></i>улица Мира 1/1</p>
                    <p class="fs-16"><i class="fa fa-envelope pr-2"></i>oren@prozet.ru</p>
                    <p class="fs-16"><i class="fa fa-phone pr-2"></i>89226252262 (Кирилл)</p>
                    <p class="fs-16">Всегда и всё в наличии, цены производства, оперативная доставка в соседние регионы.</p>
                </div>
            </div>


        </div>
    </section>

@endsection
