
/************************************************
 HAMBURGER MENU ANIMATION 
************************************************/

$(document).ready(function () {
    // Hide/show animation hamburger function
    $('.navbar-toggler').on('click', function () {
    // Take this line to first hamburger animations
    $('.animated-icon1').toggleClass('open');
    });   
});

$(window).scroll(function() {
    if ($(this).scrollTop() < 200) {
        $("footer").slideUp();
    }
    else {
        $("footer").slideDown();
    }
});

var rellax = new Rellax('.rellax', {
    speed: -0.5,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
  });