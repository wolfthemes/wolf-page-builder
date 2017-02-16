<?php
/**
 * Raw HTML shortcode
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_raw_html' ) ) {
	/**
	 * Raw HTML
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_raw_html( $atts ) {
		extract( shortcode_atts(  array(
			'html' => '',
		), $atts ) );

		return wpb_decode_textarea_html( $html );
	}
	add_shortcode( 'wpb_raw_html', 'wpb_shortcode_raw_html' );
}