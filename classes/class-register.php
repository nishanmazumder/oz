<?php

/**
 * Theme Register
 * 
 * @package NM_THEME
 */

namespace NM_THEME\Classes;

use NM_THEME\Traits\Singleton;

class Register
{

    use Singleton;

    protected function __construct()
    {
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //Actions
        add_action('init', [$this, 'register_assets']);
    }

    public function register_assets()
    {
        register_nav_menus(
            array(
                'main-menu' => esc_html__('Main Menu', 'nm_theme'),
                'footer-menu' => esc_html__('Footer Menu', 'nm_theme'),
            )
        );

        register_post_type('games ', array(
            'labels'     => array(
                'name'             => __('Games', 'nm_theme'),
                'add_new_item'    => __('Add New Games', 'nm_theme'),
            ),
            'public'         => true,
            'has_archive' => true,
            'supports'        => array('title', 'thumbnail'),
            'menu_position' => 7,
            'menu_icon'     => 'dashicons-welcome-view-site'
        ));


        register_taxonomy(
            'games-category',
            'games',
            array(
                'label' => __('Category', 'nm_theme'),
                'hierarchical' => true,
                'labels' => "Games",
                'public' => true,
                'show_in_nav_menus' => true,
                'show_tagcloud' => false,
                'show_admin_column' => true,
                'rewrite' => array(
                    'slug' => 'category'
                )
            )
        );
    }
}
