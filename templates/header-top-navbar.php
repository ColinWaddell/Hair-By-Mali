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
				  <div id="ml-newsletterform-container">
					<form action="" onsubmit="return subscribeMailList()" id="ml-newsletterform">
						<div class="input-append mailinglist">
							<?php echo '<img id="ml-img" src="'.WP_PLUGIN_URL.'/mail-list/img/ml-ajax.gif">'; ?>
							<input class="span2" id="ml-email" type="text" placeholder="Your Email">
							<button class="btn" type="submit" id="ml-button">Join the e-list</button>
						</div>
					</form>
					<a class="donate-button btn btn-inverse pull-right" href="#" id="donate">Donate!</a>
				 </div>
                
				<div class="messagepop pop span4">
				  <p><a class="close-donate close" href="#">Hide</a></p>

				  <h4>Message about donating to Satya</h4>
				  <hr />
					<div class="control-group row">
					  <label class="control-label span2">I'd like to donate</label>
					  <div class="controls">
						<div class="input-prepend input-append">
						  <span class="add-on">£</span>
						  <input class="span1" id="appendedPrependedInput" name="donate-amount" type="text" placeholder="5">
						  <span class="add-on" id="donate-button">Donate!</span>
						</div>
					  </div>
					</div>
				</div>
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
