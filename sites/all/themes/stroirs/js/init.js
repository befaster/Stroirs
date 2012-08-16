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
                       
        setInterval(function() {
            $('.slider').stop();
            $('.sliderArrows a.next').trigger('click');
            $('.slider').stop();
        }, 3000);
        
    }); 
});
