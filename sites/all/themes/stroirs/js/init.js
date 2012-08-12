jQuery(function($){
    $('document').ready(function() {
        $('.sliderContent').mobilyslider({
           /* content: '.views-field-field-gallery-image',*/
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
