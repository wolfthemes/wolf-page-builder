<?php
/**
 * Image sizes
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Globals
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $wpb_image_sizes, $wpb_image_placeholders;

$wpb_image_sizes = array(
	'wpb-thumb' => esc_html__( 'Landscape', '%TEXTDOMAIN%' ),
	'wpb-2x2' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
	'wpb-portrait' => esc_html__( 'Portrait', '%TEXTDOMAIN%' ),
	'wpb-XL' => esc_html__( 'Extra large', '%TEXTDOMAIN%' ),
	'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
	'medium' => esc_html__( 'Medium', '%TEXTDOMAIN%' ),
	'thumbnail' => esc_html__( 'Thumbnail', '%TEXTDOMAIN%' ),
	'full' => esc_html__( 'Full', '%TEXTDOMAIN%' ),
);

$wpb_image_placeholders = array(
	'wpb-slide'=> 'https://placeimg.com/1200/700/any',
	'wpb-slide-tablet'=> 'https://placeimg.com/625/450/any',
	'wpb-slide-laptop'=> 'https://placeimg.com/676/424/any',
	'wpb-slide-desktop'=> 'https://placeimg.com/922/506/any',
	'wpb-slide-mobile'=> 'https://placeimg.com/277/494/any',
	'wpb-thumb' => 'https://placeimg.com/640/360/any',
	'wpb-2x2' => 'https://placeimg.com/960/960/any',
	'wpb-1x2' => 'https://placeimg.com/480/960/any',
	'wpb-2x1' => 'https://placeimg.com/960/480/any',
	'wpb-XL' => 'https://placeimg.com/2000/1500/any',
	'large' => 'https://placeimg.com/1024/1024/any',
	'medium' => 'https://placeimg.com/200/300/any',
	'thumbnail' => 'https://placehold.it/150x150?text=' . esc_html__( 'DEMO IMAGE', '%TEXTDOMAIN%' ),
	'full' => 'https://placeimg.com/1600/1200/any',
);