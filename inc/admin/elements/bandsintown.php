<?php
/**
 * Bandsintown Plugin
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( function_exists( 'the_bandsintown_events' ) ) {
	wpb_add_element(
		array(
			'name' => 'Bandsintown',
			'description' => esc_html__( 'Display Your Bandsintown Event List', '%TEXTDOMAIN%' ),
			'tags' => 'tour dats event list',
			'base' => 'wpb_bandsintown_events',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-bandsintown',
			'params' => array(
				array(
					'type' => 'text',
					'label' => esc_html__( 'Artist Name', '%TEXTDOMAIN%' ),
					'param_name' => 'artist',
					'display' => true,
				),
			),
		)
	);
}