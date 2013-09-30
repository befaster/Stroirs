jQuery('document').ready(function() {
    jQuery('.slider').mobilyslider({
        content: '.sliderContent',
        children: 'div',
        transition: 'fade',
        animationSpeed: 2000,
        autoplaySpeed: 4000,
        autoplay: true,
        pauseOnHover: true,
        bullets: false,
        arrows: true,
        arrowsHide: true,
        prev: 'prev',
        next: 'next',
        animationStart: function() {
        }, // call the function on start transition
        animationComplete: function() {
        } // call the function when transition completed
    });
});

