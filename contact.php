<?php /* Template Name: Contact Template */ ?>
<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap page-content contact">
		<div class="wc-aztek-border"></div>
		<div class="container page-contain">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php endwhile; endif; ?>
		<div class="column half">
			<h3>We'd love to <span>hear from you!</span></h3>
			<p><img src="<?php echo get_template_directory_uri(); ?>/images/phone-icon.png" class="icon">Phone: (858) 924-1185</p>
			<p><img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png" class="icon">Email: info@aztekpaddles.com</p>
			<div class="address-icon"><img src="<?php echo get_template_directory_uri(); ?>/images/address-icon.png" class="icon"></div><p class="address-par">16275 Technology Place <br />San Diego, CA 92127</p>
			<div class="map-frame">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3345.8030715695436!2d-117.091064!3d33.00896699999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dbf730a03c1ccd%3A0xcaea12fae8687bab!2s16275+Technology+Pl%2C+San+Diego%2C+CA+92127!5e0!3m2!1sen!2sus!4v1428453555949" width="100%" height="320" frameborder="0" style="border:0"></iframe>
			</div>
		</div>
		<div class="column half">
			<div class="ninja-wrap">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>