<header class="menu-style">
    <div class="container-fluid custom-container">
        <div class="row">
            <div class="col-12">
                <div class="header">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/logo.png')}}" class="img-fluid image-fit" alt="Logo">
                        </a>
                    </div>
                    <div class="right-side">
                        <div class="navigation">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('images/logo.png')}}" class="img-fluid image-fit" alt="Logo">
                                </a>
                            </div>
                            <nav>
                                <ul class="custom main-menu">
                                    <li class="menu-item @this_url(array('/')) active @endthis_url">
                                        <a href="{{ url('/') }}" class="text-theme fs-14">Главная
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/') }}#about-us" class="text-theme fs-14">О нас</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children @this_url(array('/delivery','/storages')) active @endthis_url">
                                        <a href="{{ url('/') }}" class="text-theme fs-14">Продукция
                                        </a>
                                        <ul class="custom sub-menu">
                                            <li class="menu-item">
                                                <a href="https://пластпродажи.рф/products" class="text-theme">Каталог изделий</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://пластпродажи.рф/" class="text-theme">Актуальный прайс</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="https://пластпродажи.рф/" class="text-theme">Интернет-магазин</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('/delivery') }}" class="text-theme">Доставка и оплата</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{ url('/storages') }}" class="text-theme">Склады</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ url('/') }}#news-section" class="text-theme fs-14">Новости
                                        </a>
                                    </li>
                                    <li class="menu-item @this_url(array('/dealers')) active @endthis_url">
                                        <a href="{{ url('/dealers') }}" class="text-theme fs-14">Дилерам
                                        </a>
                                    </li>
                                    <li class="menu-item  @this_url(array('/contacts')) active @endthis_url">
                                        <a href="{{ url('/contacts') }}" class="text-theme fs-14">Контакты
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="social-media">
                                <ul class="custom">
                                    <li>
                                        <a href="https://vk.com/plastsale?ysclid=ljgms5fx2l38785748" class="text-custom-white"><i class="fa fa-vk"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@user-gl9ph5ti7b/featured" class="text-custom-white"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hamburger-menu">
                            <div class="menu-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="right-side-2">
                        <div class="cta-btn">
                            <div class="cta-text">
                                <a href="{{ url('/') }}#write-to-us" class="addlisting-btn btn-first btn-border">Напишите нам</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
