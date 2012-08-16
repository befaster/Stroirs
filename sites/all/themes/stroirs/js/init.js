jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',
            autoplay: false,
            pauseOnHover: false,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next'
        });
                       
        setTimeout(function() {
            ('.sliderArrows a.next').trigger('click');
        }, 2000);
        
    }); 
});
