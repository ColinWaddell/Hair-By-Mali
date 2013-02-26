

<div id="home-splash">
 <div class="row">
    <div class="span3 home-well">
       <?php while (have_posts()) : the_post(); ?>
        <?php the_content()?>
       <?php endwhile; ?>
    </div>
</div>


