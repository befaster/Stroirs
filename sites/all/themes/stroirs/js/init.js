jQuery('document').ready(function() {

    jQuery('.slider').mobilyslider({
        content: '.sliderContent',
        children: 'div',
        transition: 'fade',
        animationSpeed: 1000,
        autoplaySpeed: 3000,
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

    setInterval(function() {
        event.stopImmediatePropagation();
        jQuery('.slider a.next').click();
    }, 3000);

});

