<footer id="content-info" class="container" role="contentinfo">
<div class="row">
  <div class="span3 entry-content" id="testimonial">
    <?php
    $args = array( 'numberposts' => 1, 'orderby' => 'rand', 'category' => '15' );
    $rand_posts = get_posts( $args );

    foreach( $rand_posts as $post ) : setup_postdata($post); ?>
     <p class="tesimonial-quote"><?php the_content(); ?></p>
     <p class="tesimonial-name pull-right"><strong>-<?php the_title(); ?></strong></p>
    <?php endforeach; ?>
  </div>
</div>

  <div class="row">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php if (GOOGLE_ANALYTICS_ID) : ?>
<script>
  var _gaq=[['_setAccount','<?php echo GOOGLE_ANALYTICS_ID; ?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>


<?php wp_footer(); ?>
