@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500">Модульные полы</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li>
                                <a href="{{ url('/news') }}">Новости</a>
                            </li>
                            <li class="active">
                                Модульные полы
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding blog-details">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- article -->
                    <article class="post">
                        <div class="post-wrapper">
                            <div class="blog-img animate-img mb-xl-20">
                                <a href="#">
                                    <img src="{{ asset('images/news/news11.jpg') }}" class="img-fluid image-fit" alt="Blog">
                                </a>
                                <div class="post-date">
                                    <a href="#">12 Дек 2022</a>
                                </div>
                            </div>
                            <div class="blog-meta">
                                <div class="blog-content">
                                    <p class="text-theme description">Сегодня модульные напольные покрытия пользуются возрастающей популярностью. Они позволяют создать различные дизайнерские вариации от простого геометрического узора до сложной мозаики, и при этом просты в эксплуатации. Пластиковое напольное покрытие — это сочетание практичности, доступной цены и превосходных эксплуатационных характеристик.</p>

                                    <p class="text-theme description">
                                        Наша компания, наработав значительный опыт в сфере производства модульных напольных покрытий, предлагает гарантированное качество своих изделий и сервис европейского уровня.
                                    </p>

                                    <p class="text-theme description">Сегодня модульные напольные покрытия пользуются возрастающей популярностью. Они позволяют создать различные дизайнерские вариации от простого геометрического узора до сложной мозаики, и при этом просты в эксплуатации. Пластиковое напольное покрытие — это сочетание практичности, доступной цены и превосходных эксплуатационных характеристик.</p>

                                    <p class="text-theme description">
                                        Наша компания, наработав значительный опыт в сфере производства модульных напольных покрытий, предлагает гарантированное качество своих изделий и сервис европейского уровня.
                                    </p>


                                    <p class="text-theme description">Сегодня модульные напольные покрытия пользуются возрастающей популярностью. Они позволяют создать различные дизайнерские вариации от простого геометрического узора до сложной мозаики, и при этом просты в эксплуатации. Пластиковое напольное покрытие — это сочетание практичности, доступной цены и превосходных эксплуатационных характеристик.</p>

                                    <p class="text-theme description">
                                        Наша компания, наработав значительный опыт в сфере производства модульных напольных покрытий, предлагает гарантированное качество своих изделий и сервис европейского уровня.
                                    </p>
                                    <div class="blog-video mb-xl-20">
                                        <div class="video_wrapper">
                                            <div class="videoPoster">
                                                <img src="{{ asset('images/news/news11.jpg') }}" class="image-fit" alt="#">
                                                <div class="video-inner video-btn-wrapper">
                                                    <a href="https://vk.com/video-89747197_456239044" class="text-custom-blue popup-video"><i class="fa fa-play-circle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-theme description">Модульные полы производства ПластСтер
                                        Долговечное, износостойкое покрытие , не требующее профессиональных навыков для монтажа
                                        Сферы применения:
                                        <ul class="custom service-detail-infro">
                                        <li>
                                            <span class="text-theme fs-14">производственные цеха и склады</span>

                                        </li>
                                        <li>
                                            <span class="text-theme fs-14">гаражи и беседки</span>
                                        </li>
                                        <li>
                                            <span class="text-theme fs-14">детские площадки</span>
                                        </li>
                                        <li>
                                            <span class="text-theme fs-14">подвальные и технические помещения</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- post pagination -->
                    <div class="pagination-btn">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Предыдущая</a></li>
                                <li class="page-item"><a class="page-link" href="#">Следующая</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- post pagination -->
                </div>
            </div>
        </div>
    </section>
@endsection
