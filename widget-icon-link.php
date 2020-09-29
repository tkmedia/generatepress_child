<?php
$wil_sid = get_field('wil_sid',$acfw);
$wil_ico = get_field('wil_ico',$acfw);
$wil_icoc = get_field('wil_icoc',$acfw);
$wil_icoim = get_field('wil_icoim',$acfw);
$wil_txt = get_field('wil_txt',$acfw);
$wil_lty = get_field('wil_lty',$acfw);
$wil_fo = get_field('wil_fo',$acfw);
$wil_pag = get_field('wil_pag',$acfw);
$wil_url = get_field('wil_url',$acfw);
$wil_txtc = get_field('wil_txtc',$acfw);
$wil_fosz = get_field('wil_fosz',$acfw);
?>
<div class="icon_link_container side_<?php echo $wil_sid; ?>">
	<div class="icon_link_item" style="color:<?php echo $wil_icoc; ?>;">
		<?php if ($wil_lty == 'free-link') { ?>
		<a href="<?php echo $wil_url; ?>" target="_blank" class="">
		<?php } elseif ($wil_lty == 'popup-form') { ?>
		<a data-fancybox data-src="#popop-form-tble<?php echo $tbe_col; ?>" href="javascript:;">
		<?php } elseif ($hc_tbicty == 'page') { ?>
		<a href="<?php echo $wil_pag; ?>" class="">
		<?php } elseif ($hc_tbicty == 'popup-video') { ?>
		<a data-fancybox href="<?php echo $wil_url;?>">
		<?php } ?>
			<?php if ($wil_ico) { ?>
			<span class="icon_link_icon" style="color:<?php echo $wil_icoc; ?>;font-size:<?php echo $wil_fosz; ?>px;"><?php echo $wil_ico; ?></span>
			<?php } elseif ($wil_icoim) { ?>
			<?php echo wp_get_attachment_image( $wil_icoim, 'full' );?>
			<?php } ?>
			<?php if ($wil_txt) { ?><span class="icon_link_text" style="color:<?php echo $wil_txtc; ?>;font-size:<?php echo $wil_fosz; ?>px;"><?php echo $wil_txt; ?></span><?php } ?>
		</a>
	</div>
</div>
<?php if( $wil_lty == 'popup-form' ): ?>
<?php 
$popup_contact_title = get_option( 'options_default_flex_form_title' );
$popup_contact_subtext = get_option( 'options_default_flex_form_subtitle' );
?>
<div style="display: none;max-width: 700px;" id="popop-form-tble<?php echo $tble_col; ?>" class="button-popop-form">
	<div class="button-popop-form-wrap">
		<div class="button-popop-form-row">
			<div class="button-popop-form-col form-image col-xs-12">
				<?php if( $popup_contact_title ) { ?>
				<div class="contact-title">
					<div class="popup_contact_title"><?php echo $popup_contact_title; ?></div>
				</div>
				<?php } ?>
				<?php if( $popup_contact_subtext ) { ?>
				<div class="contact-title">
					<div class="popup_contact_subtext"><?php echo $popup_contact_subtext; ?></div>
				</div>
				<?php } ?>
				<div class="contact-form-page">
					<div class="full_form_id">
						<div class="full_form_id_wrap">
							<?php echo do_shortcode( '[contact-form-7 id="'.$wil_fo.'" ]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>