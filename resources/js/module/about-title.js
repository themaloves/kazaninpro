import $ from 'jquery';

$(() => {
    const $aboutItemTopColumn = $('.column-top__item:first-child'),
        $columnLeft = $('.column-top__left'),
        $text = $('.column-top__text'),
        returnedText = () => new RegExp(/[a-zA-Z]/).test($text.text());

    if (window.matchMedia('(max-width: 1200px)').matches === true) {
        if ($columnLeft.find('.column-top__title').length === 0) {
            const text = returnedText() ? 'About' : 'О нас';

            $(`<h1 class="column-top__title">${text}</h1>`).prependTo($columnLeft);
            $aboutItemTopColumn.remove();
        }
    }
});
