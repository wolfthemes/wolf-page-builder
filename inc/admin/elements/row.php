<?php
/**
 * Row
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
		'base' => 'row',
		'params' => array(

			array(
				'type' => 'select',
				'label' => esc_html__( 'Content Type', '%TEXTDOMAIN%' ),
				'param_name' => 'content_type',
				'choices' => array(
					'standard' => sprintf( esc_html__( 'Standard Width (%s centered)', '%TEXTDOMAIN%' ), '1140px' ),
					'small' => sprintf( esc_html__( 'Small Width (%s centered)', '%TEXTDOMAIN%' ), '750px' ),
					'large' => sprintf( esc_html__( 'Large Width (%s centered)', '%TEXTDOMAIN%' ), '98%' ),
					'full' => sprintf( esc_html__( 'Full Width (%s)', '%TEXTDOMAIN%' ), '100%' ),
				),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Margin Top', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_top',
				'placeholder' => '50px',
				'description' => esc_html__( 'Margin above the content', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Margin Bottom', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_bottom',
				'placeholder' => '50px',
				'description' => esc_html__( 'Margin below the content', '%TEXTDOMAIN%' ),
			),
		)
	)
);