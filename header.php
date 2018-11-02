<!doctype html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Green Friends Shop</title>

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
<header>
    <div class="gf-header-wrapper">
        <div class="gf-header-part-1">
            <div class="gf-container">
                <nav class="navbar justify-content-between">
                    <?php
                    $options = get_option('gf-general-logo-value');
                    $logo_attributes = wp_get_attachment_image_src($options['logo_image']['id'], 'full');
                    $logo_src = $logo_attributes[0];
                    ?>
                    <a class="navbar-brand" href="/"><img src="<?= $logo_src ?>" alt="" width="200" height="60"></a>
                    <div class="gf-header-part-1__text">
                        <span class="mr-3 pr-3 header-text">We're Dedicated to Our Customers 24/7</span>
                        <i class="fas fa-phone"> +0900 666 666</i>
                        <div class="gf-header-social-icons ml-5">
                            <a class="gf-social-share-button-single mr-2" href="" target=""><i
                                        class="fab fa-facebook-f"></i></a>
                            <a class="gf-social-share-button-single mr-2" href="" target=""><i
                                        class="fab fa-instagram"></i></a>
                            <a class="gf-social-share-button-single mr-2" href="" target=""><i
                                        class="fab fa-twitter"></i></a>
                            <a class="gf-social-share-button-single mr-2" href="" target=""><i
                                        class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>

                    <div class="gf-header-mobile-nav-wrapper">
                        <div class="gf-header-mobile-icon__search pr-2">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="gf-header-mobile-icon__categories">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="gf-header-part-2 sticky">
            <div class="gf-container">
                <div class="row gf-header-navigation-wrapper align-items-center">
                    <div class="col-lg-2 col-md-12 gf-header-categories-wrapper">
                        <div class="gf-header-categories">
                            <i class="fas fa-bars mr-2"></i>Categories
                        </div>
                    </div>


                    <div class="col-lg-8 col-md-12 py-3 gf-header-search-wrapper">
                        <form action="" class="gf-search-form justify-content-center">
                            <button type="submit" class="gf-search-form__input-submit"><i class="fas fa-search"></i>
                            </button>
                            <input type="search" class="p-2 gf-search-form__input-search" placeholder="Search for product ...">
                            <select class="gf-search-form_select">
                                <option value="All categories">All categories</option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-lg-2 col-md-12  gf-header-cart-user-wrapper ">

                        <div id="gf-cart-icon-desktop" class="col gf-cart-icon-desktop" onclick="window.location = '/cart';">
                        <i class="fas fa-shopping-cart">
                            <span id="shopping-cart__count" class="shopping-cart__count"><?= WC()->cart->get_cart_contents_count(); ?></span>
                        </i>
                        <!-- cart toggle -->
                        <?php include('templates/cart/gf-cart-toggle.php'); ?>
                    </div>

                    <div id="gf-my-account-icon-desktop" class="col gf-my-account-icon-desktop" onclick="window.location = '/my-account';">
                        <i class="fas fa-user"></i>
                        <!-- My account toggle-->
                        <?php include('templates/my-account/gf-my-account-toggle.php'); ?>
                    </div>

                </div>
            </div>
        </div>

        <!--*** CATEGORY MEGA-MENU *** -->
        <div class="gf-category-mega-menu-desktop-wrapper mega-menu-toggle">
            <div class="gf-container">
                <div class="row gf-category-mega-menu-desktop  py-4">
                    <?php include('templates/categories-megamenu/gf-categories-mega-menu-desktop.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <!--*** CATEGORY MEGA-MENU MOBILE *** -->
    <div class="gf-category-mega-menu-mobile-wrapper mega-menu-mobile-toggle">
        <div class="gf-category-mega-menu-mobile__header p-2">
            <div class="mega-menu-mobile__back_first">
                <i class="fas fa-arrow-circle-left"></i>
            </div>
            <h5>All Cateogires</h5>
        </div>


        <div class="gf-category-mega-menu-mobile__first_level mega-menu-mobile-toggle__first_level">
            <ul>
                <li class="">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons test">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
                <li class="test">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
                <li class="test">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
                <li class="test">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
                <li class="test">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
                <li class="test">
                    <a href="" class="pl-2">Test 1</a>
                    <div class="mega-menu-mobile__icons">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
