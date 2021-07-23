  <div class="top">
    <div class="top--bg1">
    </div>
    <div class="top-18">
      <img src="<?php bloginfo('template_url');?>/assets/images/18+.png">
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
            <div class="header--fanpage">
              <a  href="#">GIỚI THIỆU</a>
              <a  href="#">CỘNG ĐỒNG</a>
              <a  href="#">THƯ VIỆN</a>
            </div>
          </div>
        </div>
        <div class="header--menu-mobile">
          <a class="header--menu-bars" href="javascript:void(0);" class="icon" onclick="openBar()">
            <i class="fa fa-bars"></i>
          </a>
          <div class="header--menu-mobile-link header--menu-mobile-hide">
            <a  href="/">TRANG CHỦ</a>
            <a  href="/tin-tuc">TIN TỨC</a>
            <a  href="/su-kien">SỰ KIỆN</a>
            <a  href="/huong-dan">HƯỚNG DẪN</a>
            <a  href="#">GIỚI THIỆU</a>
            <a  href="#">CỘNG ĐỒNG</a>
            <a  href="#">THƯ VIỆN</a>
            <i class="fas fa-times" onclick="closeBar()"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="top-video">
      <a data-fancybox href="https://www.youtube.com/watch?v=m-PJmmvyP10">
        <img src="<?php bloginfo('template_url');?>/assets/images/play.png" alt="">
      </a>
    </div>
    <?php 
    include get_theme_file_path('/main/section-info-game.php');
    ?>
  </div>