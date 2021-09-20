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
		'title'            => esc_html__('Banner', 'nmbet'),
		'id'               => 'home_banner',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nm3betBannerUpload',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Upload Banner', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory(). '/src/assets/img/main.jpg',
				),

			)
		)
	)
);

//Content
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Content', 'nmbet'),
		'id'               => 'home_content',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmHomeTextone',
				'type'     => 'editor',
				'title'    => __('Content Section', 'nmbet'),
				'args'    => array(
					'wpautop'       => false,
					'media_buttons' => false,
					'textarea_rows' => 20,
					'teeny'         => false,
					'quicktags'     => false,
				),
				//'full_width' => true,
				'default'  => __('Long descirption for Home page', 'nmbet'),

			)
		)
	)
);

//Post type
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Post', 'nmbet'),
		'id'               => 'home_post',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nm3betCategory',
				'type'     => 'select',
				'url'      => true,
				'title'    => __('Games', 'nmbet'),
				'desc'     => esc_html__('Please select category for Games.', 'nmbet'),
				'data' => 'terms',
				'args' => array(
					'taxonomies' => array('games-category'),
				),
				'default'  => 'Trending'

			),
			array(
				'id'       => 'nm3betCategory2',
				'type'     => 'select',
				'url'      => true,
				'title'    => __('Read More', 'nmbet'),
				'desc'     => esc_html__('Please select category for Read More.', 'nmbet'),
				'data' => 'terms',
				'args' => array(
					'taxonomies' => array('games-category'),
				),
				'default'  => 'Read More'

			)
		)
	)
);


//ads
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('ADS', 'nmbet'),
		'id'               => 'home_ads',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nm3betads',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('ADS area', 'nmbet'),
				'desc'     => esc_html__('Please upload ADS!', 'nmbet'),
				//'full_width' => true,
				'default'  => array(
					'url' => get_template_directory() . '/src/assets/img/banner.jpg',
				),

			),
		)
	)
);