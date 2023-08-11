@extends('layouts.app')

@section('content')
    <!-- Start Banner -->
    <div class="simple-banner">
        <div class="main-banner swiper-container p-relative swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-item swiper-slide-prev" data-swiper-slide-index="0">
                    <img src="{{ asset('images/banner/slide_8.png') }}"  class="image-fit" alt="img">
                    <div class="transform-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="content-wrapper text-center">
                                        <h1 class="text-custom-white">ПластСтер
                                            <span class="text-custom-blue">технология надежности</span></h1>
                                        <p class="text-custom-white mb-xl-40">Три основных правила: стабильность, качество, наличие, позволяют занимать одно из первых мест, среди производителей и поставщиков фурнитуры. </p>
                                        <a href="https://пластпродажи.рф/products" class="btn-first btn-border">Каталог изделий</a>
                                        <a href="https://пластпродажи.рф/" class="btn-first btn-border">Актуальный прайс</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-item swiper-slide-active" data-swiper-slide-index="1">
                    <img src="{{ asset('images/banner/slide_2.png') }}"  class="image-fit" alt="img">
                    <div class="transform-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="content-wrapper text-center">
                                    <span>
                                        <h1 class="text-custom-white">Склады по стране</h1> <h2 class="text-custom-white">дают возможность получать товар<br>максимально быстро,<br> а главное недорого!</h2>
                                    </span>

                                        <a href="{{ url('/storages') }}" class="btn-first btn-border ml-1">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide slide-item swiper-slide-active" data-swiper-slide-index="2">
                    <img src="{{ asset('images/banner/slide_3.png') }}"  class="image-fit" alt="img">
                    <div class="transform-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="content-wrapper text-center">
                                    <span>
                                        <h1 class="text-custom-white">Новинки на рынке</h1>
                                        <p class="text-custom-white mb-xl-40">Проектно-конструкторский отдел и собственный
                                            инструментальный цех ускоряют выход большого количества новинок на рынок.</p>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="slider-btn">
                <div class="main-button-next swiper-button-next" tabindex="0" role="button" aria-label="Следующий слайд">
                    <span class="flaticon-arrow-1"></span>
                </div>
                <div class="main-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Предыдущий слайд">
                    <span class="flaticon-left"></span>
                </div>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
    <!-- End Banner -->

    <!-- История-->
    <!--
    <section class="section-padding pb-0 bg-light-white our-history">
        <a style="margin-top: -120px;position: absolute;" name="about-us"></a>
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h5 class="text-custom-blue wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay="0.3s">О нас</h5>
                    <h3 class="text-theme fw-700">Наша история</h3>
                </div>
                <div class="section-description">
                    <p class="text-light-white">Компания ПластСтер занимается производством комплектующих для монтажа натяжных потолков уже более 15 лет.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="video-box mb-xl-40">
                        <div class="video_wrapper">
                            <div class="videoPoster">
                                <img src="{{ asset('images/history/video.png') }}" class="image-fit" alt="#">
                                <div class="video-inner video-btn-wrapper">
                                    <a href="https://youtu.be/NXn9gfiXHes" class="text-custom-blue popup-video">
                                        <i class="fa fa-play-circle"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-tabs">
                        <ul class="nav nav-tabs custom p-relative mb-xl-40">
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#start">2003 - 2005</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#setup">2005 - 2012</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#medium">2013 - 2022</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#advance">2023</a>
                            </li>
                        </ul>
                        <div class="tab-content padding-20 bg-custom-white bx-wrapper">
                            <div class="tab-pane fade" id="start">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="img-sec mb-md-40">
                                                <img src="{{ asset('images/history/history1.png') }}" class="full-width" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="content-box">
                                                <h4 class="text-custom-black fw-600">Старт работы</h4>
                                                <p class="text-custom-blue mb-xl-20">Здесь будет история о том, с чего все начиналось.</p>
                                                <p class="text-light-white mb-xl-20">Коротко, но содержательно и интересною Здесь будет история о том, с чего все начиналось. Здесь будет история о том, с чего все начиналось.</p>
                                                <p class="text-light-white mb-xl-20">Открылись новые склады или появилось ново оборудование</p>
                                                <div class="list">
                                                    <ul class="custom">
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Первая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Вторая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Может еще что-то</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">И здесь</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn-first btn-submit">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="setup">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="img-sec mb-md-40">
                                                <img src="{{ asset('images/history/history2.png') }}" class="full-width" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="content-box">
                                                <h4 class="text-custom-black fw-600">Дилерские соглашения</h4>
                                                <p class="text-custom-blue mb-xl-20">История о то, как дальше расширялся завод.</p>
                                                <p class="text-light-white mb-xl-20">Може новые партнеры появились.</p>
                                                <p class="text-light-white mb-xl-20">Открылись новые склады или появилось ново оборудование</p>
                                                <div class="list">
                                                    <ul class="custom">
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Первая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Вторая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Может еще что-то</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">И здесь</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn-first btn-submit">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="medium">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="img-sec mb-md-40">
                                                <img src="{{ asset('images/history/history3.png') }}" class="full-width" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="content-box">
                                                <h4 class="text-custom-black fw-600">Повышение квалификации.</h4>
                                                <p class="text-custom-blue mb-xl-20">Что происходило в эти годы.</p>
                                                <p class="text-light-white mb-xl-20">Коротко, но содержательно и интересно.Здесь будет история о том, с чего все начиналось.</p>
                                                <p class="text-light-white mb-xl-20">Открылись новые склады или появилось ново оборудование</p>
                                                <div class="list">
                                                    <ul class="custom">
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Первая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Вторая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Может еще что-то</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">И здесь</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn-first btn-submit">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="advance">
                                <div class="tab-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="img-sec mb-md-40">
                                                <img src="{{ asset('images/history/history4.png') }}" class="full-width" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 align-self-center">
                                            <div class="content-box">
                                                <h4 class="text-custom-black fw-600">Наша деятельность сегодня</h4>
                                                <p class="text-custom-blue mb-xl-20">Напишите коротко о том, над чем ведется работа сейчас.</p>
                                                <p class="text-light-white mb-xl-20">Коротко, но содержательно и интересно.Коротко, но содержательно и интересно.</p>
                                                <p class="text-light-white mb-xl-20">Открылись новые склады или появилось новое оборудование</p>
                                                <div class="list">
                                                    <ul class="custom">
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Первая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Вторая позиция</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">Может еще что-то</span>
                                                        </li>
                                                        <li class="fs-14 text-custom-blue">
                                                            <i class="fa fa-check"></i>
                                                            <span class="text-light-white">И здесь</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn-first btn-submit">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!-- История конец-->

    <section class="section-padding our-services">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h5 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"> Наши будни </h5>
                    <h3 class="text-theme fw-700">Будни производства</h3>
                </div>
                {{--<div class="section-description">
                    <p class="text-light-white">Коротко о том, как описать текущие фотографии. Коротко о том, как описать текущие фотографии.</p>
                </div>--}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row gallery-grid" >
                        <div class="col-lg-3 col-md-6 filter-box h-main">
                            <div class="service-item animate-img mb-xl-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-1.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                       {{-- <h5 class="text-custom-blue no-margin fw-600 fs-20">Flat</h5>
                                        <p class="text-light-white no-margin">Home Maintaince</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box genrl-cons">
                            <div class="service-item animate-img mb-xl-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-2.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                        {{--<h5 class="text-custom-blue no-margin fw-600 fs-20">Hotels</h5>
                                        <p class="text-light-white no-margin">General Construction</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box restructured">
                            <div class="service-item animate-img mb-xl-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-3.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                       {{-- <h5 class="text-custom-blue no-margin fw-600 fs-20">Buildings</h5>
                                        <p class="text-light-white no-margin">Restructed</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box pro-manage">
                            <div class="service-item animate-img mb-xl-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-4.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                        {{--<h5 class="text-custom-blue no-margin fw-600 fs-20">Apartments</h5>
                                        <p class="text-light-white no-margin">Project Management</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box h-main">
                            <div class="service-item animate-img mb-md-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-5.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                        {{--<h5 class="text-custom-blue no-margin fw-600 fs-20">Schools</h5>
                                        <p class="text-light-white no-margin">Home Maintaince</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box genrl-cons">
                            <div class="service-item animate-img mb-md-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-6.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                        {{--<h5 class="text-custom-blue no-margin fw-600 fs-20">Govermental</h5>
                                        <p class="text-light-white no-margin">General Construction</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box restructured">
                            <div class="service-item animate-img mb-sm-20">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-1.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                        {{--<h5 class="text-custom-blue no-margin fw-600 fs-20">Staduims</h5>
                                        <p class="text-light-white no-margin">Restructed</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 filter-box pro-manage">
                            <div class="service-item animate-img">
                                <a href="#" tabindex="0">
                                    <img src="{{ asset('images/gallery/gallery-2.jpg') }}" class="image-fit" alt="img">
                                    <div class="text-wrapper">
                                       {{-- <h5 class="text-custom-blue no-margin fw-600 fs-20">Hospitals</h5>
                                        <p class="text-light-white no-margin">Project Management</p>--}}
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Наши партнеры -->
    <!--
    <section class="section-padding bg-light-white">
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h5 class="text-custom-blue wow fadeInUp"
                        data-wow-duration="1s" data-wow-delay="0.3s">Партнеры</h5>
                    <h3 class="text-theme fw-700">Наши уважаемые партнеры</h3>
                </div>
                <div class="section-description">
                    <p class="text-light-white">Коротко о тех организациях с которыми у вас выстроены доверительные отношения.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="partner-box mb-md-40">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="{{ asset('images/homepage-1/partner-1-120x120.png') }}" class="img-fluid" alt="partners">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-box mb-md-40">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="{{ asset('images/homepage-1/partner-2-120x120.png') }}" class="img-fluid" alt="partners">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-box mb-md-40">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="{{ asset('images/homepage-1/partner-3-120x120.png') }}" class="img-fluid" alt="partners">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-box mb-md-40">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="{{ asset('images/homepage-1/partner-4-120x120.png') }}" class="img-fluid" alt="partners">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="partner-box">
                        <div class="partner-logo">
                            <a href="#">
                                <img src="{{ asset('images/homepage-1/partner-5-120x120.png') }}" class="img-fluid" alt="partners">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--Наши партнеры - конец-->

    <!--Наши преимущества-->
    <section class="section-padding satisfy-clients pt-4">
        <div class="container">

            <div class="section-header pb-1" style="max-width: 1200px">
                <div class="section-heading heading-white">
                    <h3 class="text-custom-white wow fadeInUp text-theme fw-700" data-wow-duration="1s" data-wow-delay="0.3s">Наши преимущества</h3>
                </div>
                <div class="section-description">
                    <p class="text-custom-white fs-16">Три основных правила: <b>стабильность, качество, наличие</b>, позволяют занимать <br>одно из первых мест, среди производителей и поставщиков фурнитуры.</p>
                    <p class="text-custom-white fs-16">Мы гарантируем стабильное качество!</p>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="text-left pb-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span class="fs-16 text-custom-white" style="text-transform: uppercase;">
                           Широкий ассортимент
                        </span>
                    </div>
                    <div class="counter-box mb-md-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
                        <img src="{{ asset('images/free-icon-product-range-1054353.png') }}" alt="">
                        <div class="counter pl-3">
                            <span class="count text-custom-white fs-12 add-plus">1500</span>
                            <span class="fs-16 text-custom-white">Изделий</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-left pb-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span class="fs-16 text-custom-white" style="text-transform: uppercase;">
                           Современное оборудование
                        </span>
                    </div>
                    <div class="counter-box mb-md-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
                        <img src="{{ asset('images/free-icon-press-2825651.png') }}" alt="">
                        <div class="counter pl-3">
                            <span class="count text-custom-white fs-12 add-plus">85</span>
                            <span class="fs-16 text-custom-white">Станков</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="text-left pb-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span class="fs-16 text-custom-white" style="text-transform: uppercase;">
                           Склады по стране
                        </span>
                    </div>
                    <div class="counter-box mb-md-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
                        <img src="{{ asset('images/free-icon-warehouse-4450638.png') }}" alt="">
                        <div class="counter pl-3">
                            <span class="count text-custom-white fs-12 add-plus">10</span>
                            <span class="fs-16 text-custom-white">складов</span>
                        </div>
                    </div>
                </div>
<!--
                <div class="col-lg-12 col-sm-6">
                    <div class="text-left pb-2 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <span class="fs-16 text-custom-white" style="text-transform: uppercase;">
                           Мы гарантируем качество
                        </span>
                    </div>
                    <div class="counter-box mb-md-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" >
                        <img src="{{ asset('images/free-icon-recommend-5889140.png') }}" alt="">
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>
    <!--Наши преимущества-->

    <!--Наши клиенты и Отзывы-->
    <!--
    <section class="client-tesimonial arrow-shape-1">
        <div class="container-fluid no-padding">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="testimonials-box custom-container arrow-shape-2 wow fadeInLeftBig" >
                        <div class="section-header">
                            <div class="section-heading">
                                <h5 class="text-custom-white wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.3s" >Наши отзывы</h5>
                                <h3 class="text-theme fw-700">Отзывы клиентов</h3>
                            </div>
                            <div class="section-description">
                                <p class="text-custom-white">Наши клиенты отзываются о нас как правило только хорошо и тд</p>
                            </div>
                        </div>

                        <div class="testimonials-wrapper">
                            <div class="col-12">
                                <div class="testimonial-nav row mb-xl-40 ">
                                    <div class="slick-active col-12" data-slick-index="2">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-1-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                    <div class="slick-active col-12" data-slick-index="1">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-2-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                    <div class="slick-active col-12" data-slick-index="3">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-1-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                    <div class="slick-active col-12" data-slick-index="4">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-3-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                    <div class="slick-active col-12" data-slick-index="5">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-2-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                    <div class="slick-active col-12" data-slick-index="6">
                                        <div class="testimonials-author">
                                            <img src="{{ asset('images/homepage-1/testimonials-3-200x200.jpg') }}" class="rounded-circle image-fit" alt="img">
                                        </div>
                                    </div>
                                </div>

                                <div class="testimonial-for row">
                                    <div class="col-12" data-slick-index="1">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" data-slick-index="2">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" data-slick-index="3">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" data-slick-index="4">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" data-slick-index="5">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12" data-slick-index="6">
                                        <div class="testimonials-inner">
                                            <div class="testimonial-content">
                                                <h4 class="text-theme fw-700 fs-20">Отличное качество!</h4>
                                                <p class="text-custom-white mb-xl-20">Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится.</p>
                                                <p class="text-custom-white mb-xl-20">Тут еще какой-то текст.Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст. Работаем с ПластСтер вот уже больше 10 лет и нам очень нравится. Тут еще какой-то текст.</p>
                                                <p class="text-custom-black fw-700"><strong>Сергей Викторов<br>
                                                        <span class="text-custom-white fw-400">Уют в доме</span>
                                                    </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="clients-box custom-container wow fadeInRightBig">
                        <div class="section-header-right">
                            <div class="section-heading">
                                <h5 class="text-custom-blue wow fadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.3s">
                                    Наши клиенты</h5>
                                <h3 class="text-theme fw-700">Некоторые уважаемые клиенты</h3>
                            </div>
                            <div class="section-description">
                                <p class="text-light-white">Нам доверяют самые крупные организации, которые представлены на рынке уже более 20 лет. Это примерный текст.</p>
                            </div>
                        </div>
                        <div class="clients-wrapper">
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients1.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients2.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients3.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients2.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients3.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                            <div class="client-box">
                                <div class="client-item">
                                    <a href="#">
                                        <img src="{{ asset('images/clients/clients1.png') }}" class="image-fit" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--Наши клиенты и Отзывы конец-->

    <!--Новости-->
    <!--
    <section class="section-padding bg-light-white our_articles">
        <a style="margin-top: -120px;position: absolute;" name="news-section"></a>
        <div class="container">
            <div class="section-header">
                <div class="section-heading">
                    <h5 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">Блог</h5>
                    <h3 class="text-theme fw-700">Новости</h3>
                </div>
                <div class="section-description">
                    <p class="text-light-white">Здесь отражены последние новости в сфере строительства (примерный текст)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper-container blog-slider swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide-active"  data-swiper-slide-index="0">
                                <article class="post">
                                    <div class="post-wrapper">
                                        <div class="blog-img animate-img">
                                            <a href="{{ url('/news') }}">
                                                <img src="{{ asset('images/news/news1.jpg') }}" class="img-fluid full-width" alt="blog">
                                            </a>

                                            <div class="post-video">
                                                <div class="video-btn-wrapper">
                                                    <a href="https://vk.com/video-89747197_456239044" class="text-custom-blue popup-video"><i class="fa fa-play-circle"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-date">
                                            <a href="{{ url('/news') }}">09 Фев 2022</a>
                                        </div>
                                        <div class="blog-meta bg-custom-white padding-20">
                                            <h2 class="post-title">
                                                <a href="{{ url('/news') }}" class="text-theme">Модульные полы</a>
                                            </h2>
                                            <p class="text-light-white no-margin">Модульные полы
                                                Долговечное, износостойкое покрытие , не требующее профессиональных навыков для монтажа</p>
                                        </div>
                                        <div class="blog-footer-meta bg-custom-white padding-20">
                                            <div class="post-author">
                                            </div>
                                            <div class="post-link">
                                                <a href="{{ url('/news') }}" class="link-btn text-custom-blue fw-600 fs-14">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide swiper-slide-active"  data-swiper-slide-index="1">
                                <article class="post">
                                    <div class="post-wrapper">
                                        <div class="blog-img animate-img">
                                            <a href="{{ url('/news') }}">
                                                <img src="{{ asset('images/news/news3.jpg') }}" class="img-fluid full-width" alt="blog">
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <a href="{{ url('/news') }}">26 Окт 2022</a>
                                        </div>
                                        <div class="blog-meta bg-custom-white padding-20">
                                            <h2 class="post-title">
                                                <a href="{{ url('/news') }}" class="text-theme">Новый склад</a>
                                            </h2>
                                            <p class="text-light-white no-margin">Успешно открыт очередной вклад. Теперь всем жителям урала доступны наши изделия по выгодным ценам.</p>
                                        </div>
                                        <div class="blog-footer-meta bg-custom-white padding-20">
                                            <div class="post-author">
                                            </div>
                                            <div class="post-link">
                                                <a href="{{ url('/news') }}" class="link-btn text-custom-blue fw-600 fs-14">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide swiper-slide-active"  data-swiper-slide-index="2">
                                <article class="post">
                                    <div class="post-wrapper">
                                        <div class="blog-img animate-img">
                                            <a href="{{ url('/news') }}">
                                                <img src="{{ asset('images/news/news2.jpg') }}" class="img-fluid full-width" alt="blog">
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <a href="{{ url('/news') }}">28 Ноя 2022</a>
                                        </div>
                                        <div class="blog-meta bg-custom-white padding-20">
                                            <h2 class="post-title">
                                                <a href="{{ url('/news') }}" class="text-theme">Платформа из вторичного сырья </a>
                                            </h2>
                                            <p class="text-light-white no-margin">Запустили в производство платформы из вторичного сырья.</p>
                                        </div>
                                        <div class="blog-footer-meta bg-custom-white padding-20">
                                            <div class="post-author">
                                            </div>
                                            <div class="post-link">
                                                <a href="{{ url('/news') }}" class="link-btn text-custom-blue fw-600 fs-14">читать далее</a>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="slider-btn">
                        <div class="blog-button-next swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
                            <span class="flaticon-arrow-1"></span>
                        </div>
                        <div class="blog-button-prev swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
                            <span class="flaticon-left"></span>
                        </div>
                    </div>
                    <div class="blog-pagination swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                        <span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span>
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->
    <!--Новости конец-->

    <!-- Напишите нам -->
    <section class="section-padding bg-call-to-action">
        <div class="overlay overlay-bg"></div>
        <div class="row">
            <!--
            <div class="col-lg-6 wow fadeInLeftBig">
                <div class="faq-box mb-md-40 ml-4 " >
                    <div class="faq-wrapper" id="accordion">
                        <div class="title-img mb-xl-20 animate-img">
                            <div class="section-header">
                                <div class="section-heading">
                                    <h5 class="text-custom-blue wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                                        Часто задаваемые вопросы</h5>
                                    <h3 class="text-custom-white fw-700">Вопрос-ответ</h3>
                                </div>
                                <div class="section-description">
                                    <p class="text-custom-white">Вы спрашиваете -  Мы отвечаем!</p>
                                </div>
                            </div>
                        </div>
                        <div class="custom-accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <button class="collapsebtn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                                        Самый частый вопрос
                                    </button>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordion" style="">
                                    <div class="card-body pl-4 pr-4">
                                        <p class="text-theme no-margin">
                                            Ответ на самый частый вопрос. Ответ на самый частый вопрос. Ответ на самый частый вопрос
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false">
                                        Второй вопрос. Второй вопрос.
                                    </button>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body pl-4 pr-4">
                                        <p class="text-theme no-margin">
                                            Отвеот на второй вопрос. Отвеот на второй вопрос.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                                        Третий вопрос.
                                    </button>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body pl-4 pr-4">
                                        <p class="text-theme no-margin">
                                            Ответ на третий вопрос.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false">
                                        Здесь будет четвертый вопрос.
                                    </button>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body pl-4 pr-4">
                                        <p class="text-theme no-margin">
                                            Здесь будет ответ на четвертый вопрос
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <button class="collapsebtn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false">
                                        Пятый вопрос тут
                                    </button>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordion" style="">
                                    <div class="card-body pl-4 pr-4">
                                        <p class="text-theme no-margin">
                                            Ответ на пятый вопрос здесь
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <div class="col-lg-12 wow fadeInRightBig">
                <a style="margin-top: -120px;position: absolute;" name="write-to-us"></a>
                <div class="container">
                    <div class="section-header">
                        <div class="section-heading">
                            <h5 class="text-custom-blue wow fadeInUp"
                                data-wow-duration="1s" data-wow-delay="0.3s">
                                Бесплатная консультация</h5>
                            <h3 class="text-custom-white fw-700">Напишите нам</h3>
                        </div>
                        <div class="section-description">
                            <p class="text-custom-white">Остались вопросы? Вы можете использовать форму быстрой связи.
                                Мы будем рады ответить на ваши вопросы.</p>
                        </div>
                    </div>
                    <div class="row consult-form">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" name="#" class="form-control form-control-custom" placeholder="Имя Фамилия">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <input type="email" name="#" class="form-control form-control-custom" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" name="#" class="form-control form-control-custom" placeholder="Телефон">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group form-group-label-outside offset-top-20">
                                <textarea id="contacts-message" name="message" class="form-control" rows="3" style="background: transparent" placeholder="Сообщение"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group ">
                               {{-- <button type="submit" class="btn-first btn-submit full-width btn-height">Отправить</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Напишите нам - конец-->

@endsection
