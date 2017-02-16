<?php
/**
 * Accordion
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Accordion container
wpb_add_element(
	array(
		'name' => esc_html__( 'Accordion', '%TEXTDOMAIN%' ),
		'base' => 'wpb_accordion_container',
		'description' => esc_html__( 'Expanding and collapsing elements', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_accordion',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-accordion',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'anchor',
				'placeholder' => 'my-element',
				'description' => esc_html__( 'An unique identifier for your element.', '%TEXTDOMAIN%' ),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Extra Class', '%TEXTDOMAIN%' ),
				'param_name' => 'extra_class',
				'placeholder' => '.my-class',
				'description' => esc_html__( 'Optional additional CSS class to add to the element', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'inline_css',
				'label' => esc_html__( 'Inline Style', '%TEXTDOMAIN%' ),
				'param_name' => 'inline_style',
				'placeholder' => 'margin-top:15px;',
				'description' => esc_html__( 'Additional inline CSS style', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		),
	)
);

// Accordion
wpb_add_element(
	array(
		'name' => esc_html__( 'Accordion Tab', '%TEXTDOMAIN%' ),
		'base' => 'wpb_accordion',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_accordion_container',
		'icon' => 'wpb-icon wpb-accordion',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'value' => esc_html__( 'My Title', '%TEXTDOMAIN%' ),
				'display' => true,
			),
			array(
				'type' => 'editor',
				'label' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
				'param_name' => 'editorcontent',
				'value' => wpb_encode_textarea_html( sprintf( esc_html__( 'This is a text block. Click on the edit button to change this text.  %s', '%TEXTDOMAIN%' ), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.' ) ),
				'display' => true,
			),
		),
	)
);