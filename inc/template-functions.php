<?php

/**
 *  Template functions
 * 
 * @package NM_THEME
 */

//Enable classic editor for wordpress//
add_filter('use_block_editor_for_post','__return_false');

//Pagination
if (!function_exists('nm_post_pagi')) :
    function nm_post_pagi()
    {
       global $wp_query;
       $bigInt = 999999999;
 
       echo paginate_links(array(
          'base' => str_replace($bigInt, '%#%', esc_url(get_pagenum_link($bigInt))),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages
       ));
    }
 endif;
 
 function nmbet_widgets_init()
 {
    register_sidebar(
       array(
          'name'          => esc_html__('Sidebar', 'nmbet'),
          'id'            => 'sidebar-main',
          'description'   => esc_html__('Add widgets here.', 'nmbet'),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget'  => '</section>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
       )
    );
 
    register_sidebar(
       array(
          'name'          => esc_html__('CMD', 'nmbet'),
          'id'            => 'sidebar-cmd',
          'description'   => esc_html__('Add widgets here.', 'nmbet'),
          'before_widget' => '<section id="%1$s" class="widget %2$s">',
          'after_widget'  => '</section>',
          'before_title'  => '<h2 class="widget-title">',
          'after_title'   => '</h2>',
       )
    );
 }
 add_action('widgets_init', 'nmbet_widgets_init');
 
 //Read More
 function read_more($limit)
 {
    $post_content = explode(' ', get_the_content());
    $limit_content = array_slice($post_content, 0, $limit);
 
    echo implode(' ', $limit_content);
 }
 