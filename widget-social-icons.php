<?php
$wsi = get_field('wsi',$acfw);
if( have_rows('wsi',$acfw) ): ?>
<div class="social_icons_container">
	<div class="social_icons_row row-flex">
    <?php while( have_rows('wsi',$acfw) ): the_row(); 
        $ico = get_sub_field('ico');
        $icoc = get_sub_field('icoc');
        $icoim = get_sub_field('icoim');
        $fosz = get_sub_field('fosz');
        $url = get_sub_field('url');
        ?>
        <div class="social_icons_col col-xs">
	        <?php if ($url) { ?>
	        <a href="<?php echo $url; ?>" target="_blank">
		    <?php } ?>    
				<?php if ($ico) { ?>
				<span class="social_icon" style="color:<?php echo $icoc; ?>;font-size:<?php echo $fosz; ?>px;"><?php echo $ico; ?></span>
				<?php } elseif ($icoim) { ?>
				<?php echo wp_get_attachment_image( $wil_icoim, 'full' );?>
				<?php } ?>
		    <?php if ($url) { ?></a><?php } ?>    
        </div>
    <?php endwhile; ?>
	</div>
</div>
<?php endif; ?>