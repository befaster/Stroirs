jQuery(function($){
    jQuery.noConflic();
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'fade',            	
            /*animationSpeed: 2,*/
            autoplay: true,
            pauseOnHover: true,
            bullets: false,
            arrows: true,
            arrowsHide: true,
            prev: 'prev',
            next: 'next',
            animationStart: function(){}, // call the function on start transition
            animationComplete: function(){} // call the function when transition completed
        });
                       
        
    }); 
});
