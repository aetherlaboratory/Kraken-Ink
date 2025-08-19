<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 */

defined( 'ABSPATH' ) || exit;
get_header();?>

<?php
/**
* Cart Page
*
* This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see     https://docs.woocommerce.com/document/template-structure/
* @package WooCommerce\Templates
* @version 7.4.0
*/

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>














<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
<?php do_action( 'woocommerce_before_cart_table' ); ?>



<section class="h-100 gradient-custom">
<div class="container py-5">
<div class="row d-flex justify-content-center my-4">
<div class="col-md-10">
<div class="card mb-4 dark-glass">
<div class="card-header bg-mid-2 py-3">
<h5 class="mb-0 wht">Cart - 
<?php 
$cart_count = WC()->cart->get_cart_contents_count();
echo $cart_count;
?>

items</h5>
</div>


<div class="card-body">
<!-- Single item -->

<div class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></div>
<div class="product-thumbnail"><span class="screen-reader-text"><?php esc_html_e( 'Thumbnail image', 'woocommerce' ); ?></span><div>





<div class="row">








<?php
foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
?>


<!-- Single item -->
<div class="row">

<div class="col-lg-3 col-md-12 mb-4 mb-lg-0">

<!-- Image -->
<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
<?php
$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

if ( ! $product_permalink ) {
echo $thumbnail; // PHPCS: XSS ok.
} else {
printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
}
?>
<a href="#!">
<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
</a>
</div>
<!-- Image -->
</div>

<div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
<!-- Data -->

<p>
<h4 class="product-name"><?php esc_html_e( 'Product', 'woocommerce' ); ?> Name:</h4>			
<strong>
<?php
if ( ! $product_permalink ) {
echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
} else {
echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
}

do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

// Meta data.
echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

// Backorder notification.
if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
}
?>		

</strong></p>
<p>Color: blue</p>
<p>Size: M</p>
<button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
title="Remove item">
<i class="fas fa-trash"></i>
</button>
<button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
title="Move to the wish list">
<i class="fas fa-heart"></i>
</button>
<!-- Data -->
</div>

<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
<!-- Quantity -->
<div class="d-flex mb-4" style="max-width: 300px">
<!-- <button class="btn btn-primary px-3 me-2"
onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
<i class="fas fa-minus"></i>
</button> -->

<div class="form-outline">
<?php
if ( $_product->is_sold_individually() ) {
$min_quantity = 1;
$max_quantity = 1;
} else {
$min_quantity = 0;
$max_quantity = $_product->get_max_purchase_quantity();
}

$product_quantity = woocommerce_quantity_input(
array(
'input_name'   => "cart[{$cart_item_key}][qty]",
'input_value'  => $cart_item['quantity'],
'max_value'    => $max_quantity,
'min_value'    => $min_quantity,
'product_name' => $_product->get_name(),
),
$_product,
false
);

echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
?>
<label class="form-label" for="form1">Quantity</label>
</div>

<!-- <button class="btn btn-primary px-3 ms-2"
onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
<i class="fas fa-plus"></i>
</button> -->
<div class="product-remove ms-4 display-5">
<div class="product-remove"><span class="screen-reader-text"><?php esc_html_e( 'Remove item', 'woocommerce' ); ?></span></div>
<?php
echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
'woocommerce_cart_item_remove_link',
sprintf(
'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
esc_html__( 'Remove this item', 'woocommerce' ),
esc_attr( $product_id ),
esc_attr( $_product->get_sku() )
),
$cart_item_key
);
?>
</div>

</div>

<!-- Quantity -->

<!-- Price -->
<p class="text-start text-md-center">
<div class="product-price d-inline-block"><?php esc_html_e( 'Price', 'woocommerce' ); ?>:</div>
<small>
<?php
echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
?>				
(each)
</small>
<hr>
<h2>
	<div class="product-subtotal d-inline-block"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?>:</div>

<strong class="text-success">
<?php
echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
?>		  
</strong>
</h2>
</p>
<!-- Price -->
</div>
</div>
<hr>
<!-- Single item -->	
</div>







<div class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">



























































<?php
}
}
?>	



<div class="shop_table shop_table_responsive cart woocommerce-cart-form__contents">
<div>

<div>
<div>
<?php do_action( 'woocommerce_before_cart_contents' ); ?>


<?php do_action( 'woocommerce_cart_contents' ); ?>

<div>
<div class="actions">

<?php if ( wc_coupons_enabled() ) { ?>
<div class="coupon">
<label for="coupon_code" class="screen-reader-text"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="btn btn-primary button bg-mid-2<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
<?php do_action( 'woocommerce_cart_coupon' ); ?>
</div>
<?php } ?>


<br>
<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
</div>
</div>

<?php do_action( 'woocommerce_after_cart_contents' ); ?>
</div>
</div>
<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

































</div> <!-- CARDBODY -->
</div> <!-- ROW -->








<div class="card mb-4">
<div class="card-body">
<p><strong>Expected shipping delivery</strong></p>
<p class="mb-0">12.10.2020 - 14.10.2020</p>
</div>
</div>
<div class="card mb-4 mb-lg-0">
<div class="card-body">
<p><strong>We accept</strong></p>
<img class="me-2 pg-img" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
alt="Visa" />
<img class="me-2 pg-img" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
alt="American Express" />
<img class="me-2pg-img" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
alt="Mastercard" />
<img class="me-2 pg-img" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
alt="PayPal acceptance mark" />
</div>
</div>
</div>

