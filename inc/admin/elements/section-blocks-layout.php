<?php
/**
 * Section layout
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wpb_add_element(
	array(

		'name' => '',
		'base' => 'section_blocks_layout',
		'icon' => 'wpb-icon wpb-section-columns',
		'params' => array(

			array(
				'type' => 'hidden',
				'param_name' => 'section_type',
				'value' => 'blocks',
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Layout', '%TEXTDOMAIN%' ),
				'param_name' => 'layout',
				'choices' => array(
					'2-cols' => sprintf( esc_html__( '%d blocks', '%TEXTDOMAIN%' ), 2 ),
					'3-cols' => sprintf( esc_html__( '%d blocks', '%TEXTDOMAIN%' ), 3 ),
					'4-cols' => sprintf( esc_html__( '%d blocks', '%TEXTDOMAIN%' ), 4 ),
					'6-cols' => sprintf( esc_html__( '%d blocks', '%TEXTDOMAIN%' ), 6 ),
				),
			),
		)
	)
);