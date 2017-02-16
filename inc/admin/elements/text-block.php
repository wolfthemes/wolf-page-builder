<?php
/**
 * Text block
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Text block
wpb_add_element(
	array(
		'name' => esc_html__( 'Text Block', '%TEXTDOMAIN%' ),
		'base' => 'wpb_text_block',
		'description' => esc_html__( 'A block of text with the Wordpress editor', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-text-block',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'params' => array(
			array(
				'type' => 'editor',
				'label' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
				'param_name' => 'editorcontent',
				'value' => wpb_encode_textarea_html( sprintf( esc_html__( 'This is a text block. %s', '%TEXTDOMAIN%' ), 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.' ) ),
				'display' => true,
			),
		)
	)
);