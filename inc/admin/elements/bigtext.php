<?php
/**
 * Big text
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Bigtext
wpb_add_element(
	array(
		'name' => esc_html__( 'Big Text', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A big line of text that will take the full width of its container', '%TEXTDOMAIN%' ),
		'base' => 'wpb_bigtext',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-headline',
		'params' => array(

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'value' => esc_html__( 'My mega big text', '%TEXTDOMAIN%' ),
				'display' => true,
				'description' => esc_html__( 'You can add several lines of text.', '%TEXTDOMAIN%' ),
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