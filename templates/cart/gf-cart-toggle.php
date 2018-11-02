<div class="gf-cart-toggle p-2">
    <?php if (WC()->cart->get_cart_contents_count() !== 0): ?>
        <ul>
            <?php foreach (WC()->cart->get_cart() as $cart_item) {
                $item_link = $cart_item['data']->get_permalink();
                $item_image = $cart_item['data']->get_image(array('50', '50'));
                $item_name = $cart_item['data']->get_title();
                $item_price = '<span class="d-block ml-auto text-right tx-green-color">Price: ' . $cart_item['data']->get_price() . ' din.</span>';
                $item_qty = ' (' . $cart_item['quantity'] . ') ';

                echo '<li><a href="' . $item_link . '">' . $item_image . $item_name . $item_qty . $item_price . '</a></li>';
            }
            ?>
        </ul>
        <div class="gf-cart-toggle__total">
            <h5 class="mr-auto my-auto">Total: <?= WC()->cart->get_cart_total() ?></h5>
            <a href="/cart" class="gf-cart-toggle__button green-button font-weight-bold mr-2">ViewCart</a>
            <a href="/checkout" class="gf-cart-toggle__button green-button font-weight-bold">Checkout</a>
        </div>
    <?php else: ?>
        <div class="gf-cart-toggle__total">
            <h5 class="mr-auto my-auto">Your cart is empty</h5>
            <a href="/" class="gf-cart-toggle__button green-button font-weight-bold mr-2">Go to shop</a>
        </div>
    <?php endif; ?>
</div>