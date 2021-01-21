<?php
/**
 * LayerSlider shortcode
 *
 * @author WolfThemes
 * @category Core
 * @package WolfPageBuilder/FrontEnd/Shortcodes
 * @version 3.2.8
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_layerslider' ) ) {
	/**
	 * LayerSlider shortcode
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_layerslider( $atts ) {

		extract( shortcode_atts( array(
		), $atts ) );

		$output = '';


		return $output;
	}
	add_shortcode( 'wpb_layerslider', 'wpb_shortcode_layerslider' );
}
