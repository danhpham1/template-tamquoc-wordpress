    <div class="top--bg1">
    </div>
    <div class="header">
      <div class="header--container">
        <div class="header--menu">
          <div class="header--nav">
            <a href="/tamquoc" class="header--icon">
              <img src="<?php bloginfo('template_url');?>/assets/images/icon-home.png">
            </a>
            <?php wp_nav_menu( 
              array( 
                'theme_location'  => 'Header',
                'menu'            =>'Header', 
                'container' => 'div', 
                'menu_id' => 'header-menu', 
              ) 
            ); ?> 
            <img class="logo" src="<?php bloginfo('template_url');?>/assets/images/logo.png">
            <a class="header--fanpage" href="#">FanPage</a>
            <div class="header--call">
              <img src="<?php bloginfo('template_url');?>/assets/images/header-call.png">
            </div>
          </div>
        </div>
      </div>
    </div>
