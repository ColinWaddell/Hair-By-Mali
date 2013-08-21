<header class="banner navbar navbar-inverse navbar-static-top center" role="banner">
  <div class="navbar-inner">
    <div class="container center">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <!--<aside class="header-widget">
          <p>Call or text: 07888222333</p>
          <p>Email: <a href="#">Contact@hairbymali.co.uk</a></p>
        </aside>-->

        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

<aside class="site-title">
  <div class="container">
    <div class="col-md-offset-2 col-md-4">
      <h1><a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
    </div>     
    <div class="col-md-3">
      <p class=""></p>
      <h3><a class="brand-subtext" href="<?php echo home_url(); ?>/">For People<br />Who Love Hair</a></h3>
    </div>     
  </div>
</aside>
