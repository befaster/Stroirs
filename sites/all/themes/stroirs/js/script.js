$(document).ready(function() { 
	$('ul.sf-menu').superfish({ 
		delay:       600,                            // one second delay on mouseout 
		animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
		speed:       'normal',                          // faster animation speed 
		autoArrows:  true,                           // disable generation of arrow mark-up 
		dropShadows: false                            // disable drop shadows 
	});
	/*************** tooltips  ****************/
	/* $(".list-services a.tooltips").easyTooltip(); */
	
	$("img.grey").hover(
				function() {
				$(this).stop().animate({"opacity": "0"}, "slow");
				},
				function() {
				$(this).stop().animate({"opacity": "1"}, "slow");
				});
			});  
			
			