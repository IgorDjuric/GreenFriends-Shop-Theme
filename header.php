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
        <div class="gf-header-part-1">
            <div class="container">
                <nav class="navbar justify-content-between">
                    <a class="navbar-brand"><img src="logo.jpg" alt="" width="200" height="59">GreenShop</a>
                    <div class="gf-header-part-1__text">
                        <span class="mr-3 pr-3 header-text">We're Dedicated to Our Customers 24/7</span>
                        <i class="fas fa-phone"> +0900 666 666</i>
                        <ul class="social gf-header-social ml-4">
                            <li><a href="#"> <i class="fab fa-facebook-f">   </i> </a></li>
                            <li><a href="#"> <i class="fab fa-instagram">   </i> </a></li>
                            <li><a href="#"> <i class="fab fa-twitter">   </i> </a></li>
                            <li><a href="#"> <i class="fab fa-google-plus">   </i> </a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="gf-header-part-2">
            <div class="container">
                <div class="row gf-header-navigation-wrapper">
                    <div class="col-md-2 py-3 gf-header-categories-wrapper">
                        <div class="gf-header-categories">
                            <i class="fas fa-bars mr-2"></i>Categories
                        </div>
                    </div>

                    <div class="gf-category-mega-menu-desktop-wrapper">
                        <div class="container">
                            <div class="row gf-category-mega-menu-desktop">
                                <div class="col gf-category-mega-menu-desktop__main_cats">
                                    <ul>
                                        <li class=""><a href="">Category 1<i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 2 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 3 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 4 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 5 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 6 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 7 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 8 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 9 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Category 10 <i class="fas fa-caret-right"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col gf-category-mega-menu-desktop__second_cats">
                                    <ul>
                                        <li><a href="">Second Cat 1 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 2 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 3 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 4 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 5 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 6 <i class="fas fa-caret-right"></i></a></li>
                                        <li><a href="">Second Cat 7 <i class="fas fa-caret-right"></i></a></li>

                                    </ul>
                                </div>
                                <div class="col gf-category-mega-menu-desktop__third_cats">
                                    <ul>
                                        <li><a href="">Category 1 </a></li>
                                        <li><a href="">Category 2 </a></li>
                                        <li><a href="">Category 3 </a></li>
                                        <li><a href="">Category 4 </a></li>
                                        <li><a href="">Category 5 </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 py-3 gf-header-search-wrapper">
                        <form action="" class="gf-search-form justify-content-center">
                            <input type="search" class="p-1 gf-search-form__input-search"
                                   placeholder="Search for product ...">
                            <select class="gf-search-form_select">
                                <option value="All categories">All categories</option>
                                <option value="Category 1">Category 1</option>
                                <option value="Category 2">Category 2</option>
                                <option value="Category 3">Category 3</option>
                            </select>
                            <button type="submit" class="gf-search-form__input-submit"><i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-2  gf-header-cart-user-wrapper ">
                        <div class="row">
                            <div id="gf-cart-icon-desktop" class="col gf-cart-icon-desktop ">
                                <i class="fas fa-shopping-cart"><span id="shopping-cart__count"
                                                                      class="shopping-cart__count">5</span></i>

                            </div>
                            <div id="gf-my-account-icon-desktop" class="col gf-my-account-icon-desktop ">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="gf-my-account-toggle">
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

                        <div class="gf-cart-toggle">
                            <h5 class="gf-my-account-toggle">Cart items</h5>
                            <ul>
                                <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product title
                                    1</a></li>
                                <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product title
                                    2</a></li>
                                <li><a href=""><img src="https://via.placeholder.com/50x50" alt="">Random product title
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
                </div>
            </div>
        </div>


</header>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>