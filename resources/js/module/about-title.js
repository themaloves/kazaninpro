import $ from 'jquery';

$(() => {
    let $aboutItemTopColumn = $('.column-top__item:first-child'),
        $columnLeft = $('.column-top__left');

    if (window.matchMedia('(max-width: 1200px)').matches === true) {
        if ($columnLeft.find('.column-top__title').length === 0) {
            $('<h1 class="column-top__title">О нас</h1>').prependTo($columnLeft);
            $aboutItemTopColumn.remove();
        }
    }
});
