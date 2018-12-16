
/************************************************
 HAMBURGER MENU ANIMATION 
************************************************/

$(document).ready(function () {
    $('.animated-icon1').click(function () {
    $(this).toggleClass('open');
    });
    });


    // Variable til bazar dato
var countDownDate = new Date("Jan 5, 2019 10:00:00").getTime();

// Function til at tælleren skifter hvert sekund
var x = setInterval(function() {

  // Variabler der henter dato og tid
  var now = new Date().getTime();

  // Variable der udregner distance mellem bazar datoen og den nuværrende tid
  var distance = countDownDate - now;

  // Variabler for der udregner tiden om til dage, timer, minutter og sekunder
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Displayer scriptet i diven med id "demo"
  document.getElementById("demo").innerHTML = days + "D " + hours + "T "
  + minutes + "M " + seconds + "S ";

  // Bazaren er åben og teksten skifter
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "KOM TIL BAZAR HOS LAURA ELLA!";
  }
}, 1000);