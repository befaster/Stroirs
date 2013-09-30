jQuery('document').ready(function() {

    jQuery('.slider').mobilyslider({
        content: '.sliderContent',
        children: 'div',
        transition: 'slide',
        animationSpeed: 900,
        autoplaySpeed: 5000,
        autoplay: false,
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

