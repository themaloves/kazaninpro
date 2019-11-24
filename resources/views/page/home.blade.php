@extends('layout')

@section('content')
    <section class="preview">

        <div class="preview__background"></div>

        <div class="preview__company">

            <h1 class="heading--big-size">Казанский Инженерный Проект</h1>

            <ul>
                <li>Обследование зданий и сооружений</li>
                <li>Усиление, капитальный ремонт и реконструкция</li>
                <li>Проектирование новых объектов</li>
            </ul>

        </div>

        <div class="language">

            <div class="language__item">
                <a class="link--default" href="#">EN</a>
            </div>
            <div class="language__item">
                <a class="link--default" href="#">RU</a>
            </div>

        </div>

        <div class="anchor">

            <button class="anchor__button">
                <i class="fas fa-chevron-down"></i>
            </button>

        </div>

    </section>
@endsection