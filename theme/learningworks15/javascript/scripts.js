$(document).ready(function(){

	$('.pagelayout-frontpage .columns .column:first-child').click(function(){
		$('.two-minute-moodle').toggle();
		$('html, body').animate({
			scrollTop: $('.two-minute-moodle').offset().top
		}, 1000);
	});

	$('.btn-navbar').click(function(){
		$('.nav-collapse').toggleClass('active').delay(1000);
	});

});