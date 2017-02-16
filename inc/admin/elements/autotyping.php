<?php
/**
 * Autotyping
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
		'name' => esc_html__( 'Autotyping', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'An animated typing text', '%TEXTDOMAIN%' ),
		'base' => 'wpb_typed',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-autotyping',
		'params' => array(

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Animated Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'display' => true,
				'description' => esc_html__( 'Enter one sentence per line.' ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Text Before', '%TEXTDOMAIN%' ),
				'param_name' => 'text_before',
				'placeholder' => esc_html__( 'My sentence starts with this', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Text After', '%TEXTDOMAIN%' ),
				'param_name' => 'text_after',
				'placeholder' => esc_html__( 'My sentence ends with this', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			// array(
			// 	'type' => 'colorpicker',
			// 	'label' => esc_html__( 'Text Color', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'color',
			// ),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'text_alighment',
				'choices' => array(
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
				),
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
				'label' => esc_html__( 'Text Style', '%TEXTDOMAIN%' ),
				'param_name' => 'font_style',
				'choices' => array(
					'normal' => esc_html__( 'normal', '%TEXTDOMAIN%' ),
					'italic' => esc_html__( 'italic', '%TEXTDOMAIN%' ),

				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Transform', '%TEXTDOMAIN%' ),
				'param_name' => 'text_transform',
				'choices' => array(
					'uppercase' => esc_html__( 'uppercase', '%TEXTDOMAIN%' ),
					'none' => esc_html__( 'none', '%TEXTDOMAIN%' ),

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
				'param_name' => 'tag',
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
				'type' => 'select',
				'label' => esc_html__( 'Loop', '%TEXTDOMAIN%' ),
				'param_name' => 'loop',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Speed in ms', '%TEXTDOMAIN%' ),
				'param_name' => 'speed',
				'value' => 100,
				'display' => true,
			),
		)
	)
);