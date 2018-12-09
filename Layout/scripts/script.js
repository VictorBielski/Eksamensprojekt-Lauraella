
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

// Set the date we're counting down to
var countDownDate = new Date("Jan 1, 2019 00:00:01").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "HAPPY NEW YEAR!";
    }
}, 1000);