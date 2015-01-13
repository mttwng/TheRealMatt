$('a').click(function() {
  $('html, body').animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 400);
  return false;
});

$(window).scroll(function () {

  // header
  if ($(window).scrollTop() + $(window).height() >= $('#about-navbar').offset().top) {
    $('.navbar').addClass('transparent-active');
    $('.navbar').removeClass('transparent');
    $('#a-home').removeClass('navbar-active');
  } else if ($(window).scrollTop() + $(window).height() < $('#about-navbar').offset().top) {
    $('.navbar').addClass('transparent');
    $('.navbar').removeClass('transparent-active');
    $('#a-home').addClass('navbar-active');
  }

  // About
  if ($(window).scrollTop() + $(window).height() >= $('#about-navbar').offset().top) {
    $('#a-about').addClass('navbar-active');
  } 
  if ($(window).scrollTop() + $(window).height() >= $('#portfolio').offset().top || $(window).scrollTop() + $(window).height() < $('#about-navbar').offset().top) {
    $('#a-about').removeClass('navbar-active');
  }

  // Resume
  if ($(window).scrollTop() + $(window).height() >= $('#portfolio').offset().top) {
    $('#a-resume').addClass('navbar-active');
  } 
  if ($(window).scrollTop() + $(window).height() >= $('#portfolio-navbar').offset().top || $(window).scrollTop() + $(window).height() < $('#portfolio').offset().top) {
    $('#a-resume').removeClass('navbar-active');
  }

  // Portfolio
  if ($(window).scrollTop() + $(window).height() >= $('#portfolio-navbar').offset().top) {
    $('#a-portfolio').addClass('navbar-active');
  } 
  if ( $(window).scrollTop() + $(window).height() < $('#portfolio-navbar').offset().top || $(window).scrollTop() + $(window).height() == $(document).height()) {
    $('#a-portfolio').removeClass('navbar-active');
  }

  // Contact
  if($(window).scrollTop() + $(window).height() == $(document).height()) {
    $('#a-contact').addClass('navbar-active');
  } else {
    $('#a-contact').removeClass('navbar-active');
  }
});

