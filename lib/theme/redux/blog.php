<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Basic', 'nmbet'),
		'id'               => 'blog_banner',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'blogBanner',
				'type'     => 'media',
				'url'      => true,
				'title'    => esc_html__('Banner - Blog Page', 'nmbet'),
				'desc'     => esc_html__('Please add banner.', 'nmbet'),
				// 'default'  => array(
				// 	'url' => get_template_directory() . '/src/assets/img/3welogo.png',
				// ),
			)
		)
	)
);