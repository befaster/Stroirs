jQuery(function($){
	
	$('.slider').mobilyslider({
		content: '.sliderContent',
		children: 'div',
		transition: 'horizontal',
		animationSpeed: 800,
		autoplay: true,		
		bullets: false,
		arrows: true,
		arrowsHide: true,
		prev: 'prev',
		next: 'next'
	});
	
});
