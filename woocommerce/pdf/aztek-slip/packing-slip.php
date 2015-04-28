<?php global $wpo_wcpdf; ?>
<?php include 'custom-attributes.php'; ?>
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
		<?php $items = $wpo_wcpdf->get_order_items(); if( sizeof( $items ) > 0 ) : foreach( $items as $item_id => $item ) : ?>
		<tr>
			<td class="product">
				<?php $description_label = __( 'Description', 'wpo_wcpdf' ); // registering alternate label translation ?>
				<span class="item-name"><?php echo $item['name']; ?></span>
				<?php do_action( 'wpo_wcpdf_before_item_meta', $wpo_wcpdf->export->template_type, $item, $wpo_wcpdf->export->order  ); ?>
				<div class="item-meta">
					<?php echo $item['meta']; ?>
					<!--
					<?php if (isset($item['item']['pa_plength'])) { ?>
					<dt>Paddle Length:</dt>
					<dd><?php echo $item['item']['pa_plength']; ?></dd>
					<?php } ?>
					<?php if (isset($item['item']['pa_blade-type'])) { ?>
					<dt>Blade Type:</dt>
					<dd><?php echo $item['item']['pa_blade-type']; ?></dd>
					<?php } ?>
					<?php if (isset($item['item']['pa_bsize'])) { ?>
					<dt>Blade Size:</dt>
					<dd><?php echo $item['item']['pa_bsize']; ?></dd>
					<?php } ?>
					<?php if (isset($item['item']['pa_flex'])) { ?>
					<dt>Flex Rating:</dt>
					<dd><?php echo $item['item']['pa_flex']; ?></dd>
					<?php } ?>
					<?php if (isset($item['item']['pa_hsize'])) { ?>
					<dt>Handle Size:</dt>
					<dd><?php echo $item['item']['pa_hsize']; ?></dd>
					<?php } ?>
				-->
				</div>
				<dl class="cut-instructions">
					<?php if (isset($item['item']['pa_plength'])) { returnBladeCuttAttributes($item['item']['pa_plength'],$item['item']['pa_blade-type'],$item['item']['pa_bsize']); } ?>
				</dl>
				<dl class="meta">
					<?php $description_label = __( 'SKU', 'wpo_wcpdf' ); // registering alternate label translation ?>
					<?php if( !empty( $item['sku'] ) ) : ?><dt class="sku"><?php _e( 'SKU:', 'wpo_wcpdf' ); ?></dt><dd class="sku"><?php echo $item['sku']; ?></dd><?php endif; ?>
					<?php if( !empty( $item['weight'] ) ) : ?><dt class="weight"><?php _e( 'Weight:', 'wpo_wcpdf' ); ?></dt><dd class="weight"><?php echo $item['weight']; ?><?php echo get_option('woocommerce_weight_unit'); ?></dd><?php endif; ?>
				</dl>
				<?php do_action( 'wpo_wcpdf_after_item_meta', $wpo_wcpdf->export->template_type, $item, $wpo_wcpdf->export->order  ); ?>
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
<?php if ( $wpo_wcpdf->get_footer() ): ?>
	<div id="footer">
		<?php $wpo_wcpdf->footer(); ?>
	</div><!-- #letter-footer -->
<?php endif; ?>