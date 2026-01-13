<?php

/**
 * Theme functions file
 * 
 * @package Axis
*/

if ( ! defined( 'AXIS_DIR_PATH' ) ) {
    define( 'AXIS_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'AXIS_DIR_URI' ) ) {
    define( 'AXIS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once AXIS_DIR_PATH . '/inc/helper/autoloader.php';

function axis_get_theme_instance() {
    \AXIS_THEME\Inc\AXIS_THEME::get_instance();
}
axis_get_theme_instance();
function axis_enqueue_scripts() {


    
    
    
    
    
}

add_action('wp_enqueue_scripts', 'axis_enqueue_scripts');

?>

