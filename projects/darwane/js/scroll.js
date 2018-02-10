// JavaScript Document
jQuery(document).ready(function() {
    
    var redukcijaNormal = 100;
    var redukcija480 = 280;
    var redukcija960 = 120;
    var redukcija = 100;
    
    $(window).resize(function(){
        if ($(window).width()<481){
            redukcija = redukcija480;
        }
        else if ($(window).width()<961){
            redukcija = redukcija960;
        }
        else {
            redukcija = redukcijaNormal;
        }
    });

    $("header nav a#nav1").click(function(){
            $("html, body").animate({scrollTop: $("#band").offset().top - redukcija }, 1000);
    });

    $("header nav a#nav2").click(function(){
            $("html, body").animate({scrollTop: $("#dva").offset().top - redukcija }, 1000);
    });

    $("header nav a#nav3").click(function(){
            $("html, body").animate({scrollTop: $("#tri").offset().top - redukcija }, 1000);
    });

    $("header nav a#nav4").click(function(){
            $("html, body").animate({scrollTop: $("#cetiri").offset().top - redukcija }, 1000);
    });
	 $("header nav a#nav5").click(function(){
            $("html, body").animate({scrollTop: $("#jedan").offset().top - redukcija }, 1000);
    });

});