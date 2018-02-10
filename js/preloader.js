$(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').delay(250).fadeOut('slow'); // will first fade out the loading animation 
  $('#preloader').delay(850).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})