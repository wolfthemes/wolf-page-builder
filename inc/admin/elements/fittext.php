<?php
/**
 * Headline
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Fittext
wpb_add_element(
	array(
		'name' => esc_html__( 'Headline', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A big title with flexible font size', '%TEXTDOMAIN%' ),
		'base' => 'wpb_headline',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-headline',
		'params' => array(

			array(
				'type' => 'text',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'value' => esc_html__( 'My Headline', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Maximum Font Size', '%TEXTDOMAIN%' ),
				'param_name' => 'max_font_size',
				'value' => 72,
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'text_alignment',
				'choices' => array(
					'center' => esc_html__( 'Center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Text Color', '%TEXTDOMAIN%' ),
				'param_name' => 'color',
			),


			array(
				'type' => 'text',
				'label' => esc_html__( 'Font Weight', '%TEXTDOMAIN%' ),
				'param_name' => 'font_weight',
				'value' => 700,
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Transform', '%TEXTDOMAIN%' ),
				'param_name' => 'text_transform',
				'choices' => array(
					'none' => esc_html__( 'none', '%TEXTDOMAIN%' ),
					'uppercase' => esc_html__( 'uppercase', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Letter Spacing', '%TEXTDOMAIN%' ),
				'param_name' => 'letter_spacing',
				'display' => true,
			),

			array(
				'type' => 'font',
				'label' => esc_html__( 'Font', '%TEXTDOMAIN%' ),
				'param_name' => 'font_family',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'title_tag',
				'choices' => array(
					'h2',
					'p',
					'h5',
					'h4',
					'h3',
					'h1',
				),
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
				'placeholder' => 'http://',
				'display' => true,
			),
		)
	)
);