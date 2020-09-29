<div class="header-minicart mobile-minicart">
	<div class="shopping_cart_content">
		<div id="mini-cart" class="mini-cart">
			<div class="cart-head">
				<i class="fas fa-shopping-cart fa-flip-horizontal"></i>
				<span id="mcart-stotal" class="cart-items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
				<span class="cart-items-text"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
				<!--
				<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
				-->
			</div>
			<div class="cart-popup widget_shopping_cart_wrap">
				<div class="widget_shopping_cart_head">
					<i class="fas fa-shopping-cart fa-flip-horizontal"></i>
					<span class="widget_shopping_cart_title"><?php _e('Shopping Cart', 'generatepress_child'); ?></span>
					<i class="fal fa-times widget_shopping_cart_close"></i>
				</div>
				<div class="widget_shopping_cart_content">
					<?php woocommerce_mini_cart(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
