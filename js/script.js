$(document).ready(function(){
	$('.slider_textes').slick({
		arrows:false,
		dots:true,
		adaptiveHeight: true,
		// autoplay: true,
		// autoplaySpeed: 5000,
	});

	$('.header_burger').click(function(event){
		$('.header_burger, .nav_block ul').toggleClass('active');
		$('body').toggleClass('lock');
	});

});