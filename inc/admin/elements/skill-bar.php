<?php
/**
 * Skill bar
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Skills bar
wpb_add_element(
	array(
		'name' => esc_html__( 'Skill Bar', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'An animation to show your competence', '%TEXTDOMAIN%' ),
		'tags' => 'skills',
		'base' => 'wpb_skill_bar',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-skill-bar',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Label', '%TEXTDOMAIN%' ),
				'param_name' => 'label',
				'display' => true,
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Value', '%TEXTDOMAIN%' ),
				'param_name' => 'value',
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Bar Color', '%TEXTDOMAIN%' ),
				'param_name' => 'color',
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Text Color', '%TEXTDOMAIN%' ),
				'param_name' => 'text_color',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'title_tag',
				'choices' => array(
					'h5',
					'span',
					'h4',
					'h3',
					'h2',
					'h1',
				),
			),
		),
	)
);