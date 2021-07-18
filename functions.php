<?php
function header_external_styles() {
        wp_register_style( 'header-css',get_stylesheet_directory_uri().'/assets/css/header.css' );
    }
//add menu
add_theme_support('menus');
function register_my_menus() {
    $args = array( 
        'header' => __( 'Header', 'Tam Quoc' ),  
    );
    register_nav_menus( $args );
}
add_action( 'init', 'register_my_menus' );

function fn_name(){
 add_theme_support('post-thumbnails');
}
add_action('init','fn_name');
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'wpb_widgets_init' );

function posts_on_categorypage( $query ) {
    if ( $query->is_category()) {
        $query->set( 'posts_per_page', '10' );
    }
}
add_action( 'pre_get_posts', 'posts_on_categorypage' );

function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );
?>