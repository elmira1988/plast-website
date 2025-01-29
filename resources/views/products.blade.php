@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500" style="text-transform: inherit;">Продукция</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li class="active" style="text-transform: inherit;">
                               Продукция
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding bg-light-white listing-detail">
        <div class="container">
            <div class="section_our_solution">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="https://пластпродажи.рф">
                                        <h3 class="col-lg-12 text-center">
                                            Комплектующие для монтажа натяжных потолков
                                        </h3>
                                    </a>
                                </div>
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="https://neo-pol.ru">
                                        <h3 class="col-lg-12 text-center">
                                            Напольные покрытия
                                        </h3>
                                    </a>
                                </div>
                            </div>
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="#">
                                        <h3 class="col-lg-12 text-center">Изолирующие элементы опор контактной сети железных дорог</h3>
                                    </a>
                                </div>
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="https://strbee.biz/katalog?tfc_storepartuid[455923084]=%D0%9F%D1%87%D1%91%D0%BB%D0%BE%D0%B8%D0%BD%D0%B2%D0%B5%D0%BD%D1%82%D0%B0%D1%80%D1%8C&tfc_div=:::">
                                        <h3 class="col-lg-12 text-center">Производство пчеловодного инвентаря</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="#">
                                        <h3 class="col-lg-12 text-center">Участок подготовки сырья</h3>
                                    </a>
                                </div>
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="#">
                                        <h3 class="col-lg-12 text-center">Инструментальный участок</h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="our_solution_category">
                            <div class="solution_cards_box">
                                <div class="solution_card">
                                    <div class="hover_color_bubble"></div>
                                    <a class="solu_title row align-items-center" href="#">
                                        <h3 class="col-lg-12 text-center">Разное</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
