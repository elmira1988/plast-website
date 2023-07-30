@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500">Дилерам</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li class="active">
                                Дилерам
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding contact-us clearfix">
        <div class="container">
            <h3 class="text-custom-blue">Предлагаем стать официальным представителем в Вашем регионе! </h3>
            <div class="row">
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Конкурентные цены</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Высокое качество продукции</h6>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="listing-detail-heading mb-xl-20">
                        <h6 class="no-margin text-theme">Оперативное пополнение склада</h6>
                    </div>
                </div>
            </div>
            <p>Условия сотрудничества и дилерский прайс по запросу.</p>
            <h5 class="text-theme fs-20"><i class="fa fa-envelope mr-1 text-custom-blue"></i> <span class="pr-3">sterplast@mail.ru</span>
                <i class="fa fa-phone mr-1 text-custom-blue"></i> 8 927 315 03 04 <span class="fs-16"> (Данил)</span></h5>

            <img src="{{ asset('images/7czqsn5gbrwgws0kw44owskswgsocs.jpg') }}" alt="">
        </div>
    </section>

@endsection
