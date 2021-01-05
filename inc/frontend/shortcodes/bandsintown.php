<?php
/**
 * Bandsintown shortcode
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_bandsintown_events' ) ) {
	/**
	 * Bandsintown shortcode
	 *
	 * @param array $atts
	 * @return string
	 */
	function wpb_shortcode_bandsintown_events( $atts ) {

		extract( shortcode_atts( array(
			'artist' => '',
			'local_dates' => 'true',
			'past_dates' => 'true',
			'display_limit' => '',
			'inline_style' => '',
			'extra_class' => '',
		), $atts ) );

		$output = '';
		$artist = sanitize_text_field( $artist );
		$artist_slug = sanitize_title( $artist );

		//wp_enqueue_script( 'bandsintown', 'https://widget.bandsintown.com/main.min.js', array(), false, true );

		if ( $artist ) {

			$accent_color = ( function_exists( 'wolf_get_theme_mod' ) ) ? wolf_get_theme_mod( 'accent_color', '#0073AA' ) : '#0073AA';

			$options = array(
				'artist' => $artist,
				'text_color' => '',
				'background_color' => '',
				'display_limit' => $display_limit,
				'link_text_color' => '#ffffff',
				'link_color' => $accent_color,
				'local_dates' => $local_dates,
				'past_dates' => $past_dates,
			);

			//$output .= '<script type="text/javascript" src="https://widget.bandsintown.com/main.min.js"></script>';
			$output .= '<a class="bit-widget-initializer"'
			. 'data-text-color="' . esc_attr( $options['text_color'] ) . '"'
			. 'data-background-color="' . esc_attr( $options['background_color'] ) . '"'
			. 'data-display-limit="' . esc_attr( $options['display_limit'] ) . '"'
			. 'data-link-text-color="' . esc_attr( $options['link_text_color' ] ) . '"'
			. 'data-popup-background-color="#FFFFFF"'
			. 'data-artist-name="' . esc_attr( $options['artist'] ) . '"'
			. 'data-link-color="' . esc_attr( $options['link_color'] ) . '"'
			. 'data-display-local-dates="' . esc_attr( $options['local_dates'] ) . '"'
			. 'data-display-past-dates="' . esc_attr( $options['past_dates'] ) . '"'
			. 'data-auto-style="false"'
			;
			$output .= '></a>';

		} else {
			if ( is_user_logged_in() ) {
				$output  = esc_html__( 'Please set an artist.', '%TEXTDOMAIN%' );
			} else {
				$output  = esc_html__( 'No event scheduled.', '%TEXTDOMAIN%' );
			}
		}
		
		return $output;
	}
	add_shortcode( 'wpb_bandsintown_events', 'wpb_shortcode_bandsintown_events' );
}