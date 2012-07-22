jQuery(function($){	
	$('.slider').mobilyslider({
		content: '.sliderContent',
		children: 'div',
		transition: 'fade',
		animationSpeed: 800,
		/*autoplay: true,*/
		autoplaySpeed: 3000,
		pauseOnHover: false,
		bullets: false,
		arrows: true,
		arrowsHide: true,
		prev: 'prev',
		next: 'next',
		animationStart: function(){},
		animationComplete: function(){}
	});
	
});
