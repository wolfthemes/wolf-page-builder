<?php
/**
 * Anchor shortcode
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_anchor' ) ) {
	/**
	 * Anchor shortcode
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_anchor( $atts ) {

		extract( shortcode_atts( array(
			'id' => '',
		), $atts ) );

		return '<div id="' . esc_attr( $id ) . '"></div>';
	}
	add_shortcode( 'wpb_anchor', 'wpb_shortcode_anchor' );
}