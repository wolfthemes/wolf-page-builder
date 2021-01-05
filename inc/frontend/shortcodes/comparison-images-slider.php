<?php
/**
 * Comparison Images Slider shortcode
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_comparison_images_slider' ) ) {
	/**
	 * Image link
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_comparison_images_slider( $atts ) {
		
		extract( shortcode_atts( array(
			'before_image' => '',
			'after_image' => '',
			'image_size' => 'wpb-XL',
			'animation' => '',
			'animation_delay' => '',
			'inline_style' => '',
			'extra_class' => '',
		), $atts ) );

		wp_enqueue_script( 'cocoen' );
		wp_enqueue_script( 'wpb-cocoen' );

		if ( ! $before_image || ! $after_image ) {
			return;
		}

		$output = '';

		$before_image_src = wpb_get_url_from_attachment_id( absint( $before_image ), $image_size );
		$after_image_src = wpb_get_url_from_attachment_id( absint( $after_image ), $image_size );

		$output .= '<div class="wpb-cocoen cocoen">';
			$output .= '<img src="' . esc_url( $before_image_src ) . '" alt="">';
			$output .= '<img src="' . esc_url( $after_image_src ) . '" alt="">';
		$output .= '</div>';

		return $output;
	}
	add_shortcode( 'wpb_comparison_images_slider', 'wpb_shortcode_comparison_images_slider' );
}