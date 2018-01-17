<?php
/*
Plugin Name: Storefront Infinite Scroll
Plugin URI: https://github.com/YoursLtd/storefront-infinite-scroll
Author: JointByte - Anthony Iacono
Author URI: http://yoursltd.com
Version: 1.0
Text Domain: storefront-infinite-scroll
*/

add_action('after_setup_theme', 'storefront_infinite_scroll_after_theme_setup', 15);

function storefront_infinite_scroll_after_theme_setup() {
	global $_wp_theme_features;
	$_wp_theme_features['infinite-scroll'][0]['type'] = 'scroll';
	$_wp_theme_features['infinite-scroll'][0]['footer_widgets'] = false;
}