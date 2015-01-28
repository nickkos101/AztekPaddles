<?php /* Template Name: Coming Soon Template */ ?>
<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap page-content">
		<div class="wc-aztek-border"></div>
		<div class="container page-contain">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php endwhile; endif; ?>
		<div class="column half">
			<h3><?php the_title() ?> page is coming soon...</h3>
			<p>We are in the process of updating this page and we will have it ready soon! If you have any questions, feel free to reach out to us using the contact form.</p>

		</div>
		<div class="column half">
			<div class="ninja-wrap">
				<?php echo do_shortcode( '[ninja_forms_display_form id=1]' ); ?>
			</div>
		</div>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>