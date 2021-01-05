<?php
/**
 * Dribbble plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Dribbble' ) ) {
	// Dribbble Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Dribbble', '%TEXTDOMAIN%' ),
			'base' => 'wolf_dribbble',
			'description' => esc_html__( 'Your last shots', '%TEXTDOMAIN%' ),
			'category' => 'Social',
			'icon' => 'wpb-icon wpb-dribbble',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Player ID', '%TEXTDOMAIN%' ),
					'param_name' => 'player_id',
					'display' => true,
				),

				array(
					'type' => 'int',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'display' => true,
				),
			)
		)
	);
}