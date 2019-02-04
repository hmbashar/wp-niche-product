<?php
/**
 * @package WP Niche Product Recommended
 */
/*
Plugin Name: WP Niche Products
Plugin URI: http://www.codingbank.com/plugins/wp-niche-products
Description: This product for show recommended product to compare for your niche site. You can recommend any product in your niche site article using this plugin
Version: 1.0
Author: Md Abul Bashar
Author URI: https://www.codingbank.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
*/

define( 'WP_NICHE_PRODUCT_VERSION', '1.0' );
define( 'WP_NICHE_PRODUCT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once( WP_NICHE_PRODUCT_PLUGIN_DIR . 'inc/shortcodes.php' );

function wp_niche_product_enqueues() {

    wp_enqueue_style( 'font-awesome-5', '//use.fontawesome.com/releases/v5.7.1/css/all.css', NULL, WP_NICHE_PRODUCT_VERSION);
    wp_enqueue_style( 'bootstrap-grid', plugins_url('/assets/css/bootstrap-grid.min.css', __FILE__), NULL, WP_NICHE_PRODUCT_VERSION);
	wp_enqueue_style( 'wp-niche-style', plugins_url('/assets/css/wp-niche-style.css', __FILE__), NULL, WP_NICHE_PRODUCT_VERSION);
	wp_enqueue_style( 'wp-niche-responsive-style', plugins_url('/assets/css/responsive.css', __FILE__), NULL, WP_NICHE_PRODUCT_VERSION);
}

add_action('wp_enqueue_scripts', 'wp_niche_product_enqueues');

?>