import $ from 'jquery';

$(() => {
    let $columnBottomLeft = $('.column-bottom__left'),
        $columnBottomItem = $columnBottomLeft.find('.column-bottom__item'),
        $buttonHiddenColumnBottomItem = $('.column-bottom__button-hidden');


    $buttonHiddenColumnBottomItem.on('click', () => {
        let heightBlock = $columnBottomItem.height();

        $columnBottomLeft.toggleClass('column-bottom__left--active');
        $columnBottomLeft.css('--height-left-column', heightBlock + 'px')

        if ($buttonHiddenColumnBottomItem.text() === 'Читать полностью') {
            $buttonHiddenColumnBottomItem.text('Свернуть')
            $buttonHiddenColumnBottomItem.css('margin-top', '20px');
        } else {
            $buttonHiddenColumnBottomItem.text('Читать полностью');
            $buttonHiddenColumnBottomItem.css('margin-top', '0');
        }
    });
});
