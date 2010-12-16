<?php
/*
Plugin Name: Feature Slideshow
Plugin URI: http://sleek.no/kunder/138/
Description: Based on Feature List by jQueryGlobe. Retrives posts / pages and creates a jQuery driven slideshow, with a vertical list of post titles and a short excerpt. Choose which posts and style the slideshow from the adminpanel.
Version: 1.0.2-beta
Author: Magnus Hauge Bakke
Author URI: http://sleek.no/
*/

// Determine WP version and set plugin directory
if($wp_version >= '2.6.0') {
	$feature_slideshow_dir = WP_PLUGIN_URL."/feature-slideshow/";
} else {
	$feature_slideshow_dir = get_bloginfo('wpurl')."/wp-content/plugins/feature-slideshow/";
}

// Set option variables
$feature_slideshow_settings = get_option('feature_slideshow_settings');

$feature_slideshow_themes_dir = $feature_slideshow_dir . 'themes/';
$feature_slideshow_theme_path = $feature_slideshow_themes_dir . $feature_slideshow_settings['theme'] . '/style.php';

$feature_slideshow_width = $feature_slideshow_settings['width'] . 'px';
$feature_slideshow_height = ($feature_slideshow_settings['numberposts'] * 81) - 1 . 'px';
$feature_slideshow_image_width = $feature_slideshow_settings['width'] - 287 . 'px';
$feature_slideshow_p_width = $feature_slideshow_settings['width'] - 450 . 'px';
$feature_slideshow_p_size = $feature_slideshow_settings['p_size'] . 'px';

// Add post thumbnail support
if( !current_theme_supports( 'post-thumbnails' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( $feature_slideshow_settings['width'] - 287, ($feature_slideshow_settings['numberposts'] * 81) - 1, true );
}

// Add jQury scripts
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
	wp_enqueue_script( 'jquery' );	

// Add header scripts
if( !is_admin() ) {
	add_action( 'wp_head', 'feature_slideshow_add_header' );
}

// Register hooks for activation and deactivation
register_activation_hook( __FILE__,'feature_slideshow_install' );
register_deactivation_hook( __FILE__,'feature_slideshow_remove' );

// Add shortcode
add_shortcode( 'feature-slideshow', 'feature_slideshow_init' );

// Add admin menu
function feature_slideshow_admin() {
	include('feature_slideshow_admin.php'); // Fetch template for admin panel
}

function feature_slideshow_admin_actions() {
	add_options_page( 'Feature Slideshow Settings', 'Feature Slideshow', 'manage_options', 'administrator', 'feature_slideshow_admin' );
}

add_action( 'admin_menu', 'feature_slideshow_admin_actions' );

// Add options to database
function feature_slideshow_install() {
	
	$feature_slideshow_settings = array(
			'width'					=>		'600',
			'numberposts'			=>		'4',
			'orderby'				=>		'',
			'post_parent'			=>		'',
			'post_type'				=>		'post',
			'category'				=>		'',
			'tag'					=>		'',
			'theme'					=>		'default_dark',
			'p_size'				=>		'18',
			'transition_interval'	=>		'5000'
			
	);
	
	add_option( 'feature_slideshow_settings', $feature_slideshow_settings );
}

// Clean up on removal
function feature_slideshow_remove() {
	delete_option('feature_slideshow_settings');
}

function feature_slideshow_add_header() {
	
		GLOBAL $feature_slideshow_theme_path;
		GLOBAL $feature_slideshow_dir;
		GLOBAL $feature_slideshow_width;
		GLOBAL $feature_slideshow_height;
		GLOBAL $feature_slideshow_image_width;
		GLOBAL $feature_slideshow_p_width;
		GLOBAL $feature_slideshow_p_size;
		GLOBAL $feature_slideshow_settings;
	
		echo '	<link rel="stylesheet" href="' . $feature_slideshow_theme_path . '?width=' . $feature_slideshow_width . '&height=' . $feature_slideshow_height . '&imagewidth=' . $feature_slideshow_image_width . '&pwidth=' . $feature_slideshow_p_width . '&psize=' . $feature_slideshow_p_size . '" type="text/css" media="all" />
				<script type="text/javascript" src="' . $feature_slideshow_dir . 'jquery.featureList-1.0.0.js"></script>';
		
		echo '
			<script type="text/javascript">
			$(document).ready(function() {
				
				$.featureList(
					$("#tabs li a"),
					$("#output li"), {
						start_item : 0,
						transition_interval : ' . $feature_slideshow_settings['transition_interval'] . '000,
						pause_on_hover : true
					}
				);
			});
			</script>
		';
}

// Initialize the plugin
function feature_slideshow_init() {
	
	// Function to get a short, custom excerpt
	function feature_slideshow_excerpt($limit) {
		
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		} else {
			$excerpt = implode(" ",$excerpt);
		} 
			
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
		
	}
	
	// Fetch settings
	global $feature_slideshow_settings;
	global $feature_slideshow_dir;
	
	
	
	$numerposts 	= 	$feature_slideshow_settings['numberpost'];
	$orderby 		= 	$feature_slideshow_settings['orderby'];
	$post_parent 	= 	$feature_slideshow_settings['post_parent'];
	$post_type 		= 	$feature_slideshow_settings['post_type'];
	$category 		= 	$feature_slideshow_settings['category'];
	$tag 			= 	$feature_slideshow_settings['tag'];	
	
	include('feature_slideshow_body.php');
	
	return $return;
}

?>