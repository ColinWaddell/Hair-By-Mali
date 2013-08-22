<aside class="header-contact hidden-xs">
  <p>Call or Text: 07888222333 | Email: <a href="mailto:contact@hairbymali.co.uk">contact@hairbymali.co.uk</a></p>
</aside>

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

    <div class="row">
      <div class="col-md-offset-2 col-md-4">
        <h1><a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
      </div>     
      <div class="col-md-3">
        <p class=""></p>
        <h3><a class="brand-subtext" href="<?php echo home_url(); ?>/">For People<br />Who Love Hair</a></h3>
      </div>     
    </div>

  </div>
</aside>


