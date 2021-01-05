<?php
/**
 * Facebook like button
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// FB like
wpb_add_element(
	array(
		'name' => esc_html__( 'Facebook Like', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Facebook "Like" button', '%TEXTDOMAIN%' ),
		'base' => 'wpb_facebook_like',
		'category' => esc_html__( 'Social', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-facebook',
		'params' => array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Button Type', '%TEXTDOMAIN%' ),
				'param_name' => 'type',
				'choices' => array(
					'standard' => esc_html__( 'Horizontal', '%TEXTDOMAIN%' ),
					'button_count' => esc_html__( 'Horizontal with count', '%TEXTDOMAIN%' ),
					'box_count' => esc_html__( 'Vertical with count', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
		)
	)
);