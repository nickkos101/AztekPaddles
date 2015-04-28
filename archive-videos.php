<?php get_header(); ?>
<main>
	<div class="white-wrap col-wrap">
		<hr />
		<div class="container">
			<h1>Videos</h1>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php query_posts(array('posts_per_page' => 20, 'post_type' => 'videos', 'orderby' => 'date', 'order' => 'desc', 'paged' => $paged)); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="column third taligncenter">
				<div class="spacer">
					<iframe src="https://player.vimeo.com/video/<?php echo autoc_get_postdata('vimeoID'); ?>?color=35ab9c&title=0&byline=0&portrait=0" width="100%" height="230" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<hr/>
</div>
</main>
<?php get_footer(); ?>