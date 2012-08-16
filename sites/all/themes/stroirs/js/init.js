jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',            	
            animationSpeed: 1000,
            autoplay: true,
            pauseOnHover: false,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next',
            animationStart: function(){$('body').clearQueue();}, // call the function on start transition
            animationComplete: function(){$('body').clearQueue();} // call the function when transition completed
        });
                       
        
    }); 
});
