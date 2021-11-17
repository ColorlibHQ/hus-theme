<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Hus
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	$footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'hus_footer_logo_109x36' )[0] : '';
	$footer_text 	    = hus_opt( 'hus_footer_text' ) == '' ? 'Heaven fruitful doesn\'t over lesser days appear creeping seasons so behold bearing days open' : hus_opt( 'hus_footer_text' );
	$site_url 	    	= home_url('/');
	?>
	<div class="col-xl-3 col-md-6 col-lg-3">
		<div class="footer_widget">
			<h3 class="footer_title">
				About Us
			</h3>
			
			<?php
				if ( $footer_text ) {
					echo '<p>'.wp_kses_post(nl2br( $footer_text )).'</p>';
				}
				echo '<div class="footer_logo">';
					if ( $footer_logo_img ) {
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
					} else {
						?>
						<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url( HUS_DIR_IMGS_URI . 'footer_logo.png' )?>" alt="footer logo"></a>
						<?php
					}
				echo '</div>';
			?>
		</div>
	</div>
	<?php
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}