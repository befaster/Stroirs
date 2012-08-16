jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',            	
            animationSpeed: 500,
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
