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
<body>
<header>
    <div class="gf-header-wrapper">
        <div class="gf-header-part-1 py-3">
            <div class="gf-container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand"><img src="" alt="" width="200" height="60">GreenFriends Shop</a>
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
        <div class="gf-header-part-2 mt-3">
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
                            <input type="search" class="p-2 gf-search-form__input-search"
                                   placeholder="Search for product ...">
                            <select class="gf-search-form_select">
                                <option value="All categories">All categories</option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                            </select>
                        </form>
                    </div>

                    <div class="col-lg-2 col-md-12  gf-header-cart-user-wrapper ">
                        <div id="gf-cart-icon-desktop" class="col gf-cart-icon-desktop ">
                            <i class="fas fa-shopping-cart"><span id="shopping-cart__count"
                                                                  class="shopping-cart__count">5</span></i>

                            <div class="gf-cart-toggle p-2">
                                <ul>
                                    <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product
                                            title
                                            1</a></li>
                                    <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product
                                            title
                                            2</a></li>
                                    <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product
                                            title
                                            3</a></li>
                                </ul>
                                <div class="gf-cart-toggle__total">
                                    <h5 class="mr-auto my-auto">Total: $1000</h5>
                                    <a href="" class="gf-cart-toggle__button green-button font-weight-bold mr-2">View
                                        Cart</a>
                                    <a href="" class="gf-cart-toggle__button green-button font-weight-bold">Checkout</a>

                                </div>
                            </div>
                        </div>


                        <div id="gf-my-account-icon-desktop" class="col gf-my-account-icon-desktop ">
                            <i class="fas fa-user"></i>
                            <div class="gf-my-account-toggle p-2">
                                <h5 class="pt-1">Login / Register</h5>
                                <form action="" class="gf-my-account-toggle-form py-1 px-2">
                                    <input type="text" placeholder="username" class="gf-my-account-toggle-form__input">
                                    <input type="password" placeholder="password"
                                           class="mt-2 gf-my-account-toggle-form__input">
                                    <input type="submit" value="Login" class="mt-2 green-button font-weight-bold">
                                    <a href="">Forgot your password?</a>
                                    <input type="button" value="Registration"
                                           class="mt-3 mb-2 green-button font-weight-bold">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--*** CATEGORY MEGA-MENU *** -->
            <div class="gf-category-mega-menu-desktop-wrapper mega-menu-toggle">
                <div class="gf-container">
                    <div class="row gf-category-mega-menu-desktop  py-4">
                        <div class="col-3 gf-category-mega-menu-desktop__main_cats">
                            <ul>
                                <li class="cool-link"><a href="">Category 1<i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 2 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 3 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 4 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 5 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 6 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 7 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 8 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 9 <i class="fas fa-caret-right"></i></a></li>
                                <li class="cool-link"><a href="">Category 10 <i class="fas fa-caret-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-3 gf-category-mega-menu-desktop__second_cats">
                            <ul>
                                <li class="cool-link"><a href="">Second Cat 1 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 2 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 3 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 4 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 5 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 6 <i class="fas fa-caret-right"></i></a>
                                </li>
                                <li class="cool-link"><a href="">Second Cat 7 <i class="fas fa-caret-right"></i></a>
                                </li>

                            </ul>
                        </div>
                        <div class="col-3 gf-category-mega-menu-desktop__third_cats">
                            <ul>
                                <li><a href="">Category 1 </a></li>
                                <li><a href="">Category 2 </a></li>
                                <li><a href="">Category 3 </a></li>
                                <li><a href="">Category 4 </a></li>
                                <li><a href="">Category 5 </a></li>
                            </ul>
                        </div>
                        <div class="col-3 gf-category-mega-menu-desktop__best_selling text-center mt-3">
                            <img src="https://via.placeholder.com/200x200" alt="">
                            <h5>Lorem Ispum Product</h5>
                            <h6>Price: $200</h6>
                        </div>
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
