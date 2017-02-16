<?php
/**
 * Raw HTML
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Raw HTML
wpb_add_element(
	array(
		'name' => esc_html__( 'Raw HTML', '%TEXTDOMAIN%' ),
		'base' => 'wpb_raw_html',
		'description' => esc_html__( 'Any HTML content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-raw-html',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'textarea_html',
				'class' => 'wpb-raw-html-fieldset',
				'label' => esc_html__( 'Your HTML code', '%TEXTDOMAIN%' ),
				'param_name' => 'html',
			),
		),
	)
);