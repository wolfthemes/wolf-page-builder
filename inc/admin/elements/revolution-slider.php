<?php
/**
 * Revolution slider
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'RevSlider' ) ) {
	// revslider
	wpb_add_element(
		array(
			'name' => esc_html__( 'Slider Revolution', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display a Revolution slider', '%TEXTDOMAIN%' ),
			'base' => 'wpb_revslider',
			'category' => esc_html__( 'Sliders', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-revslider',
			'params' => array(
				array(
					'type' => 'select',
					'label' => esc_html__( 'Choose a slider', '%TEXTDOMAIN%' ),
					'param_name' => 'slider',
					'choices' => wpb_get_revsliders()
				),
				'display' => true,
			)
		)
	);
}