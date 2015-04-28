<?php /* Template Name: FAQ Page */
get_header(); ?>
<main>
	<div class="white-wrap col-wrap page-content">
		<div class="wc-aztek-border"></div>
		<div class="container page-contain">
			<h1>FREQUENTLY ASKED QUESTIONS</h1>
			<div class="column two-thirds spacer">
				<?php query_posts(array('post_type' => 'faq')); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="faq">
					<h3><?php the_title(); ?> <span class="alignright">+</span></h3>
					<div class="answer">
						<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="column third spacer taligncenter">
			<img class="" src="http://aztekpaddles.com/wp-content/uploads/2015/03/race-paddle-vert.png">
		</div>
	</div>
	<div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>