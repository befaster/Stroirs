jQuery(function($){
    $('document').ready(function() {
        $('.slider').mobilyslider({
            content: '.sliderContent',
            children: 'div',
            transition: 'vertical',            	
            animationSpeed: 500,
            autoplay: true,
            pauseOnHover: false,
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
