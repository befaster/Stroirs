/*
jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'horizontal',
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: true,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next'
        });
    });
	
});
*/

jQuery(function($){
    $('document').ready(function() {
        $(".slider").easySlider({
            auto: true,
            continuous: true,          
        });
    });	
});