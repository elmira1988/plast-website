@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500" style="text-transform: inherit;">Доставка и оплата</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li class="active" style="text-transform: inherit;">
                                Доставка и оплата
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding bg-light-white listing-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Отгрузка по 100% предоплате</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Продажа от упаковки</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Подбор попутного автотранспорта</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="description-box bg-custom-white padding-20">
                        <div class="content-box">
                            <div class="head">
                                <h5 class="text-theme fw-600 no-margin">Способы доставки</h5>
                            </div>
                            <div class="row fs-16">
                                <div class="col-lg-6">
                                    <h6 class="text-custom-blue">Самовывоз</h6>
                                    <p class="text-light-white desc fs-16">Со складов</p>
                                    <p  class="text-light-white desc fs-16">Пн-Чт&nbsp;&nbsp;&nbsp;с 8:00 до 17:00
                                        <br>Пт&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;с 8:00 до 16:00
                                    <br>Сб,Вс&nbsp;&nbsp;&nbsp;&nbsp;выходной</p>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-custom-blue">Транспортные компании</h6>
                                    <p class="text-light-white desc fs-16">Доставка осуществляется транспортными компаниями:</p>
                                    <ul class="text-light-white desc fs-16">
                                        <li>"GTD"</li>
                                        <li>"Деловые линии"</li>
                                        <li>"Байкал Сервис"</li>
                                        <li>"Мейджик-транс"</li>
                                    </ul>
                                    <p class="text-light-white desc fs-16">либо попутными машинами, после поступления денег на расчетные счета компании, или карту</p>
                                </div>
                            </div>
                            <p class="text-light-white desc fs-16">Доставка в Казахстан и страны ближнего зарубежья, выполняются трансопртными компаниями и попутными автомобилями на стандартных условиях
                            </p>
                        </div>
                    </div>
                    <div class="description-box bg-custom-white padding-20 mt-4">
                        <div class="content-box">
                            <div class="head">
                                <h5 class="text-theme fw-600 no-margin">Способы оплаты</h5>
                            </div>



                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="text-custom-blue ">Наличными</h6>
                                </div>
                                <div class="col-lg-6">
                                    <h6 class="text-custom-blue">Безналичный расчет с НДС, без НДС</h6>
                                    </div>
                            </div>
                            <p class="text-light-white desc fs-16">
                                Отгрузка со склада выполняется в течение двух рабочих дней, после поступления денежных средств
                            </p>
                        </div>
                    </div>
                    <div class="description-box bg-custom-white padding-20 mt-4">
                        <div class="content-box">
                            <div class="head">
                                <h5 class="text-theme fw-600 no-margin">Условаия возврата</h5>
                            </div>
                            <p class="text-light-white desc fs-16">
                                Возврат можно осуществить не позднее <span class="text-theme">двух недель</span> с момента получения товара.</p>
                            <p class="text-light-white desc fs-16">
                                Условие возврата: <span class="text-theme"> брак, пересорт, ошибка склада</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
