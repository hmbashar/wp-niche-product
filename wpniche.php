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

	wp_enqueue_style( 'wp-niche-style', WP_NICHE_PRODUCT_PLUGIN_DIR. 'assets/css/wp-niche-style.css', NULL, WP_NICHE_PRODUCT_VERSION);
	wp_enqueue_style( 'wp-niche-responsive-style', WP_NICHE_PRODUCT_PLUGIN_DIR. 'assets/css/responsive.css', NULL, WP_NICHE_PRODUCT_VERSION);
}

add_action('wp_enqueue_scripts', 'wp_niche_product_enqueues');

?>

<section class="cb_table_column_area clearfix"> 
    <div class="cb_table_column"> 
        <div class="container">
            <div class="cb_table_area">
               <div class="row m-0">
        		
                </div>               
            </div>  
        </div>
    </div>
</section>