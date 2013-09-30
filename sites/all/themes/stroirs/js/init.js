jQuery('document').ready(function() {
    jQuery('.slider').mobilyslider({
        content: '.sliderContent',
        children: 'div',
        transition: 'fade',
        animationSpeed: 300,
        autoplaySpeed:3000,
        autoplay: true,
        pauseOnHover: true,
        bullets: false,
        arrows: true,
        arrowsHide: true,
        prev: 'prev',
        next: 'next',
        animationStart: function() {
             this.pause();
        }, // call the function on start transition
        animationComplete: function() {
            this.pause();
        } // call the function when transition completed
    });

});

