<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
		  <span class="sub-brand">well being celebrant | dance artist | consultant</span>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>

<div class="jumbotron">
  <div class="container">
		<div class="row">
			<div class="offset1 span3">
				<p>Satya: 07981 927 335</p>
			</div>
			<div class="span7">
					<div class="input-append">
					  <input class="span3" id="appendedInputButton" type="text" placeholder="Your Email">
					  <button class="btn" type="button">Join the mailing list</button>
					</div>
					<div class="jumbo-social-media">
							<img src="/satya/assets/img/facebook-pencil.png">
							<img src="/satya/assets/img/twitter-pencil.png">
							<img src="/satya/assets/img/gmail-pencil.png">
					</div>
			</div>
		</div>
  </div>
</div>
