$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myImg").attr("src", "img/dish2.jpg");
        $("#myImg1").attr("src", "img/dish3.jpg");
        $("#myImg2").attr("src", "img/dish4.jpg");
        $("#myImg3").attr("src", "img/dish1.jpg");
        $("p#myName").text("Daute irure dolor");
        $("p#myName1").text("Officia deserunt");
        $("p#myName2").text("Pim minim venia");
        $("p#myName3").text("Fugiat nulla sint");
        $("p#myPrice").text("$ 24");
        $("p#myPrice1").text("$ 60");
        $("p#myPrice2").text("$ 17");
        $("p#myPrice3").text("$ 30");
        $("#star").attr("src", "img/star.svg");
        $("#star1").attr("src", "img/star.svg");
        $("#star2").attr("src", "img/stary.svg");
        $("#star3").attr("src", "img/stary.svg");
        $("#star4").attr("src", "img/stary.svg");
        $("#star5").attr("src", "img/star.svg");
        $("#star6").attr("src", "img/stary.svg");
        $("#star7").attr("src", "img/star.svg");
    });
});
$(document).ready(function(){
    $("#myBtn1").click(function(){
        $("#myImg").attr("src", "img/dish3.jpg");
        $("#myImg1").attr("src", "img/dish4.jpg");
        $("#myImg2").attr("src", "img/dish1.jpg");
        $("#myImg3").attr("src", "img/dish2.jpg");
        $("p#myName3").text("Daute irure dolor");
        $("p#myName").text("Officia deserunt");
        $("p#myName1").text("Pim minim venia");
        $("p#myName2").text("Fugiat nulla sint");
        $("p#myPrice3").text("$ 24");
        $("p#myPrice").text("$ 60");
        $("p#myPrice1").text("$ 17");
        $("p#myPrice2").text("$ 30");
        $("#star").attr("src", "img/stary.svg");
        $("#star1").attr("src", "img/stary.svg");
        $("#star2").attr("src", "img/stary.svg");
        $("#star3").attr("src", "img/star.svg");
        $("#star4").attr("src", "img/stary.svg");
        $("#star5").attr("src", "img/star.svg");
        $("#star6").attr("src", "img/star.svg");
        $("#star7").attr("src", "img/star.svg");
    });
});
$(document).ready(function(){
    $("#myBtn2").click(function(){
        $("#myImg").attr("src", "img/dish4.jpg");
        $("#myImg1").attr("src", "img/dish1.jpg");
        $("#myImg2").attr("src", "img/dish2.jpg");
        $("#myImg3").attr("src", "img/dish3.jpg");
        $("p#myName2").text("Daute irure dolor");
        $("p#myName3").text("Officia deserunt");
        $("p#myName").text("Pim minim venia");
        $("p#myName1").text("Fugiat nulla sint");
        $("p#myPrice2").text("$ 24");
        $("p#myPrice3").text("$ 60");
        $("p#myPrice").text("$ 17");
        $("p#myPrice1").text("$ 30");
        $("#star").attr("src", "img/stary.svg");
        $("#star1").attr("src", "img/star.svg");
        $("#star2").attr("src", "img/stary.svg");
        $("#star3").attr("src", "img/star.svg");
        $("#star4").attr("src", "img/star.svg");
        $("#star5").attr("src", "img/star.svg");
        $("#star6").attr("src", "img/stary.svg");
        $("#star7").attr("src", "img/stary.svg");
    });
});
$(document).ready(function(){
    $("#myBtn3").click(function(){
        $("#myImg").attr("src", "img/dish1.jpg");
        $("#myImg1").attr("src", "img/dish2.jpg");
        $("#myImg2").attr("src", "img/dish3.jpg");
        $("#myImg3").attr("src", "img/dish4.jpg");
        $("p#myName1").text("Daute irure dolor");
        $("p#myName2").text("Officia deserunt");
        $("p#myName3").text("Pim minim venia");
        $("p#myName").text("Fugiat nulla sint");
        $("p#myPrice1").text("$ 24");
        $("p#myPrice2").text("$ 60");
        $("p#myPrice3").text("$ 17");
        $("p#myPrice").text("$ 30");
        $("#star").attr("src", "img/stary.svg");
        $("#star1").attr("src", "img/star.svg");
        $("#star2").attr("src", "img/star.svg");
        $("#star3").attr("src", "img/star.svg");
        $("#star4").attr("src", "img/stary.svg");
        $("#star5").attr("src", "img/stary.svg");
        $("#star6").attr("src", "img/stary.svg");
        $("#star7").attr("src", "img/star.svg");
    });
});

$(document).ready(function(){
    var klik=0;
    $("#load").click(function(){
        if (klik % 2 == 0){
            $('#two-c').css('display','block');
            $("#two-d").css('display','block');
            $("p#more").text("show less");
            $("i#arrow").css("transform", "rotate(225deg)");
        }
        else{
            $('#two-c').css('display','none');
            $("#two-d").css('display','none');
            $("p#more").text("load more");
            $("i#arrow").css("transform", "rotate(45deg)");
        }
        klik++;
        return false;
    });
    $('#slider2 .flexslider').flexslider({
                    animation: "fade",
                    animationLoop: true
                  });
    
    
    
});
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    animationLoop: false,
      touch: false,
  });
});
