jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.views-field-field-gallery-image',
            children: 'div',
            transition: 'horizontal',
            autoplay: true,
            pauseOnHover: true,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next'
        });
    });
	
});
