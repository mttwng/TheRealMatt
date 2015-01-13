$(document).ready(function() {
	$('.portfolio').mouseenter(function() {
		$(this).fadeTo('slow', 1);
	})
	$('.portfolio').mouseleave(function() {
		$(this).fadeTo('slow', 0.85);
	})
})