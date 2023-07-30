@extends('layouts.app')

@section('content')
    <div class="subheader section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-wrapper">
                        <div class="page-title">
                            <h1 class="text-theme fw-500">Контакты</h1>
                        </div>
                        <ul class="custom breadcrumb">
                            <li>
                                <a href="{{ url('/') }}">Главная</a>
                            </li>
                            <li class="active">
                                Контакты
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding-top contact-us clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-7">
                    <div class="contact-us-form h-100">
                        <h3 class="text-custom-white mb-xl-30">Остались вопросы? Напишите нам!</h3>
                        <form class="mf_form_validate ajax_submit" action="#" method="post" enctype="multipart/form-data" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-custom" placeholder="Имя" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-custom" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control form-control-custom" placeholder="Телефон" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control form-control-custom" rows="4" name="message" placeholder="Текст ..."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn-first btn-border">Отправить</button>
                                    <div class="server_response w-100">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <ul class="custom">
                            <li>
                                <h5 class="text-theme fs-20">
                                    <i class="fa fa-map-marker mr-2 text-custom-blue"></i> Адрес
                                </h5>
                                <p class="text-light-white no-margin fs-16">Россия, Республика Башкортостан,</p>
                                <p class="text-light-white no-margin fs-16"> город Стерлитамак, ул. Олега Кошевого, 10</p>
                                <p class="text-light-white no-margin fs-16">453100</p>
                                    <span class="text-theme fw-600">Производство</span>
                            </li>
                            <hr>
                            <li>
                                <h5 class="text-theme fs-20"><i class="fa fa-envelope mr-2 text-custom-blue"></i> Email</h5>
                                <a href="mailto:" class="text-light-white fs-16">zakaz@plastster.ru</a><br>
                                <span class="text-theme fw-600">Отдел продаж</span>
                            </li>
                            <hr>
                            <li>
                                <h5 class="text-theme fs-20"><i class="fa fa-phone mr-2 text-custom-blue"></i> Телефон</h5>
                                <a href="tel:" class="text-light-white fs-16">8 (927) 347-16-30</a><br>
                                <span class="text-theme"> (whatsapp, viber)</span><br>
                                <span class="text-theme fw-600">Отдел продаж</span>
                                <br>
                                <br>
                                <a href="tel:" class="text-light-white fs-16">8 (800) 505-34-45</a><br>
                                <span class="text-theme fw-600">Многоканальный</span>

                            </li>
                        </ul>
                        <hr>
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn-first btn-submit full-width btn-height" data-toggle="modal" data-target="#myModal">Реквизиты</button>
                        <div class="footer">
                            <div class="footer-box">
                                <div class="social-media">
                                    <ul class="custom social-media">
                                        <li><a href="https://vk.com/plastsale?ysclid=ljgms5fx2l38785748">
                                                <i class="fa fa-vk"></i></a></li>
                                        <li><a href="https://www.youtube.com/@user-gl9ph5ti7b/featured"><i class="fa fa-youtube-play"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><h5 class="text-theme fw-600 no-margin">Реквизиты</h5></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="container">
                        <table class="table table-hover mt-2 border-0">
                            <thead>
                            <tr>
                                <th class="border-0" colspan="2"> <h6 class="text-custom-blue mb-1">Наименование компании</h6></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-light-white border-left-0">Полное наименование</td>
                                <td class="text-theme ml-0 border-right-0">Общество с ограниченной ответственностью "ПластСтер"</td>
                            </tr>
                            <tr>
                                <td class="text-light-white border-left-0">Сокращенное наименование</td>
                                <td class="text-theme ml-0 border-right-0">ООО ПластСтер</td>
                            </tr>
                            <tr>
                                <td class="text-light-white border-left-0">Сокращенное (на иностранном языке)</td>
                                <td class="text-theme ml-0 border-right-0">PlastSter</td>
                            </tr>
                            <tr>
                                <td class="border-0" colspan="2"> <h6 class="text-custom-blue mb-1">Регистрационная информация</h6></td>
                            </tr>
                            <tr>
                                <td class="text-light-white border-left-0">Юридический адрес</td>
                                <td class="text-theme ml-0 border-right-0">453102, Республика Башкортостан, г.Стерлитамак, ул. Олега Кошевого, д.2</td>
                            </tr>
                            <tr>
                                <td class="text-light-white border-left-0">Фактический адрес</td>
                                <td class="text-theme ml-0 border-right-0">453102, Республика Башкортостан, г.Стерлитамак, ул. Олега Кошевого, д.10 </td>
                            </tr>
                            <tr>
                                <td class="text-light-white border-left-0">ИНН</td>
                                <td class="text-theme ml-0 border-right-0">0268046714</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">КПП</td>
                                <td class="text-theme ml-0 border-right-0">026801001</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">Банк получателя</td>
                                <td class="text-theme ml-0 border-right-0">в Приволжском Филиале ПАО РОСБАНК</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">Расчетный счет</td>
                                <td class="text-theme ml-0 border-right-0">40702810025320000057</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">Корреспондентский счет</td>
                                <td class="text-theme ml-0 border-right-0">30101810400000000747</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">БИК</td>
                                <td class="text-theme ml-0 border-right-0">042202747</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">ОКПО</td>
                                <td class="text-theme ml-0 border-right-0">84450180</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">ОКВЭД</td>
                                <td class="text-theme ml-0 border-right-0">25.24.2</td>
                            </tr>

                            <tr>
                                <td class="text-light-white border-left-0">ОГРН</td>
                                <td class="text-theme ml-0 border-right-0">1070268003739</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2362.556717458611!2d55.96899527704718!3d53.690525448914975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d813e895617ac7%3A0x253662d43f7f30b6!2z0YPQuy4g0J7Qu9C10LPQsCDQmtC-0YjQtdCy0L7Qs9C-LCAxMCwg0KHRgtC10YDQu9C40YLQsNC80LDQuiwg0KDQtdGB0L8uINCR0LDRiNC60L7RgNGC0L7RgdGC0LDQvSwgNDUzMTA1!5e0!3m2!1sru!2sru!4v1690287544270!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
