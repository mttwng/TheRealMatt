$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});

$(document).ready(function() {
	$('.folio').mouseenter(function() {
		$(this).fadeTo('slow', 1);
	})
	$('.folio').mouseleave(function() {
		$(this).fadeTo('slow', 0.85);
	})
})