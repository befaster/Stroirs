jQuery(function($){	
	$('.slider').mobilyslider({
		content: '.sliderContent',
		children: 'div',
		transition: 'fade',
		animationSpeed: 1,
		autoplay: true,		
		bullets: false,
		arrows: true,
		arrowsHide: true,
		prev: 'prev',
		next: 'next'
	});
	
});
