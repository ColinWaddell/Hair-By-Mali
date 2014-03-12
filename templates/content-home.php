<?php while (have_posts()) : the_post(); ?>
  <figure class="home-carousel">
    <div class="row">
      <div class="col-sm-6">

        <div class="v-center-outer">
           <div class="v-center-inner">
              <?php the_content(); ?>
           </div>
        </div>

      </div>  
      <div class="col-sm-6">
        <?php echo do_shortcode('[image-carousel showcaption="false" twbs="3" interval="5000" category="homepage"]'); ?>
      </div>  
    </div>
  </figure>
<?php endwhile; ?>

