<?php

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

add_action( 'cmb2_admin_init', 'add_ads_page' );
/**
 * Define the metabox and field configurations.
 */
function add_ads_page() {

	$cmb2 = new_cmb2_box( array(
		'id'            => 'nm_ads_metabox',
		'title'         => __( 'ADS', 'cmb2' ),
		'object_types'  => 'page', 
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true,
	) );

	// BTN text field
	$cmb2->add_field( array(
		'name'    => 'ADS Image',
		'desc'    => 'Upload an image or enter an URL.',
		'id'      => 'nmBetAdsImg',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			//'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			'type' => array(
			    'image/gif',
			    'image/jpeg',
			    'image/png',
			    'image/jpg'
			),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	// BTN URL field
	$cmb2->add_field( array(
		'name' => __( 'ADS url', 'cmb2' ),
		//'desc' => __( 'field description (optional)', 'cmb2' ),
		'id'   => 'nm3AdsUrl',
		'type' => 'text_url',
		'default' => '#'
	) );
}