jQuery(function($){	
    $('document').ready(function() { 
	$('.slider').mobilyslider({
		content: '.sliderContent',
		children: 'div',
                transition: 'fade',
		animationSpeed: 800,
		bullets: true,
		arrowsHide: false,
                autoplay: true
	});
    });
	
});
