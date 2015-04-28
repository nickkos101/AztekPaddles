<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap page-content">
		<div class="wc-aztek-border"></div>
		<div class="container page-contain">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3><?php the_title(); ?></h3>
			<a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark"  data-pin-color="red" data-pin-height="28"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_28.png" /></a>
			<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>