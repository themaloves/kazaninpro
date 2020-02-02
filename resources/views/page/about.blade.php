@section ('title', 'О нас')

@extends('layout')

@section('content')
    <section class="about-us">

        @include('layout.header')

        @include('parts.column-top.column-top')

        @include('parts.column-bottom.column-bottom')

{{--        <span class="about-us__page-decor">О нас</span>--}}

{{--        <div class="staff">--}}

{{--            <picture class="staff__images-box">--}}
{{--                <img src="/images/about-us/img_about_one_line.jpg" alt="images">--}}
{{--            </picture>--}}

{{--            <div class="staff__title">--}}
{{--                <h1 class="heading--normal-size">О нас</h1>--}}
{{--            </div>--}}

{{--            <div class="staff__description">--}}

{{--                <p class="paragraph--normal-size">--}}
{{--                    Создатели компании - Роман Тризна и Антон Гиздатуллин, работая в сфере обследования и--}}
{{--                    проектирования зданий с 2006 года, объединились в 2014 году и начали работать под общим брендом--}}
{{--                    «Казанский Инженерный Проект». За несколько лет мы смогли убедить в своей ответственности и--}}
{{--                    компетентности десятки заказчиков.--}}

{{--                </p>--}}
{{--                <br>--}}
{{--                <p class="paragraph--normal-size">--}}
{{--                    Сегодня Казанский Инженерный Проект — это команда из профессионалов, специализирующихся на обследовании--}}
{{--                    и независимой экспертизе зданий и сооружений, а также разработке проектных решений по усилению и--}}
{{--                    реконструкции зданий и сооружений различного назначения.--}}
{{--                </p>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="company">--}}

{{--            <div class="company__description">--}}

{{--                <p class="paragraph--normal-size">--}}
{{--                    Первоначальная и основная специализация нашей компании – техническое обследование зданий,--}}
{{--                    проводимое для оценки их фактического технического состояния, возможности эксплуатации и--}}
{{--                    необходимости проведения ремонтных работ. Со временем, на основе результатов наших--}}
{{--                    обследований мы начали разрабатывать проекты усиления и реконструкции зданий, а впоследствии--}}
{{--                    перешли к проектированию новых объектов.--}}

{{--                </p>--}}
{{--                <br>--}}
{{--                <p class="paragraph--normal-size">--}}
{{--                    Сотрудники активно занимаются научными исследованиями, что позволяет квалифицированно выполнять--}}
{{--                    работы, связанные с испытаниями и экспериментальной оценкой соответствия строительных конструкций--}}
{{--                    и материалов расчетным параметрам. В разное время нашими специалистами проводились работы по--}}
{{--                    испытаниям плит перекрытий, свай с преднапрягаемой арматурой, балок армированных композитной--}}
{{--                    стекло - и базальтопластиковой арматурой и других.--}}
{{--                </p>--}}

{{--            </div>--}}

{{--            <picture class="company__images-box">--}}
{{--                <img src="/images/about-us/img_about_two_line.jpg" alt="images">--}}
{{--            </picture>--}}

{{--        </div>--}}

{{--        <div class="geography-project">--}}

{{--            <div class="geography-project__title">--}}
{{--                <h1 class="heading--normal-size">География проектов</h1>--}}
{{--            </div>--}}

{{--            <div class="geography-project__description">--}}
{{--                <p class="paragraph--normal-size">--}}
{{--                    За короткую историю, нашими специалистами выполнялись работы в Москве и Московской области,--}}
{{--                    Нижнем Новгороде, Перми, Иркутске, Самаре, а также почти во всех районах Республики Татарстан.--}}
{{--                </p>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="activity">--}}
{{--            <div class="activity__head-title">--}}
{{--                <h2 class="heading--normal-size">Направление деятельности</h2>--}}
{{--            </div>--}}
{{--            <div class="activity__items-wrap">--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-pen"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Проектирование</div>--}}
{{--                </div>--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-compress-arrows-alt"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Обследование</div>--}}
{{--                </div>--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-eye"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Мониторинг состояния</div>--}}
{{--                </div>--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-ruler-combined"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Реконструкция</div>--}}
{{--                </div>--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-search"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Независимая экспертиза</div>--}}
{{--                </div>--}}
{{--                <div class="activity__items">--}}
{{--                    <div class="activity__icon">--}}
{{--                        <i class="fas fa-file-alt"></i>--}}
{{--                    </div>--}}
{{--                    <div class="activity__title">Испытание кострукций</div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="our-clients">--}}
{{--            <div class="our-clients__title">--}}
{{--                <h1 class="heading--normal-size">Наши Клиенты</h1>--}}
{{--            </div>--}}
{{--        </div>--}}

    </section>
@endsection
