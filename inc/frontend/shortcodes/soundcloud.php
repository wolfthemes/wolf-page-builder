<?php
/**
 * Soundcloud shortcode
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_soundcloud' ) ) {
	/**
	 * Soundcloud shortcode
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_soundcloud( $atts ) {

		extract( shortcode_atts( array(
			'url' => '',
			'inline_style' => '',
			'extra_class' => '',
		), $atts ) );

		$url = esc_url( $url );
		$class = $extra_class;
		$inline_style = sanitize_text_field( $inline_style );

		$output = $style = '';
		$embed = wp_oembed_get( $url );

		$class .= ' wpb-soundcloud-container';

		$output .= '<div  class="' . wpb_sanitize_html_classes( $class ) . '" style="' . wpb_esc_style_attr( $style ) . '">' . $embed . '</div>';

		return $output;
	}
	add_shortcode( 'wpb_soundcloud', 'wpb_shortcode_soundcloud' );
}