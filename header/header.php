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
            <a href="/" class="header--icon">
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
              <a  href="https://tamquoc.itap.vn/tan-tam-quoc-cong-thanh-xung-de-nhat-thong-giang-son/">Giới Thiệu</a>
              <a  href="https://www.facebook.com/tamquoc.itap.vn" target="_blank">Cộng Đồng</a>
              <a class="fix-flex"  href="/thu-vien">Thư Viện</a>
              <form role="search" method="get" class="search-form" id="search-form" action="<?php echo 
              home_url( '/' ); ?>">
              <label  id="search-field">
                <input type="search" class="search-field"
                placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
                value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              </label>
              <button type="submit" class="search-submit" id="search-submit-btn"><i class="fas fa-search"></i></button> 
              </form>
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
          <a  href="https://tamquoc.itap.vn/tan-tam-quoc-cong-thanh-xung-de-nhat-thong-giang-son/">GIỚI THIỆU</a>
          <a  href="https://www.facebook.com/tamquoc.itap.vn" target="_blank">CỘNG ĐỒNG</a>
          <a  href="/thu-vien">THƯ VIỆN</a>
          <i class="fas fa-times" onclick="closeBar()"></i>
        </div>
      </div>
      <div class="header--search-mobile">
        <form role="search" method="get" class="search-form" id="search-mobile-form" action="<?php echo 
        home_url( '/' ); ?>">
        <label  id="search-field">
          <input type="search" class="search-field"
          placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
          value="<?php echo get_search_query() ?>" name="s"
          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
        </label>
        <button type="submit" class="search-submit" id="search-mobile-submit-btn"><i class="fas fa-search"></i></button> 
        </form>
      </div>
    </div>
  </div>
  <div class="top-video">
    <a data-fancybox href="https://www.youtube.com/watch?v=6KQjIZd9gVA">
      <img src="<?php bloginfo('template_url');?>/assets/images/play.png" alt="">
    </a>
  </div>
  <?php 
  include get_theme_file_path('/main/section-info-game.php');
  ?>
</div>