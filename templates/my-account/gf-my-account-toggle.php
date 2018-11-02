<?php if (!is_user_logged_in()): ?>
    <div class="gf-my-account-toggle p-2" id="customer_login">
        <form class="gf-my-account-toggle-form py-1 px-2" method="post">
            <h5 class="pt-1">Login / Register</h5>
            <?php do_action('woocommerce_login_form_start'); ?>

            <input type="text" class="gf-my-account-toggle-form__input" name="username" id="username"
                   autocomplete="username" placeholder="Username or email address"
                   value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"/><?php // @codingStandardsIgnoreLine ?>

            <input class="mt-2 gf-my-account-toggle-form__input" type="password" name="password" id="password"
                   autocomplete="current-password" placeholder="password"/>

            <?php do_action('woocommerce_login_form'); ?>

            <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>

            <div class="gf-my-account-toggle-form__rememberme">
                <input class="" name="rememberme" type="checkbox" id="rememberme" value="forever"/>
                <h5 class="fcking-rememberme" >Remember me</h5>
            </div>

            <input type="submit" class="mt-2 green-button font-weight-bold" name="login"
    t              value="<?php esc_attr_e('Log in', 'woocommerce'); ?>">


            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>" class="gf-lost-password-a">Lost your password?</a>

            <?php do_action('woocommerce_login_form_end'); ?>
            <a href="/my-account" value="Registration" class="mt-3 mb-2 gf-my-account-toggle-form__registration d-block text-center bg-green-color green-button">Registration</a>
        </form>
    </div>
<?php else: ?>
    <div class="gf-my-account-toggle py-1 px-2 gf-my-account-toggle-not-logged-in">

        <h5 class="pt-1">User: <?= wp_get_current_user()->user_login ?></h5>
        <a href="/my-account/" class="link"><i class="fas fa-tachometer-alt mr-3"></i>Dashboard</a>
        <a href="/my-account/orders/" class="link"><i class="far fa-file-alt mr-3"></i>Orders</a>
        <a href="/my-account/edit-address/" class="link"><i class="fas fa-home mr-3"></i>Addresses</a>
        <a href="/my-account/edit-account/" class="link"><i class="fas fa-info-circle mr-3"></i>Account details</a>

        <a href="<?= wp_logout_url('/my-account/'); ?>" class="d-block gf-my-account-toggle__logout green-button font-weight-bold text-center">Logout</a>

    </div>
<?php endif; ?>



