jQuery(document).ready(function () {
    jQuery("#gf-my-account-icon-desktop, .gf-my-account-toggle").mouseenter(function () {
        jQuery(".gf-my-account-toggle").stop().slideDown("slow");
        jQuery("#gf-my-account-icon-desktop").toggleClass('gf-toogle-background-green')
    });
    jQuery('.gf-my-account-toggle, #gf-my-account-icon-desktop').mouseleave(function () {
        jQuery(".gf-my-account-toggle").stop().slideUp("middle");
        jQuery("#gf-my-account-icon-desktop").toggleClass('gf-toogle-background-green')
    })


});

jQuery("#gf-cart-icon-desktop, .gf-cart-toggle").mouseenter(function () {
    jQuery(".gf-cart-toggle").stop().slideDown("slow");
    jQuery("#gf-cart-icon-desktop").toggleClass('gf-toogle-background-green');
    jQuery("#shopping-cart__count").toggleClass('gf-toogle-background-green');
});
jQuery('.gf-cart-toggle, #gf-cart-icon-desktop').mouseleave(function () {
    jQuery(".gf-cart-toggle").stop().slideUp("middle");
    jQuery("#gf-cart-icon-desktop").toggleClass('gf-toogle-background-green');
    jQuery("#shopping-cart__count").toggleClass('gf-toogle-background-green');
});
