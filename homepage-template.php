<?php /* Template Name: Home Video */
get_header(); ?>
<main>
  <div class="slider hptemp">
    <div class="slide" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/aztek-challenge.jpg); background-size: cover; background-repeat: no-repeat; background-position: cover;">
     <div class="dark-opaque">
      <div class="mini-container">
        <div class="col-wrap">
          <div class="column half">
            <div class="overlay">
              <h1>Take The <br/><span style="font-weight: 800;">Aztek Challenge</span></h1>
              <p style="color: #fff;">Would you like to try a custom handcrafted carbon fiber paddle at no cost to you? Well now is your chance! After the Aztek Paddle has shipped, you have 21 days to test it out. Like it, keep it! Not satisfied? Ship it back at no charge to you.</p>
              <a class="btn" href="<?php echo get_site_url(); ?>/go/aztek-challenge">Take The Challenge <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
<!-- 
    <div class="slide">
      <div class="mini-container">
        <div class="col-wrap">
          <div class="column half">
            <div class="overlay">
              <h1>Designed in a Lab <br/><span>Built for you.</span></h1>
              <p>Aztek&trade; Paddles create precision-tailored, performance standup paddles designed to add power and reduce fatigue. Whether you're a beginner or a pro, Aztek Paddles are tuned to you.</p>
              <a class="btn" href="<?php echo get_site_url(); ?>/get-fit">Get Fit <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="column half shader">
            <div class="paddles">
              <img src="<?php echo get_template_directory_uri(); ?>/images/glow.png" class="glow">
              <img src="<?php echo get_template_directory_uri(); ?>/images/paddle-top.png" class="top-anim">
              <img src="<?php echo get_template_directory_uri(); ?>/images/paddle-bottom.png" class="bot-anim">
            </div>
          </div>
        </div>
      </div>
    </div>
  -->
  </div>
  <div class="white-wrap">
    <hr/>
    <div class="container">
      <div class="col-wrap">
        <div class="paddle">
          <div class="column sixth">
            <h2>AZTEK&trade; Race Paddle</h2>
            <p>A complete paddle built to order; equipped with custom blade, handle and shaft.</p>
            <p class="price">$390.<span>00</span></p>
          </div>
          <div class="column two-thirds">
           <img width="787" height="149" src="<?php echo get_template_directory_uri(); ?>/images/race-paddle-display.png" data-zoom-image="<?php echo get_template_directory_uri(); ?>/images/race-paddle-zoom.png"/>
         </div>
         <div class="column sixth taligncenter">
           <a href="<?php echo get_site_url(); ?>/shop/paddles/race-paddle/" class="buy-now">Buy Now <i class="fa fa-angle-right"></i></a>
         </div>
       </div>
       <div class="paddle">
        <div class="column sixth">
          <h2>AZTEK&trade; Surf Paddle</h2>
          <p>A complete paddle built to order; equipped with custom blade, handle and shaft.</p>
          <p class="price">$390.<span>00</span></p>
        </div>
        <div class="column two-thirds">
         <img width="787" height="149" src="<?php echo get_template_directory_uri(); ?>/images/surf-paddle-display.png" data-zoom-image="<?php echo get_template_directory_uri(); ?>/images/surf-paddle-zoom.png">
       </div>
       <div class="column sixth taligncenter">
         <a href="<?php echo get_site_url(); ?>/shop/paddles/surf-paddle/" class="buy-now">Buy Now <i class="fa fa-angle-right"></i></a>
       </div>
     </div>
   </div>
 </div>
</div>
<div class="big-video" style="padding:80px 0px; background-size:100%;">
  <div class="container taligncenter">
    <iframe src="https://player.vimeo.com/video/122995786?color=35ab9c&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
  </div>
</div>
<div class="factory">
  <?php query_posts(array('posts_per_page' => -1, 'post_type' => 'processslider', 'order' => 'ASC')); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="slide" style="background-image:url('<?php echo get_featured_url(); ?>');">
    <div class="overlay">
      <h3><?php the_content(); ?></h3>
    </div>
  </div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<hr class="dark"/>
<div class="drawing">
  <div class="sup-man">
    <div class="shaft-flex">
      <div class="container taligncenter col-wrap">
        <div class="column half">
        </div>
        <div class="column half talignleft more-power">
          <h4><b>More Power.</b><br />Less Fatigue.</h4>
          <p>
            The Aztek&trade; Variable Flex Profile technology stores and releases energy to maximize the power and efficiency of your stroke.
          </p>
          <a class="btn tech-button" href="<?php echo get_site_url(); ?>/technology">Read More <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="tradeblade">
  <div class="container">
    <div class="col-wrap">
      <div class="column half">
        <img class="blade blade-1" src="<?php echo get_template_directory_uri(); ?>/images/race-blade.png" />
        <img class="blade blade-2" src="<?php echo get_template_directory_uri(); ?>/images/surf-blade.png" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/tradeblade-shaft-tip.png" class="shaft-tip" />
      </div>
      <div class="column half">
        <h4><b>ONE PADDLE.</b> <br />MANY OPTIONS.</h4>
        <p>
          The Aztek&trade; TradeBlade system allows you to quickly swap blades with the twist of a wrench. No matter what type of paddling you want to do, Aztek&trade; Paddles' interchangeable race and surf blades have you covered-all while simplifying storage and transport.
        </p>
        <a class="btn tech-button" href="<?php echo get_site_url(); ?>/technology">Read More <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="california">
  <div class="container cali-state">
    <div class="col-wrap">
      <div class="column half">
      </div>
      <div class="column half talignleft handcrafted">
        <h4><b>Handcrafted</b> <br />In California.</h4>
        <p>
          Our forefathers took great pride in craftsmanship, and so do we. As carbon fiber pioneers, BST Nano Carbon combines bioengineering with impeccable craftsmanship, resulting in the most technically advanced, human-centric standup paddle products on the market.
        </p>
        <a class="btn tech-button alignright" href="<?php echo get_site_url(); ?>/technology">Read More <i class="fa fa-angle-right"></i></a>

      </div>
    </div>
  </div>
</div>
<div class="endorsement">
  <?php query_posts(array('posts_per_page' => -1, 'post_type' => 'endorsementslider')); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="slide" style="background-image:url('<?php echo get_featured_url(); ?>');">
    <div class="overlay">
      <div class="mini-container">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div class="social-carousel">
  <?php instaGramFeed('1652549489','1652549489.5b9e1e6.a5206f094b2c44c091e373ce7f081831'); ?>
</div>
<hr class="dark"/>
</main>
<?php get_footer(); ?>