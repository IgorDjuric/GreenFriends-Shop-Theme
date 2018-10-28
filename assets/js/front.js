jQuery(document).ready(function ($) {
    
    //mega menu
    $(".gf-header-categories-wrapper, .mega-menu-toggle").mouseenter(function () {
        $(".mega-menu-toggle").stop().slideDown("fast");
        $(".gf-header-categories-wrapper").toggleClass('gf-toogle-background-green');
    });
    $('.mega-menu-toggle, .gf-header-categories-wrapper').mouseleave(function () {
        $(".mega-menu-toggle").stop().slideUp("slow");
        $(".gf-header-categories-wrapper").toggleClass('gf-toogle-background-green');
    });

    //cart
    $("#gf-cart-icon-desktop, .gf-cart-toggle").mouseenter(function () {
        $(".gf-cart-toggle").stop().slideDown("fast");
        $("#gf-cart-icon-desktop").toggleClass('gf-toogle-background-green');
        $("#shopping-cart__count").toggleClass('gf-toogle-background-white');
    });
    $('.gf-cart-toggle, #gf-cart-icon-desktop').mouseleave(function () {
        $(".gf-cart-toggle").stop().slideUp("fast");
        $("#gf-cart-icon-desktop").toggleClass('gf-toogle-background-green');
        $("#shopping-cart__count").toggleClass('gf-toogle-background-white');
    });


    //my-account
    $("#gf-my-account-icon-desktop, .gf-my-account-toggle").mouseenter(function () {
        $(".gf-my-account-toggle").stop().slideDown("fast");
        $("#gf-my-account-icon-desktop").toggleClass('gf-toogle-background-green')
    });
    $('.gf-my-account-toggle, #gf-my-account-icon-desktop').mouseleave(function () {
        $(".gf-my-account-toggle").stop().slideUp("fast");
        $("#gf-my-account-icon-desktop").toggleClass('gf-toogle-background-green');
    });


    //mega-menu mobile
    $('.gf-header-mobile-icon__categories').click(function () {
        $('.mega-menu-mobile-toggle').animate({width:'toggle'},300);
    });
    $('.test').click(function () {
        $('.mega-menu-mobile-toggle__first_level').animate({width:'toggle'},300);
    });
    

});

//


