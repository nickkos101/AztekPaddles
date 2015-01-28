<?php global $wpo_wcpdf; ?>
<table class="head container">
	<tr>
		<td class="header">
			<?php
			if( $wpo_wcpdf->get_header_logo_id() ) {
				$wpo_wcpdf->header_logo();
			} else {
				echo apply_filters( 'wpo_wcpdf_packing_slip_title', __( 'Packing Slip', 'wpo_wcpdf' ) );
			}
			?>
		</td>
		<td class="shop-info">
			<div class="shop-name"><h3><?php $wpo_wcpdf->shop_name(); ?></h3></div>
			<div class="shop-address"><?php $wpo_wcpdf->shop_address(); ?></div>
		</td>
	</tr>
	<tr>
		<td>
			<h3 class="document-type-label">
				<?php if( $wpo_wcpdf->get_header_logo_id() ) echo apply_filters( 'wpo_wcpdf_packing_slip_title', __( 'Packing Slip', 'wpo_wcpdf' ) ); ?>
			</h3>
			<?php do_action( 'wpo_wcpdf_after_document_label', 'packing-slip' ); ?>
		</td>
		<td>&nbsp;</td>
	</tr>

	<tr>
		<td>
			<div class="order-information">
				<span class="order-date-label"><?php _e( 'Order Date:', 'wpo_wcpdf' ); ?></span>
				<span class="order-date"><?php $wpo_wcpdf->order_date(); ?></span><br />
				<span class="order-number-label"><?php _e( 'Order Number:', 'wpo_wcpdf' ); ?></span>
				<span class="order-number"><?php $wpo_wcpdf->order_number(); ?></span><br />
			</div>
		</td>
		<td>
			<div class="recipient-address"><?php $wpo_wcpdf->shipping_address(); ?></div>
		</td>
	</tr>
</table><!-- head container -->

<?php do_action( 'wpo_wcpdf_before_order_details', 'packing-slip' ); ?>

