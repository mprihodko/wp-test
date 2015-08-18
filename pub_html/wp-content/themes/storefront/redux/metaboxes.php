<?php

// INCLUDE THIS BEFORE you load your ReduxFramework object config file.


// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = THEME_OPT;

if ( !function_exists( "redux_add_metaboxes" ) ):
	function redux_add_metaboxes($metaboxes) {
	
	$Contact_options = array();

	$metaSection = array(
		'title' => 'Contact meta',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(
			array(
				'id'     => 'Contact',
				'type'   => 'editor',
				'class'   => 'col-md-7 col-lg-7',
				'title'  => __( 'Metafield')
			),
			array(
				'id'     => 'Maps',
				'type'   => 'multi_text',				
				'title'  => __( 'Map')
			),
			array(
				'id'     => 'address_1',
				'type'   => 'multi_text',				
				'title'  => __( 'Address')
			),
			array(
				'id'     => 'Email',
				'type'   => 'multi_text',				
				'title'  => __( 'Email')
			),
			array(
				'id'     => 'Phone_1',
				'type'   => 'multi_text',				
				'title'  => __( 'Phone')
			)
			
			
		)
	);
	
	$Contact_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'Contact-options',
		'title'         => __( 'Contact options', THEME_OPT ),
		'post_types'    => array( 'page'),
		'page_template' => array('page-contact-us.php'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $Contact_options,
	);

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_metaboxes');

endif;
  /*========================================================================================================*/

if ( !function_exists( "redux_add_facebook" ) ):
	function redux_add_facebook($metaboxes) {
	
	$logo_options = array();

	$metaSection = array(
		'title' => 'Facebook',
		'icon_class'    => 'icon-large',
		'icon'          => 'el-icon-list-alt',
		'fields' => array(			
			array(
				'id'     => 'facebook_blog',
				'type'   => 'text',				
				'title'  => __( 'Facebook')
			),
			array(
				'id'     => 'google_blog',
				'type'   => 'text',				
				'title'  => __( 'Google Plus')
			),
			array(
				'id'     => 'twitter_blog',
				'type'   => 'text',				
				'title'  => __( 'Twitter')
			)
			
		)
	);
	
	$logo_options[] = $metaSection;

	$metaboxes[] = array(
		'id'            => 'social_blog',
		'title'         => __( 'Networks', THEME_OPT ),
		'post_types'    => array( 'post'),
		'position'      => 'normal', // normal, advanced, side
		'priority'      => 'high', // high, core, default, low
		'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
		'sections'      => $logo_options,
	);

	return $metaboxes;
  }
  add_action("redux/metaboxes/{$redux_opt_name}/boxes", 'redux_add_facebook');
 
endif;
  /*========================================================================================================*/

