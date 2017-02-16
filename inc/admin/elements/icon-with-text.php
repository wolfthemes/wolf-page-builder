<?php
/**
 * Icon with text
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Icon with Text
wpb_add_element( 
	array(
		'name' => esc_html__( 'Icon with Text', '%TEXTDOMAIN%' ),
		'description' => esc_html__( '940+ icons with additional text', '%TEXTDOMAIN%' ),
		'base' => 'wpb_icon_with_text',
		'icon' => 'wpb-icon wpb-icon-text',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'icon',
				'label' => esc_html__( 'Icon', '%TEXTDOMAIN%' ),
				'param_name' => 'icon',
				'choices' => $wpb_icons,
				'value' => 'fa-smile-o',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title Font Size', '%TEXTDOMAIN%' ),
				'param_name' => 'title_font_size',
				'placeholder' => '18px',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Title Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'title_tag',
				'choices' => array(
					'h3',
					'h1',
					'h2',
					'h4',
					'h5',
					'h6',
					'span',
				),
			),

			array(
				'type' => 'textarea_html',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_type',
				'choices' => array(
					'normal' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
					'circle' => esc_html__( 'Circle', '%TEXTDOMAIN%' ),
					'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
					'ban' => esc_html__( 'Ban', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Position', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_position',
				'choices' => array(
					'top' => esc_html__( 'Top', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'left_from_title' => esc_html__( 'Left from Title', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
					'right_from_title' => esc_html__( 'Right from Title', '%TEXTDOMAIN%' ),
				),
				//'dependency' => array( 'element' => 'box_type', 'value' => array( 'normal' ) ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_size',
				'choices' => array(
					'fa-3x' =>esc_html__( 'Medium', '%TEXTDOMAIN%' ),
					'fa-2x' =>esc_html__( 'Small', '%TEXTDOMAIN%' ),
					'fa-4x' =>esc_html__( 'Large', '%TEXTDOMAIN%' ),
					'fa-5x' =>esc_html__( 'Very Large', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Hover Transition', '%TEXTDOMAIN%' ),
				'param_name' => 'hover_effect',
				'choices' => array(
					'none' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
					'fill-in' => esc_html__( 'Fill in', '%TEXTDOMAIN%' ),
				),
				'description' => esc_html__( 'Custom hover effects won\'t apply to icon with custom colors settings', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Icon Animation', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_animation',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Icon Animation Delay', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_animation_delay',
				'dependency' => array( 'element' => 'icon_animation', 'value' => array( 'yes' ) ),
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