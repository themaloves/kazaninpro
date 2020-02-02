import $ from 'jquery';

$(() => {
    let $previewAnchor = $('.anchor__button'),
        $documentHtmlAndBody = $('html, body'),
        $menuCategoriesSection = $('.menu-categories');

    $previewAnchor.on('click', () => {
        $documentHtmlAndBody.animate({
            scrollTop: $menuCategoriesSection.offset().top
        }, 'slow')
    });
});
