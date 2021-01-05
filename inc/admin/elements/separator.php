<?php
/**
 * Separator
 *
 * @author WolfThemes
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
		'name' => esc_html__( 'Separator', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Add a line to organize your content', '%TEXTDOMAIN%' ),
		'base' => 'wpb_separator',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-separator',
		'params' => array(

			array(
				'type' => 'text',
				'label' => esc_html__( 'Width', '%TEXTDOMAIN%' ),
				'param_name' => 'width',
				'value' => '100%',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Height', '%TEXTDOMAIN%' ),
				'param_name' => 'height',
				'placeholder' => '1px',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Aligment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'Center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Color', '%TEXTDOMAIN%' ),
				'param_name' => 'color',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Opacity', '%TEXTDOMAIN%' ),
				'param_name' => 'opacity',
				'description' => esc_html__( 'in percent', '%TEXTDOMAIN%' ),
				'placeholder' => 100,
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Margin Top', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_top',
				'placeholder' => '30px',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Marign Bottom', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_bottom',
				'placeholder' => '30px',
				'display' => true,
			),
		)
	)
);