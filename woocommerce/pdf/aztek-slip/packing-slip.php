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
$pbladeType = $fitvars[12];
$bladesize = $fitvars[13];
?>
<table>
	<thead>
		<th>Fit Profile Attributes</th>
	</thead>
	<tbody>
		<tr>
			<td>Sex:</td>
			<td><?php
			if (isset($fitvars[0])) {
				echo $fitvars[0];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Age:</td>
			<td><?php
			if (isset($fitvars[1])) {
				echo $fitvars[1];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Height:</td>
			<td><?php
			if (isset($fitvars[2])) {
				echo $fitvars[2];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Weight:</td>
			<td><?php
			if (isset($fitvars[3])) {
				echo $fitvars[3];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Hand Size:</td>
			<td><?php
			if (isset($fitvars[4])) {
				echo $fitvars[4];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Board Thickness:</td>
			<td><?php
			if (isset($fitvars[8])) {
				echo $fitvars[8];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Skill Level:</td>
			<td><?php
			if (isset($fitvars[9])) {
				echo $fitvars[9];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
		<tr>
			<td>Paddle Style:</td>
			<td><?php
			if (isset($fitvars[10])) {
				echo $fitvars[10];
			}
			else {
				echo 'Fit Profile Data Not found!';
			}
			?></td>
		</tr>
	</tbody>
</table>
<h2>Cut Instructions:</h2>
<?php 
if (isset($fitvars[11]) && isset($fitvars[12]) && isset($fitvars[13])) {
	returnBladeCuttAttributes($totalpaddlelength,$pbladeType,$bladesize);
} ?>
<?php if ( $wpo_wcpdf->get_footer() ): ?>
	<div id="footer">
		<?php $wpo_wcpdf->footer(); ?>
	</div><!-- #letter-footer -->
<?php endif; ?>