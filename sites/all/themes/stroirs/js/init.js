jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',            	
            animationSpeed: 0,
            autoplay: true,
            pauseOnHover: false,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next',
            animationStart: function(){$('.slider').stop();}, // call the function on start transition
            animationComplete: function(){$('.slider').stop();} // call the function when transition completed
        });
                       
        
    }); 
});
