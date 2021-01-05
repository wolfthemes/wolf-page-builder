<?php
/**
 * Facebook like button
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_tweet_this' ) ) {
	/**
	 * Tabs container shortcode
	 *
	 * @param array $atts
	 * @param array $content
	 * @return string
	 */
	function wpb_shortcode_tweet_this( $atts ) {

		extract( shortcode_atts( array(
			'type' => '',
			'anchor' => '',
			'inline_style' => '',
			'extra_class' => '',
		), $atts ) );

		$class = $extra_class;
		$class .= ' twitter-share-button';

		$output = '<a href="http://twitter.com/share" class="'
		. wpb_sanitize_html_classes( $class ) . '" data-count="'
		. $type . '">'
		. esc_html__( 'Tweet', '%TEXTDOMAIN%' ) . '</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';

		
		return $output;
	}
	add_shortcode( 'wpb_tweet_this', 'wpb_shortcode_tweet_this' );
}