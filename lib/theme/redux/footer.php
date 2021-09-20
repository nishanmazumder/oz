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
		'title'            => esc_html__('Social', 'nmbet'),
		'id'               => 'footer_social',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-link',
		'fields'           => array(
			array(
				'id'       => 'nmSocialLink1',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet'),
				'default'  => '#',
			),
			array(
				'id'       => 'nmSocial1',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . '/src/assets/img/fb.png',
				),
			),
			array(
				'id'       => 'nmSocialLink2',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet'),
				'default'  => '#',
			),
			array(
				'id'       => 'nmSocial2',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . '/src/assets/img/ins.png',
				),
			),
			array(
				'id'       => 'nmSocialLink3',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet'),
				'default'  => '#',
			),
			array(
				'id'       => 'nmSocial3',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . '/src/assets/img/ytb.png',
				),
			)
		)
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Browser', 'nmbet'),
		'id'               => 'footer_browser',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-link',
		'fields'           => array(
			array(
				'id'       => 'nmBrowserLink1',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet')
			),
			array(
				'id'       => 'nmBrowser1',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet')
			),
			array(
				'id'       => 'nmBrowserLink2',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet')
			),
			array(
				'id'       => 'nmBrowser2',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),
			),
			array(
				'id'       => 'nmBrowserLink3',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet')
			),
			array(
				'id'       => 'nmBrowser3',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),	
			)
		)
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('License', 'nmbet'),
		'id'               => 'footer_license',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-link',
		'fields'           => array(
			array(
				'id'       => 'nmlicenseLink1',
				'type'     => 'text',
				'title'    => __('Link', 'nmbet')
			),
			array(
				'id'       => 'nmlicense1',
				'type'     => 'media',
				'url'      => true,
				'title'    => __('Image', 'nmbet'),
				'default'  => array(
					'url' => get_template_directory() . '/src/assets/img/3weblogo.png',
				),
			)
		)
	)
);

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__('Copyright', 'nmbet'),
		'id'               => 'footer_copy',
		//'desc'             => esc_html__('These are basic cahnges of this site!', 'nmbet'),
		'subsection' => true,
		'icon'             => 'el el-pencil',
		'fields'           => array(
			array(
				'id'       => 'nmCopyright',
				'type'     => 'text',
				'title'    => esc_html__('Copyright', 'nmbet'),
				'desc'     => esc_html__('Please add Copyright.', 'nmbet'),
				'default'  => 'All Right Reserved © 2021 Nishan',
			)
		)
	)
);