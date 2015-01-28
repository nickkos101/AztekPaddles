<?php /* Template Name: My Account */ ?>
<?php get_header(); ?>
<main>
	<div class="gray-wrap col-wrap cart-style">
		<div class="wc-aztek-border">
		</div>
		<div class="container account-style">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
		<?php

		if ( is_user_logged_in() ) {
			$user_id = get_current_user_id();
			$fitProfile = get_the_author_meta( 'fit_profile_one', $user_id);
			$fitProfile = explode(',', $fitProfile);

			echo '<h2>My Fit Profile - <div style="margin-left:25px;" class="btn"><a href="/get-fit">Load</a></div></h2>';

		} 

		?>
	</div>
	<div class="wc-aztek-border">
	</div>
</div>
</main>
<?php get_footer(); ?>