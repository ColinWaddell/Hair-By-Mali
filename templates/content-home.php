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
        <div class="v-center-outer">
           <div class="v-center-inner">
              <?php echo do_shortcode('[image-carousel showcaption="false" twbs="3" interval="1200" category="homepage"]'); ?>
           </div>
        </div>
      </div>  
    </div>
  </figure>
<?php endwhile; ?>

<div class="row">
  <div class="col-sm-4 home-widget-holder">
    <?php dynamic_sidebar('home-area-1'); ?>
  </div>
  <div class="col-sm-4 home-widget-holder">
    <?php dynamic_sidebar('home-area-2'); ?>
  </div>
  <div class="col-sm-4 home-widget-holder">
    <?php dynamic_sidebar('home-area-3'); ?>
  </div>
</div>
