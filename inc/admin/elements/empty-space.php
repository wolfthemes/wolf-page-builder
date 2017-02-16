<?php
/**
 * Empty space
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// empty space
wpb_add_element(
	array(
		'name' => esc_html__( 'Empty Space', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Add visual rhythm with some vertical space', '%TEXTDOMAIN%' ),
		'base' => 'wpb_empty_space',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-empty-space',
		'params' => array(

			array(
				'type' => 'int',
				'label' => esc_html__( 'Height', '%TEXTDOMAIN%' ),
				'param_name' => 'height',
				'value' => 50,
				'display' => true,
			),

			// array(
			// 	'type' => 'text',
			// 	'label' => esc_html__( 'Note', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'note',
			// 	'description' => esc_html__( 'Helping not to display on the admin.', '%TEXTDOMAIN%' ),
			// 	'display' => true,
			// ),
		)
	)
);