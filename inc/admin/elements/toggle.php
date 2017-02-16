<?php
/**
 * Toggle
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Toggle
wpb_add_element(
	array(
		'name' => esc_html__( 'Toggle', '%TEXTDOMAIN%' ),
		'base' => 'wpb_toggle',
		'description' => esc_html__( 'Collapsible content', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-toggle',
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

			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Open by default', '%TEXTDOMAIN%' ),
				'param_name' => 'open',
			),
		),
	)
);