<?php 
// Don't call the file directly
if ( !defined( 'ABSPATH' ) ) exit;

function wp_niche_product_shortcode($wp_niche){ 
	ob_start();
	extract(shortcode_atts(array( 
	'link'			=> '',
    'wnp_name'		=> '',
    'wnp_title'		=> '',
    'img_url'		=> '',
    'link_text'		=> '',
    'rating'		=> 5,
    'icon'			=> 'fas fa-star',
    'column'		=> 4,
    'link_bg_color'	=> '',
	), $wp_niche));
?>
               <!--singal section one -->
                    <div class="col-xl-<?php echo esc_attr($column);?> col-md-6 col-12 m-0 p-0">
                        <div class="singal_cb_table_column_package"> 
                            <div class="cb_table_column_package"> 
                                <div class="cb_table_column_singal_package"> </div>
                                <div class="cb_table_column_package_name"> 
                                	<?php if(!empty($wnp_name)) : ?>
                                    	<h3><?php echo esc_html($wnp_name); ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($icon)) : ?>
                                    	<i class="<?php echo esc_attr($icon); ?>"></i>
                                    <?php endif; ?>
                                </div>
                            </div>
	                        <div class="cb_table_column_product"> 
	                            <div class="cb_table_column_product_img"> 
	                            	<?php if(!empty($img_url)) : ?>
	                                	<img src="<?php echo esc_url($img_url)?>" alt="">
	                                <?php endif; ?>
	                            </div>
	                            <div class="cb_table_column_product_title"> 
	                            	<?php if(!empty($wnp_title)) : ?>
	                                	<h2><a href="<?php echo esc_url($link);?>"><?php echo esc_html($wnp_title); ?></a></h2>
	                                <?php endif; ?>
	                            </div>
	                            <div class="cb_table_column_product_review_icon">						
									<?php for ($feed_star = 0; $feed_star < $rating; $feed_star++) : ?>
										  <i class="fas fa-star"></i>
									<?php endfor;  ?>
	                             </div>
	                        </div>
	                        <div class="cb_table_column_product_check_price"> 
	                            <div class="cb_table_column_product_button" <?php if(!empty($link_bg_color)) : ?> style="background-color:<?php echo esc_attr($link_bg_color); ?>" <?php endif; ?>> 
	                                <div class="cb_table_column_product_button_name"> 
	                                	<?php if(!empty($link_text)) : ?>
	                                    	<h4><a href="<?php echo esc_url($link);?>"><?php echo esc_html($link_text);?> <i class="fas fa-arrow-right"></i></a></h4>
	                                    <?php endif; ?>
	                                </div>
	                            </div>
	                        </div>
                    </div> 
                 </div> <!--singal section one -->
	<?php
	return ob_get_clean();
	}
add_shortcode( 'wp_niche_product', 'wp_niche_product_shortcode');	

function wp_niche_products_row($atts, $content = null){ 
	ob_start();
?>
		<section class="cb_table_column_area clearfix"> 
		    <div class="cb_table_column">		    	        
	            <div class="cb_table_area">
	               <div class="row">
	        			<?php if(!empty($content)) {
	        					echo do_shortcode( $content );
	        				}
	        			?>
	                </div>               
	            </div> 
		    </div>
		</section>
	<?php
	return ob_get_clean();
	}
add_shortcode( 'wp_niche_row', 'wp_niche_products_row');
		
function wp_niche_single_product($wp_nsp){ 
	ob_start();
	extract(shortcode_atts(array( 
	'link'						=> '#',
	'link_text'					=> __('See More Images','wp_niche'),
	'niche_product_single_title'=>__('This is your single niche product images'),
   	'img_url'					=> '',
   	'img_hover_url'				=> '',
	), $wp_nsp));
?>		
		<section class="niche_product_img_hover">
			<div class="niche_product_single_title"> 
				<div class="single_title_product">
					<?php if(!empty($niche_product_single_title)) : ?>
						<h2><?php echo esc_html($niche_product_single_title); ?></h2>
					<?php else : ?>
						<h2><?php echo esc_html($niche_product_single_title); ?></h2>
					<?php endif; ?>
				</div>
			</div> 
			<div class="niche_product-img"> 
				<div class="singal_niche_hover_product"> 
					<?php  if (!empty($img_url)) :    ?>
						<img src="<?php echo esc_url($img_url)?>" alt="">
					<?php endif; ?>
				</div>
				<div class="niche_product_logo_show"> 
					<div class="niche_product_hover"> 
					<?php  if (!empty($img_hover_url)) :    ?>
						<img src="<?php echo esc_url($img_hover_url)?>" alt="">
					<?php else :?>
						<img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'assets/images/Amazon-Logo.png'; ?>" alt="">
					<?php endif; ?>
					<?php if(!empty($link_text)) : ?>
						<a herf="<?php echo esc_url($link); ?>" class="niche_single_product_more"><?php echo esc_html($link_text); ?></a>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
              
	<?php
	return ob_get_clean();
	}
add_shortcode( 'wpn_single_product', 'wp_niche_single_product');


