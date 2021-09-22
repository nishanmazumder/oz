<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

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
				'id'       => 'nmReconmandedTitle',
				'type'     => 'text',
				'title'    => esc_html__('Recomanded Casino', 'nmbet'),
				'default'  => 'Recomanded Casino',
			),
			array(
				'id'       => 'nm3betCategory',
				'type'     => 'select',
				'url'      => true,
				'title'    => __('Recomanded Casino', 'nmbet'),
				'desc'     => esc_html__('Please select category for Casino.', 'nmbet'),
				'data' => 'terms',
				'args' => array(
					'taxonomies' => array('games-category'),
				),
				'default'  => 'Trending'

			)
		)
	)
);

//Content
Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Casino Table', 'nmbet'),
		'id'               => 'home_content',
		'desc'             => esc_html__('These fields for only home page!', 'nmbet'),
		'subsection'       => true,
		//'customizer_width' => '200px',
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmHomeTextone',
				'type'     => 'text',
				'title'    => __('Casino Table', 'nmbet'),
				//'full_width' => true,
				'default'  => __('[short-code-for-table]', 'nmbet'),

			)
		)
	)
);



