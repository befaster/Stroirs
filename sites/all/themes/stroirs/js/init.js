jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.views-field-field-gallery-image',
            children: 'div',
            transition: 'fade',
            autoplay: true,
            pauseOnHover: false,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next'
        });
    });
	
});
