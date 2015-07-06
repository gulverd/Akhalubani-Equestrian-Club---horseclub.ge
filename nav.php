<div class="col-md-12" id="nav_wrapper">
    <div class="container" id="nav_container">
      <nav class="navbar navbar-default navbar-static-top">
      <div class="container" id="menu_container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url(); ?>">Horseclub.ge</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

          <?php// language_menu();?>    
      </div>
      </div>
    </nav>
    </div>
  </div>