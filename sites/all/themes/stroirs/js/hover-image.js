$(function(){
	$(".lightbox-image").append("<span></span>");
	$(".lightbox-image").hover(function(){
		$(this).find("span").stop().delay(300).animate({left:'106px'}, 500, 'easeOutBack')},
		function(){
		$(this).find("span").stop().animate({left:'132px'}, 500, 'easeOutBack')})
		})
		
		$(function(){$(".lightbox-image1").append("<span></span>");$(".lightbox-image1").hover(function(){$(this).find("img").stop().animate({opacity:0.5},"normal")},function(){$(this).find("img").stop().animate({opacity:1},"normal")})})