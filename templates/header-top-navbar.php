<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
            <div class="row">
              <div class="span5">
              <a class="brand" href="<?php echo home_url(); ?>/">
                  <?php bloginfo('name'); ?>
                  <span class="sub-brand"></span>
                </div>
              </a>
              <div class="span2 pull-right">
                  <a href="#">Donate!</a>
              </div>
            </div>

      <div class="row">
        <nav id="nav-main" class="nav-collapse" role="navigation">
        <div class="span7">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
            endif;
          ?>
        </div>
        <div class="span4 pull-right">
          <div class="input-append mailinglist">
            <input class="span2" id="appendedInputButton" type="text" placeholder="Your Email">
            <button class="btn" type="button">Join the mailing list</button>
          </div>

        </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="jumbotron">
    <div class="container">
                  <div class="row">                      <div class="jumbo-social-media pull-right span3">
                            <img src="/satya/assets/img/round_facebook.png">
                            <img src="/satya/assets/img/round_twitter.png">
                            <img src="/satya/assets/img/round_email.png">
                      </div>
                  </div>
    </div>
  </div>

</header>
