<?php get_template_part('header', 'two'); ?>
<main class="tech lpage">
  <div class="slider" 
  <?php 
  if(autoc_get_postdata('p1image')) { 
    echo 'style="background-image: url('.autoc_get_img_src('p1image').'); background-size: cover; background-position: center center; background-repeat: no-repeat;"'; 
  }
  ?>
  >
    <div class="slide">
      <div class="mini-container">
        <div class="col-wrap">
          <div class="overlay landing-overlay">
              <h1 class="taligncenter"><?php echo autoc_get_postdata('p1headline'); ?></h1>
          <div class="column two-thirds">
              <div class="mainpadded"><p class="talignleft" style="margin-bottom: 20px;"><?php echo autoc_get_postdata('p1content'); ?></p></div>
            </div>
          <div class="column third">
 <div class="salesforce-form"><?php echo do_shortcode( '[salesforce form="1"]' ); ?></div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="dark"/>
  <div class="lp-panel white-wrap" style="background-image:none;">
    <div class="container">
      <div class="col-wrap">
        <div class="column full taligncenter">
          <h4><?php echo autoc_get_postdata('p3headline'); ?></h4>
          <?php echo autoc_get_postdata('p3content'); ?>
          <!-- <a class="btn tech-button" href="<?php echo autoc_get_postdata('p3buttonlink'); ?>">Read More <i class="fa fa-angle-right"></i></a> -->
        </div>
        <!-- <div class="column half talignright">
          <iframe src="https://player.vimeo.com/video/<?php echo autoc_get_postdata('vimeoID'); ?>?color=35ab9c&amp;title=0&amp;byline=0&amp;portrait=0" width="100%" height="340" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
       </div> -->
     </div>
   </div>
 </div>
 <hr class="dark" />
 <!-- <div class="lp-panel" style="background-image:url('http://aztekpaddles.com/wp-content/themes/aztek/images/tech/HANDCRAFTED_BG.png');">
  <div class="container">
    <div class="col-wrap taligncenter">
      <div class="column two-thirds">
        <h4><?php echo autoc_get_postdata('p4headline'); ?></h4>
        <?php echo autoc_get_postdata('p4content'); ?>
        <a class="btn tech-button" href="<?php echo autoc_get_postdata('p4buttonlink'); ?>">Read More <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>
</div> 
<hr class="dark" /> -->
</main>
<?php get_template_part('footer', 'two'); ?>