$(document).ready(function(){
	$('.menu').click(function(){
		$('ul').toggleClass('active');
	})

	/* slide show waktu */
	$('.carousel').carousel({
	  interval: 3000
	})
})