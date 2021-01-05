<?php
/**
 * Columns
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wpb_add_element(
	array(
		'name' => esc_html__( 'Column', '%TEXTDOMAIN%' ),
		'base' => 'column',
		'icon' => 'wpb-icon wpb-section-columns',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'anchor',
				'placeholder' => 'my-column',
				'description' => esc_html__( 'An unique identifier for your column.', '%TEXTDOMAIN%' ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Extra Class', '%TEXTDOMAIN%' ),
				'param_name' => 'extra_class',
				'placeholder' => '.my-class',
				'description' => esc_html__( 'Optional additional CSS class to add to the column', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'inline_css',
				'label' => esc_html__( 'Inline Style', '%TEXTDOMAIN%' ),
				'param_name' => 'inline_style',
				'placeholder' => 'margin-top:15px;',
				'description' => esc_html__( 'Additional inline CSS style', '%TEXTDOMAIN%' ),
			),
		),
	)
);