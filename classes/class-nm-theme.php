<?php

/**
 * Bootstrap NM_THEME
 */

namespace NM_THEME\Classes;

use NM_THEME\Traits\Singleton;

class NM_THEME
{

    use Singleton;

    protected function __construct()
    {
        Assets::get_instance();
        Sidebar::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        //Theme hooks
        add_action('after_setup_theme', [$this, 'theme_support']);
    }

    public function theme_support()
    {
        //Title
        add_theme_support('title-tag');

        //logo
        add_theme_support('custom-logo', array(
            'header-text' => ['site-title', 'site-description']
        ));

        //Image Size
        add_image_size('site-logo', 220, 180);
        add_image_size('blog-img');

        //Custom Background
        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-image' => ''
        ]);

        add_theme_support('post-thumbnails');

        //Feed Links
        add_theme_support('automatic-feed-links');

        //Customize Selective Refresh Widgets
        add_theme_support('customize-selective-refresh-widgets');

        //Theme Markup
        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));


        add_editor_style();

        //wp-block-styles
        add_theme_support('wp-block-styles');

        add_theme_support('align-wide');

        // global $content_width;
        // if(!isset($content_width)){
        //     $content_width = 1240;
        // }

        register_nav_menus(
			array(
				'main-menu' => esc_html__('Main Menu', 'nm_theme'),
				'footer-menu' => esc_html__('Footer Menu', 'nm_theme'),
			)
		);

        register_post_type('games ', array(
			'labels' 	=> array(
				'name' 			=> __('Games', 'nm_theme'),
				'add_new_item'	=> __('Add New Games', 'nm_theme'),
			),
			'public' 		=> true,
			'has_archive' => true,
			'supports'		=> array('title', 'thumbnail'),
			'menu_position' => 7,
			'menu_icon' 	=> 'dashicons-welcome-view-site'
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