<div class="card-body">
<ul class="list-group-alt">
<li
class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
Products
<span class="fs-5"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
</li>
<hr>
<li class="list-group-item d-flex justify-content-between align-items-center px-0">
Shipping
<span class="text-warning"><i class="mx-2 fa-solid fa-arrow-down"></i>*Press the checkout button below for Shipping.*</span>
</li>
<hr>
<li
class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
<div>
<strong>Total amount</strong>
<strong>
<p class="mb-0">(*Not including Tax &amp; Shipping)</p>
</strong>
</div>
<span class="fs-4"><strong><?php echo WC()->cart->get_cart_subtotal(); ?></strong></span>
</li>
</ul>

<button type="button" onclick="window.location.href='/checkout';" class="btn bg-mid-2 btn-primary btn-lg btn-block">
Checkout
</button>

</div>
</div>
</div>
</div>
</div>
</section>








<?php do_action( 'woocommerce_after_cart' ); ?>


<?php 
/*
<section class="h-100 gradient-custom">
<div class="container py-5">
<div class="row d-flex justify-content-center my-4">
<div class="col-md-8">
<div class="card mb-4">
<div class="card-header py-3">
<h5 class="mb-0">Cart - 2 items</h5>
</div>
<div class="card-body">
<!-- Single item -->
<div class="row">
<div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
<!-- Image -->
<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
class="w-100" alt="Blue Jeans Jacket" />
<a href="#!">
<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
</a>
</div>
<!-- Image -->
</div>

<div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
<!-- Data -->
<p><strong>Blue denim shirt</strong></p>
<p>Color: blue</p>
<p>Size: M</p>
<button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
title="Remove item">
<i class="fas fa-trash"></i>
</button>
<button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
title="Move to the wish list">
<i class="fas fa-heart"></i>
</button>
<!-- Data -->
</div>

<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
<!-- Quantity -->
<div class="d-flex mb-4" style="max-width: 300px">
<button class="btn btn-primary px-3 me-2"
onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
<i class="fas fa-minus"></i>
</button>

<div class="form-outline">
<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
<label class="form-label" for="form1">Quantity</label>
</div>

<button class="btn btn-primary px-3 ms-2"
onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
<i class="fas fa-plus"></i>
</button>
</div>
<!-- Quantity -->

<!-- Price -->
<p class="text-start text-md-center">
<strong>$17.99</strong>
</p>
<!-- Price -->
</div>
</div>
<!-- Single item -->

<hr class="my-4" />

<!-- Single item -->
<div class="row">
<div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
<!-- Image -->
<div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
<img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
class="w-100" />
<a href="#!">
<div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
</a>
</div>
<!-- Image -->
</div>

<div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
<!-- Data -->
<p><strong>Red hoodie</strong></p>
<p>Color: red</p>
<p>Size: M</p>

<button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
title="Remove item">
<i class="fas fa-trash"></i>
</button>
<button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
title="Move to the wish list">
<i class="fas fa-heart"></i>
</button>
<!-- Data -->
</div>

<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
<!-- Quantity -->
<div class="d-flex mb-4" style="max-width: 300px">
<button class="btn btn-primary px-3 me-2"
onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
<i class="fas fa-minus"></i>
</button>

<div class="form-outline">
<input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
<label class="form-label" for="form1">Quantity</label>
</div>

<button class="btn btn-primary px-3 ms-2"
onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
<i class="fas fa-plus"></i>
</button>
</div>
<!-- Quantity -->

<!-- Price -->
<p class="text-start text-md-center">
<strong>$17.99</strong>
</p>
<!-- Price -->
</div>
</div>
<!-- Single item -->
</div>
</div>
<div class="card mb-4">
<div class="card-body">
<p><strong>Expected shipping delivery</strong></p>
<p class="mb-0">12/10/2020 (Tues.) - 14/10/2020 (Thurs.)</p>
</div>
</div>
<div class="card mb-4 mb-lg-0">
<div class="card-body">
<p><strong>We accept</strong></p>
<img class="me-2" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
alt="Visa" />
<img class="me-2" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
alt="American Express" />
<img class="me-2" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
alt="Mastercard" />
<img class="me-2" width="45px"
src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
alt="PayPal acceptance mark" />
</div>
</div>
</div>



<div class="col-md-4 cart-summary">
<div class="card mb-4">
<div class="card-header py-3">
<h5 class="mb-0">Summary</h5>
</div>
<div class="card-body">
<ul class="list-group list-group-flush">
<li
class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
Products
<span>$43.98</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center px-0">
Shipping
<span>$10.00</span>
</li>
<li
class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
<div>
<strong>Total amount</strong>
<strong>
<p class="mb-0">(including Shipping &amp; Tax)</p>
</strong>
</div>
<span><strong>$53.98</strong></span>
</li>
</ul>

<button type="button" class="btn btn-primary btn-lg btn-block">
Go to checkout
</button>
</div>
</div>
</div>
</div>
</div>
</section>
*/
?>
<?php get_footer();?>