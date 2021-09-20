<?php

/**
 * Theme Enqueue
 * 
 * @package NM_OZ
 */

namespace NM_THEME\Classes;

use NM_THEME\Traits\Singleton;

class Assets
{

    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /***
         * Actions
         ***/
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        wp_enqueue_style('nm-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_style('nm-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');
        wp_enqueue_style('nm-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
        wp_enqueue_style('nm-silck-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.css');
        wp_enqueue_style('nm-silck-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick-theme.min.css');
        
        wp_enqueue_style('nm-3webetstyle', get_template_directory_uri() . '/src/assets/styles/3webetstyle.css');
        wp_enqueue_style('nm-main', get_template_directory_uri() . '/src/main.css');

    }

    public function register_scripts()
    {
        wp_enqueue_script('nm-Jquery', get_template_directory_uri() . '/src/assets/scripts/jquery-3.3.1.min.js', [], '', true);
        wp_enqueue_script('nm-Jquery12', 'https://code.jquery.com/jquery-migrate-1.2.1.min.js', [], '', true);
        wp_enqueue_script('nm-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', [], '', true);
        wp_enqueue_script('nm-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js', [], '', true);
        wp_enqueue_script('nm-custom', get_template_directory_uri() . '/src/assets/scripts/custom.js', [], '', true);
    }
}
