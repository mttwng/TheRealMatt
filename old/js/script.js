$('.nav-item').click(function() {
		$("#sidebar-wrapper").removeClass('active');	
	})

$(document).ready(function() {
	$('.folio').mouseenter(function() {
		$(this).fadeTo('fast', 0.85);
	})

	$('.folio').mouseleave(function() {
		$(this).fadeTo('slow', 1);
	})

	$('a').click(function() {
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
	});

})

