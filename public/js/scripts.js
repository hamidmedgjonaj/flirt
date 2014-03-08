$(document).ready(function() {
    $(".one_four_margin li:nth-of-type(4n)").css("margin-right", "0");
    $(".one_mini_four_margin li:nth-of-type(4n)").css("margin-right", "0");
    $(".one_two_margin li:nth-of-type(2n)").css("margin-right", "0");
    $(".title").after("<span class='after'></span>");
    $(".title").before("<span class='before'></span>");
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
    $(".accordion h2").each(function() {
        $(this).click(function() {
            $(".accordion div").slideUp();
            $(this).next("div").slideDown();
        });
    });
    $(".navigation li").hover(function() {
        $(this).children("ul").stop().slideDown();
    }, function() {
        $(this).children("ul").stop(true, true).slideUp();
    });

    $('.bxslider').bxSlider({
        minSlides: 5,
        maxSlides: 5,
        slideWidth: 188,
        slideMargin: 0,
        pager: 0,
        controls: true
    });
});