<table class="order-details">
	<thead>
		<tr>
			<th class="product-label"><?php _e('Product', 'wpo_wcpdf'); ?></th>
			<th class="quantity-label"><?php _e('Quantity', 'wpo_wcpdf'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php $items = $wpo_wcpdf->get_order_items(); if( sizeof( $items ) > 0 ) : foreach( $items as $item ) : ?>
		<tr>
			<td class="description">
				<span class="item-name"><?php echo $item['name']; ?></span><span class="item-meta"><?php echo $item['meta']; ?></span>
				<dl class="meta">
					<?php if( !empty( $item['sku'] ) ) : ?><dt><?php _e( 'SKU:', 'wpo_wcpdf' ); ?></dt><dd><?php echo $item['sku']; ?></dd><?php endif; ?>
					<?php if( !empty( $item['weight'] ) ) : ?><dt><?php _e( 'Weight:', 'wpo_wcpdf' ); ?></dt><dd><?php echo $item['weight']; ?><?php echo get_option('woocommerce_weight_unit'); ?></dd><?php endif; ?>
				</dl>
			</td>
			<td class="quantity"><?php echo $item['quantity']; ?></td>
		</tr>
	<?php endforeach; endif; ?>
</tbody>
</table><!-- order-details -->		

<?php do_action( 'wpo_wcpdf_after_order_details', 'packing-slip' ); ?>

<table class="notes container">
	<tr>
		<td colspan="3">
			<div class="notes-shipping">
				<?php if ( $wpo_wcpdf->get_shipping_notes() ) : ?>
				<h3><?php _e( 'Customer Notes', 'wpo_wcpdf' ); ?></h3>
				<?php $wpo_wcpdf->shipping_notes(); ?>
			<?php endif; ?>
		</div>
	</td>
</tr>
</table><!-- notes container -->
<?php
$order_id = $wpo_wcpdf->get_order_number();
$order = new WC_Order($order_id);
$user_id = $order->user_id;
$fitstring =  get_the_author_meta( 'fit_profile_one', $user_id);
$fitvars = explode( ',', $fitstring );
$totalpaddlelength = $fitvars[11];
?>
<table>
	<thead>
		<th>Fit Profile Attributes</th>
	</thead>
	<tbody>
		<tr>
			<td>Sex:</td>
			<td><?php echo $fitvars[0]; ?></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><?php echo $fitvars[1]; ?></td>
		</tr>
		<tr>
			<td>Height:</td>
			<td><?php echo $fitvars[2]; ?></td>
		</tr>
		<tr>
			<td>Weight:</td>
			<td><?php echo $fitvars[3]; ?></td>
		</tr>
		<tr>
			<td>Hand Size:</td>
			<td><?php echo $fitvars[4]; ?></td>
		</tr>
		<tr>
			<td>Board Thickness:</td>
			<td><?php echo $fitvars[8]; ?></td>
		</tr>
		<tr>
			<td>Skill Level:</td>
			<td><?php echo $fitvars[9]; ?></td>
		</tr>
		<tr>
			<td>Paddle Style:</td>
			<td><?php echo $fitvars[10]; ?></td>
		</tr>
	</tbody>
</table>
<?php
function cutInstructions($tpl) {
	if ($tpl == 82) {
		$trim_blade = 0.6;
		$trim_handle = null;
	}
	else if ($tpl == 81) {
		$trim_blade = 1;
		$trim_handle = 0.6;
	}
	else if ($tpl == 80) {
		$trim_blade = 1.6;
		$trim_handle = 1;
	}
	else if ($tpl == 79) {
		$trim_blade = 2.2;
		$trim_handle = 1.4;
	}
	else if ($tpl == 78) {
		$trim_blade = 2.8;
		$trim_handle = 1.8;
	}
	else if ($tpl == 77) {
		$trim_blade = 3.4;
		$trim_handle = 2.2;
	}
	else if ($tpl == 76) {
		$trim_blade = 4;
		$trim_handle = 2.6;
	}
	else if ($tpl == 75) {
		$trim_blade = 4.6;
		$trim_handle = 3;
	}
	else if ($tpl == 74) {
		$trim_blade = 5.2;
		$trim_handle = 3.4;
	}
	else if ($tpl == 73) {
		$trim_blade = 5.8;
		$trim_handle = 3.8;
	}
	else if ($tpl == 72) {
		$trim_blade = 6.4;
		$trim_handle = 4.2;
	}
	else if ($tpl == 71) {
		$trim_blade = 7;
		$trim_handle = 4.6;
	}
	else if ($tpl == 70) {
		$trim_blade = 7.6;
		$trim_handle = 5;
	}
	else if ($tpl == 69) {
		$trim_blade = 8.2;
		$trim_handle = 5.4;
	}
	else if ($tpl == 68) {
		$trim_blade = 8.8;
		$trim_handle = 5.8;
	}
	else if ($tpl == 67) {
		$trim_blade = 9.4;
		$trim_handle = 6.2;
	}
	else if ($tpl == 66) {
		$trim_blade = 10;
		$trim_handle = 6.6;
	}
	else if ($tpl == 65) {
		$trim_blade = 10.6;
		$trim_handle = 7;
	}
	else if ($tpl == 64) {
		$trim_blade = 11.2;
		$trim_handle = 7.4;
	}
	else if ($tpl == 63) {
		$trim_blade = 11.8;
		$trim_handle = 7.8;
	}
	else if ($tpl == 62) {
		$trim_blade = 12.4;
		$trim_handle = 8.2;
	}
	else if ($tpl == 61) {
		$trim_blade = 13;
		$trim_handle = 8.6;
	}
	else if ($tpl == 60) {
		$trim_blade = 13.6;
		$trim_handle = 9;
	}
	else if ($tpl == 59) {
		$trim_blade = 14.2;
		$trim_handle = 9.4;
	}
	else if ($tpl == 58) {
		$trim_blade = 14.8;
		$trim_handle = 9.8;
	}
	else {
		$trim_blade = NULL;
		$trim_handle = NULL;
	}	
	echo '<li>Blade End Trim Length: '.$trim_blade.' Inches</li>';
	echo '<li>Handle End Trim Length: '.$trim_handle.' Inches</li>';
} 
?>
<h2>Cut Instructions:</h2>
<ul>
<?php cutInstructions($totalpaddlelength); ?>
</ul>
<?php if ( $wpo_wcpdf->get_footer() ): ?>
	<div id="footer">
		<?php $wpo_wcpdf->footer(); ?>
	</div><!-- #letter-footer -->
<?php endif; ?>