<?php get_header(); ?>
<main>
    <div class="white-wrap col-wrap">
        <div class="mini-container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</div>
</main>
<?php get_footer(); ?>