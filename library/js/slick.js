(function( $ ) {
	'use strict';

    var popupSlide = $('.slider').slick({
        accessibility: true,
        infinite: false,
        dots: false,
        prevArrow: '.prev',
        nextArrow: '.next'
    });

    $('.btnPlay').on('click', function () {
        popupSlide.slick('slickPlay');
        $('a.slick-active').attr("tabindex","1");
        $('.btnReset').attr("tabindex","4");
    });
    $('.btnPause').on('click', function () {
        popupSlide.slick('slickPause');
        $('a.slick-active').focus();
        $('a.slick-active').attr("tabindex","1");
        $('.btnReset').attr("tabindex","4");
    });
    $(".btnReset").click(function () {
        location.reload();
    });

})( jQuery );
