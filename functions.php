<?php

//Include Nick's Custom Fields API

include 'autocracy/autocracy.php';

//Aztek Specific Stuff

function aztek_scripts() {

	wp_enqueue_script( 'jqueryuimin', get_template_directory_uri() . '/js/jquery-ui.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'zoom', get_template_directory_uri() . '/js/jquery.elevatezoom.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'function', get_template_directory_uri() . '/js/function.js', array('jquery', 'zoom', 'jqueryuimin'), '1.0.0', true );
	
	wp_register_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
	wp_enqueue_style( 'normalize' );
	wp_register_style( 'style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'style' );
	wp_register_style( 'responsive', get_template_directory_uri() . '/responsive.css' );
	wp_enqueue_style( 'responsive' );
	wp_register_style( 'woo', get_template_directory_uri() . '/woo.css' );
	wp_enqueue_style( 'woo' );

	wp_register_style( 'byo', get_template_directory_uri() . '/byo/byo.css' );
	if (is_page_template( 'byo.php' )) {
		wp_enqueue_style( 'byo' );
		wp_enqueue_script( 'byo', get_template_directory_uri() . '/byo/byo.js', array('jquery', 'jqueryuimin'), '1.0.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'aztek_scripts' );


function aztek_title( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | '. get_bloginfo( 'name' ). ' | '. get_bloginfo( 'description' );
	}
	return $title;
}

add_filter( 'wp_title', 'aztek_title' );


// USER META DATA

add_action( 'show_user_profile', 'fit_profile_fields' );
add_action( 'edit_user_profile', 'fit_profile_fields' );

function fit_profile_fields( $user ) { ?>
<h3>Fit Profile Info</h3>
<table class="form-table">
	<tr>
		<th><label for="fit_profile_one">Fit Profile 1 String</label></th>
		<td>
			<input type="text" name="fit_profile_one" id="fit_profile_one" value="<?php echo esc_attr( get_the_author_meta( 'fit_profile_one', $user->ID ) ); ?>" class="regular-text" /><br />
		</td>
	</tr>
	<tr>
		<th><label for="fit_profile_two">Fit Profile 2 String</label></th>
		<td>
			<input type="text" name="fit_profile_two" id="fit_profile_two" value="<?php echo esc_attr( get_the_author_meta( 'fit_profile_two', $user->ID ) ); ?>" class="regular-text" /><br />
		</td>
	</tr>
	<tr>
		<th><label for="fit_profile_three">Fit Profile 3 String</label></th>
		<td>
			<input type="text" name="fit_profile_three" id="fit_profile_three" value="<?php echo esc_attr( get_the_author_meta( 'fit_profile_three', $user->ID ) ); ?>" class="regular-text" /><br />
		</td>
	</tr>
</table>
<?php }

add_action( 'personal_options_update', 'fit_profile_save_fields' );
add_action( 'edit_user_profile_update', 'fit_profile_save_fields' );

function fit_profile_save_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'fit_profile_one' to the field ID. */
	update_usermeta( $user_id, 'fit_profile_one', $_POST['fit_profile_one'] );
	update_usermeta( $user_id, 'fit_profile_two', $_POST['fit_profile_two'] );
	update_usermeta( $user_id, 'fit_profile_three', $_POST['fit_profile_three'] );
}

//Front End Saving

if (isset($_REQUEST['save_fit'])){
	if(is_user_logged_in()) {
		$user_id = get_current_user_id();
		update_usermeta( $user_id, $_REQUEST['save_fit'], $_REQUEST['fit_data'] );
	}
	else {
		echo false;
		exit;
	}
}

if (isset($_REQUEST['load_fit'])){
	if(is_user_logged_in()) {
		$user_id = get_current_user_id();
		$string = get_the_author_meta($_REQUEST['load_fit'], $user_id);
		echo $string;
		exit;
	}
	else {
		echo false;
		exit;
	}
}

function aztek_create_post_type() {
	register_post_type('processslider', array(
		'labels' => array(
			'name' => __('Process Slider'),
			'singular_name' => __('Process Slide')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'process-slider'),
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('endorsementslider', array(
		'labels' => array(
			'name' => __('Endorsement Slider'),
			'singular_name' => __('Endorsement Slide')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'endorsement-slider'),
		'menu_icon' => 'dashicons-share',
		'supports' => array('title','editor','thumbnail')
		)
	);
	register_post_type('faq', array(
		'labels' => array(
			'name' => __('FAQs'),
			'singular_name' => __('FAQ')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'faq'),
		'supports' => array('title','editor')
		)
	);
	register_post_type('videos', array(
		'labels' => array(
			'name' => __('Videos'),
			'singular_name' => __('Video')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'videos'),
		'supports' => array('title')
		)
	);
	register_post_type('landingpages', array(
		'labels' => array(
			'name' => __('Landing Pages'),
			'singular_name' => __('Landing Page')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'go'),
		'supports' => array('title')
		)
	);
}
add_action('init', 'aztek_create_post_type');

function get_featured_url() {
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	return $thumb_url;
}

function wp_register_form() {
	echo '<h2>Registration</h2>';
	echo '<form name="registerform" action='.site_url('wp-login.php?action=register', 'login_post').'" method="post">';
	echo '<p>';
	echo '<label for="user_login">Username</label>';
	echo '<input type="text" name="user_login" value="">';
	echo '</p>';
	echo '<p>';
	echo '<label for="user_email">E-mail</label>';
	echo '<input type="text" name="user_email" id="user_email" value="">';
	echo '</p>';
	echo '<p style="display:none">';
	echo '<label for="confirm_email">Please leave this field empty</label>';
	echo '<input type="text" name="confirm_email" id="confirm_email" value="">';
	echo '</p>';
	echo '<p id="reg_passmail">A password will be e-mailed to you.</p>';
	echo '<input type="hidden" name="redirect_to" value="/login/?action=register&success=1" />';
	do_action('register_form');
	echo '<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" value="Sign Up" /></p>';
	echo '</form>';
}

//Woocommerce Stuff
add_theme_support('woocommerce');
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_before_main_content', 'woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'woocommerce_wrapper_end', 10);

function woocommerce_wrapper_start() {
	echo '<main><div class="white-wrap col-wrap"><div class="wc-aztek-border"></div><div class="mini-container">';
}

function woocommerce_wrapper_end() {
	echo '</div><div class="wc-aztek-border"></div></div></main>';
}

//Modify Woocommerce Add To Cart Button
/**
 * Add an icon in the add to cart.
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

function woo_custom_cart_button_text() {

	return __( 'Add to cart <i class="fa fa-angle-right"></i>', 'woocommerce' );

}

// Remove product tabs

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
	global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {

	$args['posts_per_page'] = 4; // 4 related products
	return $args;
}

add_filter( 'woocommerce_registration_redirect', 'krex_redirect'); 

function krex_redirect( $redirect_to ) {
	return 'http://aztekpaddles.com/get-fit';
}

add_theme_support( 'menus' );
//Menu Registration
register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	'Accounts_Nav' => 'My Account Nav',
	'Product_Nav' => 'Product Menu Nav',
	'Shipping_Nav' => 'Shipping Menu Nav',
	'Company_Nav' => 'Compay Menu Nav',
	'Contact_Nav' => 'Contact Nav',
	'Mobile_Nav_Left' => 'Mobile Nav Left Side',
	'Mobile_Nav_Right' => 'Mobile Nav Right Side',
	) );

add_theme_support( 'widgets' );

//Sidebar Registration
register_sidebar( array(
	'name' => __( 'Product Search', 'wpb' ),
	'id' => 'sidebar-1',
	'description' => __( 'This search appears in the main menu', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4 style="display: none;">',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 1', 'wpb' ),
	'id' => 'sidebar-2',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 2', 'wpb' ),
	'id' => 'sidebar-3',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 3', 'wpb' ),
	'id' => 'sidebar-4',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

register_sidebar( array(
	'name' => __( 'Footer 4', 'wpb' ),
	'id' => 'sidebar-5',
	'description' => __( 'This widget appears in the footer', 'wpb' ),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	) 
);

// Instagram Feed

function instaGramFeed($userID, $accessToken){
	$url = "https://api.instagram.com/v1/users/".$userID."/media/recent/?access_token=".$accessToken;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	$result = curl_exec($ch);
	curl_close($ch); 
	$result = json_decode($result);
	$i = 0;
	foreach ($result->data as $post) if ($i < 10) {
		echo '<div><a target="_blank" href="'.$post->link.'"><img src="'.$post->images->low_resolution->url.'"></a></div>';
		$i++;
	} 
}

// Remove Default Sorting Dropdown
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

add_action( 'init', 'woocommerce_clear_cart_url' );
function woocommerce_clear_cart_url() {
	if ( isset( $_GET['clear-cart'] ) ) {
		global $woocommerce;
		$woocommerce->cart->empty_cart();
	}
}

/**
 * Add new register fields for WooCommerce registration.
 *
 * @return string Register fields HTML.
 */
function wooc_extra_register_fields() {
	?>

	<p class="form-row form-row-first">
		<label for="reg_billing_first_name"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />
	</p>

	<p class="form-row form-row-last">
		<label for="reg_billing_last_name"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
		<input type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />
	</p>

	<div class="clear"></div>



	<?php
}

add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );

/**
 * Validate the extra register fields.
 *
 * @param  string $username          Current username.
 * @param  string $email             Current email.
 * @param  object $validation_errors WP_Error object.
 *
 * @return void
 */
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
	if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
		$validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
	}

	if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
		$validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
	}


	if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {
		$validation_errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone is required!.', 'woocommerce' ) );
	}
}

add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );

/**
 * Save the extra register fields.
 *
 * @param  int  $customer_id Current customer ID.
 *
 * @return void
 */
function wooc_save_extra_register_fields( $customer_id ) {
	if ( isset( $_POST['billing_first_name'] ) ) {
		// WordPress default first name field.
		update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );

		// WooCommerce billing first name.
		update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
	}

	if ( isset( $_POST['billing_last_name'] ) ) {
		// WordPress default last name field.
		update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );

		// WooCommerce billing last name.
		update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
	}

	if ( isset( $_POST['billing_phone'] ) ) {
		// WooCommerce billing phone
		update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
	}
}

add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

?>