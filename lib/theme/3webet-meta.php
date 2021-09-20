<?php
// add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
// /**
//  * Define the metabox and field configurations.
//  */
// function cmb2_sample_metaboxes() {

// 	/**
// 	 * Initiate the metabox
// 	 */
// 	$cmb = new_cmb2_box( array(
// 		'id'            => 'nm_game_metabox',
// 		'title'         => __( 'Games Button Content', 'cmb2' ),
// 		'object_types'  => array( 'Games', ), // Post type
// 		'context'       => 'normal',
// 		'priority'      => 'high',
// 		'show_names'    => true, // Show field names on the left
// 		// 'cmb_styles' => false, // false to disable the CMB stylesheet
// 		// 'closed'     => true, // Keep the metabox closed by default
// 	) );

// 	// Regular text field
// 	$cmb->add_field( array(
// 		'name'       => __( 'Button Text', 'nmbet' ),
// 		'desc'       => __( 'Please add button text', 'cmb2' ),
// 		'id'         => 'nmGamesBtn',
// 		'type'       => 'text',
// 		//'default' => 'Play Now',
// 	) );

// 	// URL text field
// 	$cmb->add_field( array(
// 		'name' => __( 'Button URL', 'nmbet' ),
// 		'desc' => __( 'Please add button URL', 'cmb2' ),
// 		'id'   => 'nmGamesBtnurl',
// 		'type' => 'text_url',
// 		'default'=> 'https://3webetsg.com'
// 	) );
// }

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'nm_game_metabox',
		'title'         => __( 'Games Button Content', 'cmb2' ),
		'object_types'  => array( 'games', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// BTN text field
	$cmb->add_field( array(
		'name'       => __( 'Button Text', 'cmb2' ),
		//'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => 'nm3webtnTextName',
		'type'       => 'text',
		'default' => 'Play Now',
		'show_on_cb' => 'cmb2_hide_if_no_cats', 
	) );

	// BTN URL field
	$cmb->add_field( array(
		'name' => __( 'Button URL', 'cmb2' ),
		//'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'nm3webtnTextUrl',
		'type' => 'text_url'
	) );
}