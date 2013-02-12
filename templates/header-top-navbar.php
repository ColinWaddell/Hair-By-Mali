<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
            <div class="row">
              <div class="span4">
                <a class="brand" href="<?php echo home_url(); ?>/">
                  <?php bloginfo('name'); ?>
                </a>
              </div>
              <div class="span3 sub-brand">
                <h2>Better Living</h2>
                <h2>Optimal Well Being</h2>
              </div>
              <div class="span5 pull-right nav-widget">
                <div class="input-append mailinglist">
                  <input class="span2" id="appendedInputButton" type="text" placeholder="Your Email">
                  <button class="btn" type="button">Join the e-list</button>
                </div>
                <a class="donate-button btn btn-inverse" href="#">Donate!</a>
              </div>
            </div>

    </div>
  </div>
  <div class="menu-area">
        <nav id="nav-main" class="nav-collapse" role="navigation">
            <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav menu-holder'));
                endif;
            ?>
            <div class="social-media">
              <a href="#"><img src="/satya/assets/img/round_facebook.png"></a>
              <a href="#"><img src="/satya/assets/img/round_twitter.png"></a>
              <a href="#"><img src="/satya/assets/img/round_email.png"></a>
            </div>
          </div>

        </nav>
  </div>
</header>
