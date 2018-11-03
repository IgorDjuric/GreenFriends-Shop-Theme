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


    // //mega-menu mobile
    // $('.gf-header-mobile-icon__categories').click(function () {
    //     $('.mega-menu-mobile-toggle').animate({width:'toggle'},300);
    // });
    // $('.exit-megamenu-mobile').click(function () {
    //     $('.mega-menu-mobile-toggle').animate({width:'toggle'},300);
    //
    //     if($('.gf-category-mega-menu-mobile__second_level').hasClass('active')){
    //         $('.gf-category-mega-menu-mobile__second_level').animate({width:'toggle'},300);
    //         $('.gf-category-mega-menu-mobile__second_level').removeClass('active');
    //     }
    //     if($('.gf-category-mega-menu-mobile__third_level').hasClass('active')){
    //         $('.gf-category-mega-menu-mobile__third_level').animate({width:'toggle'},300);
    //         $('.gf-category-mega-menu-mobile__third_level').removeClass('active');
    //     }
    // });
    //
    // $('.arrow-next__first_level').click(function (e) {
    //     e.preventDefault();
    //    $('.gf-category-mega-menu-mobile__second_level').animate({width:'toggle'},300);
    //    $('.gf-category-mega-menu-mobile__second_level').addClass('active');
    // });
    //
    // $('.arrow-back__second_level').click(function () {
    //     $('.gf-category-mega-menu-mobile__second_level').animate({width:'toggle'},300);
    //     $('.gf-category-mega-menu-mobile__second_level').removeClass('active');
    // });
    //
    // $('.arrow-next__second_level').click(function () {
    //     $('.gf-category-mega-menu-mobile__third_level').animate({width:'toggle'},300);
    //     $('.gf-category-mega-menu-mobile__third_level').addClass('active');
    // });
    //
    // $('.arrow-back__third_level').click(function () {
    //     $('.gf-category-mega-menu-mobile__third_level').animate({width:'toggle'},300);
    //     $('.gf-category-mega-menu-mobile__third_level').removeClass('active');
    //
    // });



    //***** MEGAMENU MOBILE *****//
    (function($) {
        var defaults = {
            "hamburgerId"   : "sm_menu_ham", //Hamburger Id
            "wrapperClass"  : "sm_menu_outer", //Menu Wrapper Class
            "submenuClass"  : "submenu", //Submenu Class
            "onMenuLoad"    : function() { return true; }, //Calls when menu loaded
            "onMenuToggle"  : function() { return true; } //Calls when menu open/close
        };
        $.fn.slideMobileMenu = function(options) {
            if (this.length === 0) { return this; }
            var smMenu = {}, ds = $(this);
            var init = function() {
                    smMenu.settings = $.extend({}, defaults, options);
                    // Create Wrapper div & hamburger
                    createWrapper_Ham();
                    // Create Back Menu for each sub menu
                    createBackButton();
                    // Callback - Menu loaded
                    if(typeof smMenu.settings.onMenuLoad == 'function') {
                        smMenu.settings.onMenuLoad(ds);
                    }
                },
                createWrapper_Ham = function() {
                    smMenu.hamburger = $("<div>",{ "id"   : smMenu.settings.hamburgerId,
                        "html" : "" }),
                        smMenu.smmOuter = $("<div>",{ "class" : smMenu.settings.wrapperClass });
                    ds.appendTo(smMenu.smmOuter);
                    smMenu.hamburger.add(smMenu.smmOuter).appendTo($(".gf-header-mobile-icon__categories"));
                },
                createBackButton = function() {
                    smMenu.smmOuter.find("ul."+smMenu.settings.submenuClass).each(function() {
                        var dis     = $(this),
                            disPar  = dis.closest("li"),
                            disfA   = disPar.find("> a"),
                            disBack = $("<li/>",{
                                "class" : "back",
                                "html"  : "<a href='#'>"+disfA.text()+"</a>" })
                        disPar.addClass("hasChild");
                        disBack.prependTo(dis);
                    });
                },
                toggleMobileMenu = function(e) {
                    $("#"+smMenu.settings.hamburgerId).toggleClass("open");
                    $("."+smMenu.settings.wrapperClass).toggleClass("active").find("li.active").removeClass("active");
                    $(".gf-header-mobile-icon__categories").toggleClass("mmactive");
                    // Callback - Menu Toggle
                    if(typeof smMenu.settings.onMenuToggle == 'function') {
                        smMenu.settings.onMenuToggle(ds,$("#"+smMenu.settings.hamburgerId).hasClass("open"));
                    }
                },
                showSubMenu = function(e) {
                    e.preventDefault();
                    $("."+smMenu.settings.wrapperClass).scrollTop(0);
                    $(this).parent().addClass("active").siblings().removeClass("active");
                },
                goBack = function(e) {
                    e.preventDefault();
                    $(this).closest("ul."+smMenu.settings.submenuClass).parent().removeClass("active");
                }
            /*Init*/
            init();
            /* Open Menu */
            smMenu.hamburger.click(toggleMobileMenu);
            /* Show SubMenu */
            smMenu.smmOuter.find("li.hasChild > a").click(showSubMenu);
            /* Go Back */
            smMenu.smmOuter.find("li.back a").click(goBack);
        };
    })(jQuery)

    jQuery(".mobile_menu").slideMobileMenu({
        //Hamburger Id
        "hamburgerId" : "sm_menu_ham",
        //Menu Wrapper Class
        "wrapperClass" : "sm_menu_outer",
        //Submenu Class
        "submenuClass" : "submenu",
        // Callback - Menu loaded
        "onMenuLoad" : function(menu) {
            console.log("menu loaded")
            console.log(menu)
        },
        //Callback - menu toggle(open/close)
        "onMenuToggle" : function(menu,open) {
            console.log(open)
        }
    });
});




