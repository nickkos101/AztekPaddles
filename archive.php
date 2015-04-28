<?php get_header(); ?>
<main>
	<hr />
	<div class="gray-wrap dots">
		<div class="darken">
			<div class="container">
				<h5 class="taligncenter">Blog</h5>
				<div class="col-wrap blog">
					<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
					<?php query_posts(array('posts_per_page' => 20, 'orderby' => 'date', 'order' => 'desc', 'paged' => $paged)); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="column full">
						<div class="white-vfix">
							<div class="column half">
								<a href="<?php the_permalink(); ?>">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('medium');
									} 
									?>
								</a>
							</div>
							<div class="column half white-wrap">
								<p class="date"><?php the_date(); ?></p>
								<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				<?php endwhile; else: ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>
<hr/>
<div class="woocommerce-pagination">
	<?php echo paginate_links(array('type'=>'list')); ?>
</div>
</main>
<?php get_footer(); ?>