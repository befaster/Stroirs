jQuery(function($){	
    $('.slider').mobilyslider({
        content: '.sliderContent',
        children: 'div',
        transition: 'vertical',
        animationSpeed: 500,
        autoplay: true,
        autoplaySpeed: 3000,
        pauseOnHover: true,
        bullets: false	
    });	
});
