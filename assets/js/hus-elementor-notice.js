/**
 * Notice for Elementor
 *
 * @package Hus
 */

/* global husElementorNotice */

jQuery(document).ready(
	function () {

		var style = '<style>.hus-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.hus-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.hus-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.hus-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.hus-elementor-notice-buttons{border-top:1px solid #e6e9ec}.hus-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.hus-elementor-notice-buttons>a.hus-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.hus-elementor-notice-buttons>a.hus-disable-default-styles{color:#9b0a46}</style>';

		var dialog = style + '<div class="hus-disable-elementor-styling">' +
			'<div class="hus-elementor-notice-wrapper">' +
			'<div class="hus-elementor-notice-header">Hus supports default styling for Elementor widgets</div>' +
			'<div class="hus-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
			'<div class="hus-elementor-notice-buttons">' +
			'<a href="#" class="hus-do-nothing" data-reply="no">No</a>' +
			'<a href="#" class="hus-disable-default-styles" data-reply="yes">Yes</a>' +
			'</div>' +
			'</div>' +
			'</div>';

		jQuery('body').prepend(dialog);
		jQuery('.hus-elementor-notice-buttons > a').on(
			'click', function () {

				var reply = jQuery(this).data('reply');

				jQuery.ajax(
					{
						url: husElementorNotice.ajaxurl,
						data: {
							reply: reply,
							nonce: husElementorNotice.nonce,
							action: 'elementor_desiable_default_style'
						},
						type: 'post',
						success: function () {

							if (reply === 'yes') {
								parent.location.reload();
							} else {
								jQuery('.hus-disable-elementor-styling').fadeOut(500, function () { jQuery(this).remove(); });
							}
						}
					}
				);
			}
		);
	}
);
