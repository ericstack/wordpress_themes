<?php
/**
 * Boostrap the theme.
 * 
 * @package Axis
 */
namespace AXIS_THEME\Inc;

use AXIS_THEME\Inc\Traits\Singleton;

class AXIS_THEME{
    use Singleton;

    protected function __construct(){
        //load class.
        Assets::get_instance();
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters.

        add_action('after_setup_theme', [ $this, 'theme_setup' ] );
    }

    public function theme_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo',[
            'header-text' => ['site-title', 'site-description'],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        add_theme_support('custom-background', [
            'default-color' => 'ffffff',
            'default-image' => '',
        ]);
    }
}