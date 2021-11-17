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

	$hus_reservation_title     = !empty( hus_opt( 'hus_reservation_title' ) ) ? hus_opt( 'hus_reservation_title' ) : '';
	$hus_reservation_sub_title = !empty( hus_opt( 'hus_reservation_sub_title' ) ) ? hus_opt( 'hus_reservation_sub_title' ) : '';
	$hus_reservation_btn_text  = !empty( hus_opt( 'hus_reservation_btn_text' ) ) ? hus_opt( 'hus_reservation_btn_text' ) : '';
	$hus_reservation_btn_url	  = !empty( hus_opt( 'hus_reservation_btn_url' ) ) ? hus_opt( 'hus_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $hus_reservation_title )?></h3>
			<p><?php echo esc_html( $hus_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $hus_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $hus_reservation_btn_text )?></a>
		</div>
	</div>