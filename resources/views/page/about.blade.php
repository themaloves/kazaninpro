@section ('title', 'О нас')

@extends('layout')

@section('content')
    <section class="about-us">

        @include('layout.header')

        @include('parts.column-top.column-top')

        @include('parts.column-bottom.column-bottom')

        @include('parts.geography-projects.geography-projects')

{{--        <span class="about-us__page-decor">О нас</span>--}}

{{--

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
