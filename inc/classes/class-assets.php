<?php
/** 
 * Enqueue theme scripts and styles.
 * @package Axis
*/
namespace AXIS_THEME\Inc;
use AXIS_THEME\Inc\Traits\Singleton;
class Assets{
    use Singleton;
    protected function __construct(){
        //load class.
      
        $this->set_hooks();
    }

    protected function set_hooks(){
        //actions and filters.

        add_action('wp_enqueue_scripts', [ $this, 'register_styles' ] );
        add_action('wp_enqueue_scripts', [ $this, 'register_scripts' ] );
    }

    public function register_styles(){
        wp_register_style('axis-style', AXIS_DIR_URI, [], filemtime(AXIS_DIR_PATH . '/style.css'));
        wp_register_style('axis-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css', [], '5.3.0');
        wp_enqueue_style('axis-bootstrap');
        wp_enqueue_style('axis-style');
        wp_register_style('axis-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', [], null);
        wp_register_style('axis-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], '6.0.0-beta3');
        wp_enqueue_style('axis-google-fonts');
        wp_enqueue_style('axis-font-awesome');
    }

    public function register_scripts(){
        wp_register_script('axis-script', AXIS_DIR_URI . '/assets/js/main.js', ['jquery'], filemtime(AXIS_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('axis-bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js', ['jquery'], '5.3.0', true);
        wp_enqueue_script('axis-bootstrap-js');
        wp_enqueue_script('axis-script');
    }
}

