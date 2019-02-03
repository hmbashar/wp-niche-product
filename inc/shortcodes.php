<?php 

function wp_niche_product_shortcode($wp_niche){ 
	ob_start();
	extract(shortcode_atts(array( 
	'link'			=> '',
    'cb_name'		=> '',
    'cb_title'		=>'',
    'img_url'		=> '',
    'link_content'	=>'',
    'star_icon'		=>'',
	), $wp_niche));
?>

               <!--singal section one -->
                    <div class="col-xl-4 col-md-6 col-12 p-0">
                        <div class="singal_cb_table_column_package"> 
                            <div class="cb_table_column_package"> 
                                <div class="cb_table_column_singal_package"> </div>
                                <div class="cb_table_column_package_name"> 
                                    <h3><?php echo esc_html($cb_name); ?></h3>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
	                        <div class="cb_table_column_product"> 
	                            <div class="cb_table_column_product_img"> 
	                                <img src="<?php echo esc_url($img_url)?>" alt="">
	                            </div>
	                            <div class="cb_table_column_product_title"> 
	                                <h2><a href="<?php echo esc_url($link);?>"><?php echo esc_html($cb_title); ?></a></h2>
	                            </div>
	                            <div class="cb_table_column_product_review_icon">						
									<?php for ($star_icon = 0; $star_icon <= 4; $star_icon++) {
										  echo '<i class="fas fa-star"></i>';
									}  ?>
	                             </div>
	                        </div>
	                        <div class="cb_table_column_product_check_price"> 
	                            <div class="cb_table_column_product_button"> 
	                                <div class="cb_table_column_product_button_name"> 
	                                    <h4><a href="<?php echo esc_url($link);?>"><?php echo esc_html($link_content);?><i class="fas fa-arrow-right"></i></a></h4>
	                                </div>
	                            </div>
	                        </div>
                    </div> 
                 </div> <!--singal section one -->

	<?php
	return ob_get_clean();
	}
add_shortcode( 'wp_niche_product', 'wp_niche_product_shortcode');
		
