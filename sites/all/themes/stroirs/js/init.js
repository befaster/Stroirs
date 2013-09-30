jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',            	
            animationSpeed: 1000,
            autoplay: true,
            pauseOnHover: true,
            bullets: true,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next',
            animationStart: function(){}, // call the function on start transition
            animationComplete: function(){} // call the function when transition completed
        });
                       
        
    }); 
});
