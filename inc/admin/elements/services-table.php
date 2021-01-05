<?php
/**
 * Service table
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Service table
wpb_add_element(
	array(
		'name' => esc_html__( 'Service Table', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Show what your business is about', '%TEXTDOMAIN%' ),
		'base' => 'wpb_services_table',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-service-table',
		'params' => array(

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Background Color', '%TEXTDOMAIN%' ),
				'param_name' => 'bg_color',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Background Opacity', '%TEXTDOMAIN%' ),
				'param_name' => 'bg_opacity',
				'placeholder' => 80,
				'description' => esc_html__( 'in percent', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Font Color', '%TEXTDOMAIN%' ),
				'param_name' => 'font_color',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Title Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'title_tag',
				'choices' => array(
					'h3',
					'span',
					'h1',
					'h2',
					'h4',
					'h5',
					'h6',
				),
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Title Color', '%TEXTDOMAIN%' ),
				'param_name' => 'title_color',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Add Icon', '%TEXTDOMAIN%' ),
				'param_name' => 'add_icon',
				'choices' => array(
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'icon',
				'label' => esc_html__( 'Icon', '%TEXTDOMAIN%' ),
				'param_name' => 'icon',
				'choices' => $wpb_icons,
				'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Icon Color', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_color',
				'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
				'display' => true,
			),

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Services', '%TEXTDOMAIN%' ),
				'param_name' => 'services',
				'description' => esc_html__( 'Enter one service per line.' ),
				'display' => true,
			),
		),
	)
);