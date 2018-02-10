jQuery(document).ready(function () {

    //    $('.your-class').slick({
    //        setting - name: setting - value
    //    });
    $('.your-class').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        responsive: true,
    });



    $(".scroll-up").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });


});


//NICE SCROLL
jQuery(function () {
    jQuery("body").niceScroll();
});



