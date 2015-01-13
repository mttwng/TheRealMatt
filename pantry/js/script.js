$('a').click(function() {
  $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 400);
  return false;
});

// $('.navbar-default .navbar-nav > li > a').click(function() {
//     $("#navbar-fall").addClass('collapsed');  
//   })

$(window).scroll(function () {
  // header
  if ($(window).scrollTop() + $(window).height() >= $('#callout').offset().top) {
    $('.navbar').addClass('transparent-active');
    $('.navbar').removeClass('transparent');
    $('#a-home').removeClass('navbar-active');
  } else if ($(window).scrollTop() + $(window).height() < $('#callout').offset().top) {
    $('.navbar').addClass('transparent');
    $('.navbar').removeClass('transparent-active');
    $('#a-home').addClass('navbar-active');
  }
  // about
  if ($(window).scrollTop() + $(window).height() >= $('#callout').offset().top) {
    $('#a-about').addClass('navbar-active');
  } 
  if ($(window).scrollTop() + $(window).height() >= $('#partners').offset().top || $(window).scrollTop() + $(window).height() < $('#callout').offset().top) {
    $('#a-about').removeClass('navbar-active');
  }
  // partners
  if ($(window).scrollTop() + $(window).height() >= $('#partners').offset().top) {
    $('#a-partners').addClass('navbar-active');
  } 
  if ( $(window).scrollTop() + $(window).height() < $('#partners').offset().top || $(window).scrollTop() + $(window).height() >= $('#donate').offset().top) {
    $('#a-partners').removeClass('navbar-active');
  }
  // contact
  if ($(window).scrollTop() + $(window).height() >= $('#donate').offset().top) {
    $('#a-contact').addClass('navbar-active');
  } 
  if ( $(window).scrollTop() + $(window).height() < $('#contact').offset().top || $(window).scrollTop() + $(window).height() == $(document).height()) {
    $('#a-contact').removeClass('navbar-active');
  }
  // help 
  if($(window).scrollTop() + $(window).height() == $(document).height()) {
    $('#a-donate').addClass('navbar-active');
  } else {
    $('#a-donate').removeClass('navbar-active');
  }
});

