jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',
            autoplay: false,
            pauseOnHover: true,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next'
        });
    });
    
    setInterval(function(){
        stop();
        //$('.slider a.next').click();
    },3000);     
	
});
