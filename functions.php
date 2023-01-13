<?php

//adding styles and scripts
function golizard_scripts_and_styles() {
    wp_enqueue_style('golizard-main-styles', get_stylesheet_uri());
    wp_enqueue_style('golizard-sass-styles', get_template_directory_uri() . '/dist/main.css');
    wp_enqueue_script('script-main', get_template_directory_uri() . '/dist/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'golizard_scripts_and_styles');
//adding styles and scripts

// Font awesome
function enqueue_fa_script() {
    wp_enqueue_script('fascript', 'https://kit.fontawesome.com/39a4fac272.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_fa_script' );
//  Font awesome

//Start - add menus
function golizard_nav_menus() {
    register_nav_menus([
        'main-menu' => 'Main menu',
        'footer-menu' => 'Footer menu'
    ]);
}
add_action('init', 'golizard_nav_menus');
// End - add menus

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '1000' );

// Hiding of Wordpress version
function remove_version_info() {
    return '';
    }
add_filter('the_generator', 'remove_version_info');
// Hiding of Wordpress version

// Logo management in admin panel
add_theme_support( 'custom-logo' );

// Thumbnails support
add_theme_support( 'post-thumbnails' );

// Custom post types include
include get_template_directory() . "/inc/cpt.php";
// Slick carousel include
include get_template_directory() . "/inc/slick.php";
// Widgets include
include get_template_directory() . "/inc/widgets.php";
// Menu Classes adding to a function
include get_template_directory() . "/inc/menu-classes.php";




