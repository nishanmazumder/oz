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