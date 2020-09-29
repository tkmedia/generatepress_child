<?php 
global $product;
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

if($f_query->have_posts()): ?>


	<div class="cat-model-filter" id="js-filters">
		<div class="cat-model-grid">
			
			<div class="product_filter_wraper">
				<form class="controls" id="Filters">	
					<div class="product_filter_col_row">
						
						<div class="filter_title_wrap">
							<div class="filter_title"><?php _e('Filter by:', 'elektro_theme'); ?></div>
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
									<label class="screen-reader-text" for="Color">צבע</label>
									<select id="FilterColor" name="Color" title="Color" class="cs-select cs-skin-border filter control filterColor fancySelect">
										<option value="all"><?php _e('סננים:', 'elektro_theme'); ?></option>
										<?php
										$colors = array_unique( $colors, SORT_REGULAR );
										foreach ( $colors as $color_v ) {
										//$color = preg_replace('/#.*/', '', $color_v['value']);
										$color = explode('#', $color_v['value'])[1];
										 ?>
											<option value="<?php echo $color; ?>" ><span><?php echo $color_v['label']; ?></span></option>
										<?php } ?>	
									</select>
								</fieldset>
							</div>
						</div>
						<div class="btn_select filter pro_type_btn">
							<div class="filter_wrap">
								<fieldset>
									<div class="filter_buttons fliter_row">
								          <button class="filter-btn" data-filter=".boys">בנים</button>
								          <button class="filter-btn" data-filter=".girls">בנות</button>
								          <button class="filter-btn" data-filter=".new">חדשים</button>
									</div>			    
								</fieldset>
							</div>
						</div>
						<div class="product_filter_col_row row-Reset">
							<div class="filter proejcts_tag_btn">
								<button id="Reset" data-filter="all" type="reset" class="control control-text"><?php _e('Reset Filter', 'elektro_theme'); ?></button>
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
