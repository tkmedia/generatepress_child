<?php 
global $product;
if( is_product_category() ) {
	$queried_object = get_queried_object();
	$taxonomy = $queried_object->taxonomy;
	$term_id = $queried_object->term_id;

$f_query = new WP_Query(array(
	'post_type'      	=> 'product',
	'post_parent'       => 'product_cat_' .$term_id,
	'order'				=> 'DESC',
	//'orderby'			=> 'menu_order',
	'posts_per_page'	=> -1
));
} else {
$f_query = new WP_Query(array(
	'post_type'      	=> 'product',
	'order'				=> 'DESC',
	'posts_per_page'	=> -1
));

}

if($f_query->have_posts()): ?>

	<div class="cat-model-filter" id="js-filters">
		<div class="cat-model-grid">
			
			<div class="product_filter_wraper">
				<div class="filter_title_wrap filter_mobile_title">
					<div class="filter_title"><?php _e('Filters:', 'generatepress_child'); ?></div>
				</div>
				<form class="controls" id="Filters">	
					<div class="product_filter_col_row">
						
						<div class="filter_title_wrap filter_desktop_title">
							<div class="filter_title"><?php _e('Filters:', 'generatepress_child'); ?></div>
						</div>
						<?php 
						$colors = array(); 
						while( $f_query->have_posts() ) {
							
						$f_query->the_post();
							$product_visual_color = get_field( 'pro_vcp', $product->ID);
							if ($product_visual_color) {
								foreach($product_visual_color as $color_v) {
									$colors[] = $color_v;
									//echo $color_v['value'].' '; 
								}
							}
							
						}
						wp_reset_postdata();
						?>
						
						<div class="checkbox filter product_color cont_select_center">
							<div class="filter_wrap">
								<fieldset data-filter-group>
									<div class="filter_color_wrap">
										<label class="screen-reader-text" for="Color"><?php _e('Color', 'generatepress_child'); ?></label>
										<div class="filter_content_tab_ico filter_content_tab_ico_color">
											<svg version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m46 63c0 4.3906 1.4883 8.4414 4 11.648-3.4688 4.4727-8.8984 7.3516-15 7.3516-10.488 0-19-8.5117-19-19 0-9.6094 7.1484-17.559 16.422-18.82 2.5117 6.1719 8.1797 10.719 15 11.641-0.92188 2.2109-1.4219 4.6406-1.4219 7.1797zm1.4219-7.1797c0.83984 0.12109 1.6992 0.17969 2.5781 0.17969s1.7383-0.058594 2.5781-0.17969c-0.64844-1.6211-1.5195-3.1211-2.5781-4.4688-1.0586 1.3477-1.9297 2.8477-2.5781 4.4688zm20.156-11.641c-2.5117 6.1719-8.1797 10.719-15 11.641 0.92188 2.2109 1.4219 4.6406 1.4219 7.1797 0 4.3906-1.4883 8.4414-4 11.648 3.4688 4.4727 8.8984 7.3516 15 7.3516 10.488 0 19-8.5117 19-19 0-9.6094-7.1484-17.559-16.422-18.82zm-17.578 7.1719c3.4688-4.4727 8.8984-7.3516 15-7.3516 0.87891 0 1.7383 0.058594 2.5781 0.17969 0.92188-2.2109 1.4219-4.6406 1.4219-7.1797 0-10.488-8.5117-19-19-19s-19 8.5117-19 19c0 2.5391 0.5 4.9688 1.4219 7.1797 0.83984-0.12109 1.6992-0.17969 2.5781-0.17969 6.1016 0 11.531 2.8789 15 7.3516z"/></svg>
										</div>
										<select id="FilterColor" name="Color" title="Color" class="cs-select cs-skin-border filter control filterColor fancySelect">
											<option value="all"><?php _e('Choose Color', 'generatepress_child'); ?></option>
											<?php
											$colors = array_unique( $colors, SORT_REGULAR );
											foreach ( $colors as $color_v ) {
											//$color = preg_replace('/#.*/', '', $color_v['value']);
											$color = explode('#', $color_v['value'])[1];
											 ?>
												<option value="<?php echo $color; ?>" ><span><?php echo $color_v['label']; ?></span></option>
											<?php } ?>	
										</select>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="btn_select filter pro_type_btn">
							<div class="filter_wrap">
								<fieldset data-filter-group>
									<div class="filter_buttons fliter_row">
								        <button class="filter-btn" data-filter=".boys">
									        <div class="filter_content_tab">
												<div class="filter_content_tab_ico"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 171.1 171.1" style="enable-background:new 0 0 171.1 171.1;" xml:space="preserve">
		
	<g><path class="st0" d="M52.9,98.4c-5.9,0-10.6,4.8-10.6,10.6c0,5.9,4.8,10.6,10.6,10.6s10.6-4.8,10.6-10.6
			C63.5,103.1,58.7,98.4,52.9,98.4z"/><ellipse transform="matrix(0.1219 -0.9925 0.9925 0.1219 -4.3432 213.0363)" class="st0" cx="118.2" cy="109" rx="10.6" ry="10.6"/><path class="st0" d="M85.6,0C38.3,0,0,38.3,0,85.6c0,47.3,38.3,85.6,85.6,85.6c47.3,0,85.6-38.3,85.6-85.6
			C171.1,38.3,132.8,0,85.6,0z M85.6,156.7c-39.3,0-71.2-31.9-71.2-71.2c0-12.8,3.4-24.8,9.3-35.2c4,14.8,15,37.5,44.5,38.9
			c0,0-16.4-28.5-16.4-35.1c0,0,20.8,32.7,59.2,25.3L95.1,51.2c0,0,21,33,60.9,24.8c0.4,3.1,0.7,6.3,0.7,9.6
			C156.7,124.9,124.9,156.7,85.6,156.7z"/></g></svg></div>
												<div class="filter_content_tab_title"><?php _e('Boys', 'generatepress_child'); ?></div>
									        </div>
								        </button>
								        <button class="filter-btn" data-filter=".girls">
											<div class="filter_content_tab">
												<div class="filter_content_tab_ico"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 166.6 180" style="enable-background:new 0 0 166.6 180;" xml:space="preserve"><g><path class="st0" d="M166.4,125.7l-0.1-35.1c0.2-2.4,0.3-4.9,0.3-7.3c0-2.7-0.1-5.4-0.4-8.1l0-0.1l0,0C162.1,33,126.5,0,83.3,0
			C40,0,4.5,33,0.4,75.1l0,0l0,0.1C0.1,77.9,0,80.6,0,83.3c0,2.5,0.1,4.9,0.3,7.3l-0.1,35.1L0,180l40-14.1l13.6-4.8
			c9.2,3.5,19.2,5.5,29.7,5.5c10.5,0,20.5-2,29.7-5.5l13.6,4.8l40,14.1L166.4,125.7z M83.3,152.5c-38.2,0-69.2-31-69.2-69.2
			c0-2,0.1-3.9,0.3-5.8H47l13.3-34.3v34.3h42l4.3-34.5l5.7,34.5h40c0.2,1.9,0.3,3.8,0.3,5.8C152.5,121.5,121.5,152.5,83.3,152.5z"/><ellipse transform="matrix(0.2298 -0.9732 0.9732 0.2298 -63.5943 131.82)" class="st0" cx="51.5" cy="106.1" rx="10.3" ry="10.3"/>
		<path class="st0" d="M115.1,116.4c5.7,0,10.3-4.6,10.3-10.3c0-5.7-4.6-10.3-10.3-10.3c-5.7,0-10.3,4.6-10.3,10.3
			C104.8,111.8,109.4,116.4,115.1,116.4z"/></g></svg></div>
												<div class="filter_content_tab_title"><?php _e('Girls', 'generatepress_child'); ?></div>
											</div>
								        
								        </button>
								        <button class="filter-btn" data-filter=".new">
											<div class="filter_content_tab">
												<div class="filter_content_tab_ico"><svg version="1.1" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><g><path d="m88.453 10c-0.38672 0.011719-0.75781 0.17578-1.0312 0.45312l-22.141 22.145c-0.28906 0.27734-0.45312 0.66406-0.46094 1.0664-0.003906 0.40234 0.15625 0.79297 0.44141 1.0781 0.28516 0.28516 0.67188 0.44141 1.0742 0.4375 0.40625-0.003907 0.78906-0.17188 1.0703-0.46094l22.141-22.141c0.44531-0.43359 0.57812-1.0938 0.33594-1.6641-0.24219-0.57031-0.80859-0.93359-1.4297-0.91406z"/><path d="m79.688 20.309c-0.16016-0.16016-0.33594-0.30469-0.50391-0.45703l-8.9336 8.9336c0.17578 0.14062 0.34766 0.28906 0.50781 0.45312 0.16406 0.16406 0.3125 0.33594 0.45313 0.51172l8.9336-8.9336c-0.14844-0.16797-0.29297-0.34375-0.45703-0.50781zm-2.7305-2.0781c-1.9648-1.1328-4.2422-1.7891-6.6758-1.7812l-11.809 0.042969c-3.8047 0.011718-7.2422 1.6289-9.668 4.1875l-34.398 34.398c-5.8477 5.8477-5.8828 15.301-0.066406 21.117l9.4648 9.4648c5.8164 5.8164 15.27 5.7773 21.117-0.070312l34.352-34.348c2.5898-2.4297 4.2188-5.8867 4.2344-9.7148l0.042969-11.809c0.007813-2.4336-0.64844-4.7109-1.7812-6.6758l-9.3359 9.3359c0.39062 1.9727-0.17578 4.1094-1.6953 5.6289-2.4102 2.4102-6.3633 2.4297-8.7695 0.023438s-2.3867-6.3555 0.023438-8.7695c1.5234-1.5234 3.6562-2.0898 5.6289-1.6992zm-8.3164 13.129c-0.16406-0.16406-0.34766-0.30469-0.53516-0.42578l-2.2422 2.2422c-0.003906 0.003907-0.007812 0.007813-0.011719 0.011719-0.25 0.24219-0.25 0.35547-0.24609 0.49219 0.007812 0.13672 0.085937 0.32812 0.23438 0.47656 0.14844 0.14844 0.33984 0.23047 0.47656 0.23828 0.13672 0.007813 0.25 0.003907 0.49219-0.24609 0.003906-0.003907 0.007812-0.007813 0.011718-0.011719l2.2422-2.2422c-0.12109-0.1875-0.26172-0.37109-0.42969-0.53516z" fill-rule="evenodd"/></g></svg></div>
												<div class="filter_content_tab_title"><?php _e('On Sale', 'generatepress_child'); ?></div>
											</div>
								        </button>
									</div>			    
								</fieldset>
							</div>
						</div>
						<div class="product_filter_col_row row-Reset">
							<div class="filter proejcts_tag_btn">
								<button id="Reset" data-filter="all" type="reset" class="control control-text"><?php _e('Reset', 'generatepress_child'); ?></button>
							</div>
						</div>
						
					</div>
					
				</form>
					
			</div>
			
		</div>
	
	</div>

<?php endif; wp_reset_query(); ?>

<script>
jQuery(function($) {	
		
    //var container = document.querySelector('[data-ref="cat-container"]');
    var containerEl = document.querySelector('#category_product_container');
    var FilterColor = $('#FilterColor');

    var mixer = mixitup(containerEl, {
        controls: {
	        toggleDefault: 'all',
            live: true,
            enable: true,
        },
        multifilter: {
            enable: true,
            logicWithinGroup: 'or'
        },
        animation: {
            effects: 'fade translateZ(-20px)'
        }        
    });

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
		new SelectFx(el);
	} );

	$(".cs-select").on("change",function(){
	    item = $(this).val();   
	    containerEl.mixitup('filter',item);
	});

    
});

</script>
