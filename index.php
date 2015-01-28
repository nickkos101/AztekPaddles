<?php get_header(); ?>
<main>
    <div class="slider">
        <div class="slide">
            <div class="mini-container">
                <div class="col-wrap">
                    <div class="column half">
                        <div class="overlay">
                            <h1>Designed in a Lab <br/><span>Built for you.</span></h1>
                            <p>Aztek&trade; Paddles create precision-tailored, performance standup paddles designed to add power and reduce fatigue. Whether you’re a beginner or a pro, Aztek Paddles are tuned to you.</p>
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
                     <img src="<?php echo get_template_directory_uri(); ?>/images/race-paddle-display.png" data-zoom-image="<?php echo get_template_directory_uri(); ?>/images/race-paddle-zoom.png"/>
                 </div>
                 <div class="column sixth taligncenter">
                     <a href="<?php echo get_site_url(); ?>/buy-now/race-paddle" class="buy-now">Buy Now <i class="fa fa-angle-right"></i></a>
                 </div>
             </div>
             <div class="paddle">
                <div class="column sixth">
                    <h2>AZTEK&trade; Surf Paddle</h2>
                    <p>A complete paddle built to order; equipped with custom blade, handle and shaft.</p>
                    <p class="price">$390.<span>00</span></p>
                </div>
                <div class="column two-thirds">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/surf-paddle-display.png" data-zoom-image="<?php echo get_template_directory_uri(); ?>/images/surf-paddle-zoom.png">
             </div>
             <div class="column sixth taligncenter">
                 <a href="<?php echo get_site_url(); ?>/buy-now/surf-paddle" class="buy-now">Buy Now <i class="fa fa-angle-right"></i></a>
             </div>
         </div>
     </div>
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
                  The Aztek&trade; TradeBlade system allows you to quickly swap blades with the twist of a wrench. No matter what type of paddling you want to do, Aztek™ Paddles’ interchangeable race and surf blades have you covered–all while simplifying storage and transport.
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
                <a class="btn tech-button" href="<?php echo get_site_url(); ?>/technology">Read More <i class="fa fa-angle-right"></i></a>

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
<div class="gray-wrap dots">
    <div class="darken">
        <div class="container">
            <h5 class="taligncenter"><b>In The</b> Wild</h5>
            <div class="col-wrap blog">
                <div class="column three-fourths">
                    <div class="white-vfix">
                        <div class="column half">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/surfer.jpg">
                        </div>
                        <div class="column half white-wrap">
                            <p class="date">December 30, 2014</p>
                            <h6>Aztek makes a splash at HanoHano Huki</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="column fourth">
                    <div class="column full">
                        <div class="white-vfix">
                            <div class="column half">
                             <img src="<?php echo get_template_directory_uri(); ?>/images/bikini-tall.jpg">
                         </div>
                         <div class="column half white-wrap">
                           <p class="date">December 24, 2014</p>
                           <h6>Nano Tube Com-posting Builds Strength</h6>
                       </div>
                   </div>
               </div>
               <div class="column full">
                <div class="white-vfix">
                    <div class="column half">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/dog-tall.jpg">
                    </div>
                    <div class="column half white-wrap">
                       <p class="date">December 22, 2014</p>
                       <h6>Paying Respect to Thomas Edward Blake</h6>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
</div>
<div class="social-carousel">
        <?php instaGramFeed('1652549489','1652549489.5b9e1e6.a5206f094b2c44c091e373ce7f081831'); ?>
</div>
<hr class="dark"/>
</main>
<?php get_footer(); ?>