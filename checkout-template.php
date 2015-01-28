<?php /* Template Name: Checkout */ ?>
<?php get_header(); ?>
<main>
    <div class="white-wrap col-wrap checkout">
    	 <div class="wc-aztek-border"></div>
        <div class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3 class="checkout-title"><?php the_title(); ?></h3>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
    <div class="wc-aztek-border"></div>
</div>
</main>
<?php get_footer(); ?>