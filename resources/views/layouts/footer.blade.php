<footer class="bg-custom-black section-padding footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="footer-box mb-md-80">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Полезные ссылки</h4>
                    </div>
                    <ul class="custom links">
                        <li>
                            <a href="https://пластпродажи.рф/" class="text-custom-white">Изделия</a>
                        </li>
                        <li>
                            <a href="https://пластпродажи.рф/" class="text-custom-white">Актуальный прайс</a>
                        </li>
                        <li>
                            <a href="{{ url('/storages') }}" class="text-custom-white">Склады</a>
                        </li>
                        <li>
                            <a href="{{ url('/dealers') }}" class="text-custom-white">Дилерам</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="footer-box">
                    <div class="footer-heading">
                        <h4 class="text-custom-white no-margin">Контакты</h4>
                    </div>
                    <div class="contact-info">
                        <ul class="custom">
                            <li>
                                <h5 class="text-theme fs-20 d-inline">
                                    <i class="fa fa-map-marker mr-2 text-custom-blue"></i>
                                </h5>
                                <p class="text-light-white no-margin fs-16 d-inline">Россия, РБ, г. Стерлитамак, ул. Олега Кошевого, 10</p>
                            </li>
                            <li>
                                <h5 class="text-theme fs-20 d-inline">
                                    <i class="fa fa-envelope mr-2 text-custom-blue"></i>
                                </h5>
                                <a href="mailto:" class="text-light-white fs-1 d-inline fs-16">zakaz@plastster.ru</a><br>
                            </li>
                            <li>
                                <h5 class="text-theme fs-20 d-inline" ><i class="fa fa-phone mr-2 text-custom-blue "></i></h5>
                                <a href="tel:" class="text-light-white fs-16 d-inline">8 (927) 347-16-30, 8 (800) 505-34-45</a>
                            </li>
                        </ul>

                    </div>

                    <div class="social-media">
                        <ul class="custom social-media">
                            <li>
                                <a href="https://vk.com/plastsale?ysclid=ljgms5fx2l38785748" class="text-custom-white"><i class="fa fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/@user-gl9ph5ti7b/featured" class="text-custom-white"><i class="fa fa-youtube-play"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-6">
                <p class="text-custom-white no-margin">© ПластСтер - 2023 | Все права защищены.</p>
            </div>
        </div>
    </div>
</div>

<div id="back-top" class="back-top" style="display: block;">
    <a href="#top">
        <i class="fa fa-chevron-up"></i><span class="d-block">вверх</span>
    </a>
</div>

<!-- Place all Scripts Here -->
<script src="{{ mix('/js/app.js') }}"></script>
