<?php
/**
 * Custom colors
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Globals
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} 

global $custom_colors;

$custom_colors = array(

	array(
		'type' => 'select',
		'label' => esc_html__( 'Custom', '%TEXTDOMAIN%' ),
		'param_name' => 'custom_style',
		'choices' => array(
			'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
			'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
		),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Title Color', '%TEXTDOMAIN%' ),
		'param_name' => 'title_color',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Text Color', '%TEXTDOMAIN%' ),
		'param_name' => 'text_color',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Background Color', '%TEXTDOMAIN%' ),
		'param_name' => 'bg_color',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Icon Color', '%TEXTDOMAIN%' ),
		'param_name' => 'icon_color',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Border Color', '%TEXTDOMAIN%' ),
		'param_name' => 'border_color',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Background Color on Hover', '%TEXTDOMAIN%' ),
		'param_name' => 'bg_color_hover',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Icon Color on Hover', '%TEXTDOMAIN%' ),
		'param_name' => 'icon_color_hover',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	),

	array(
		'type' => 'colorpicker',
		'label' => esc_html__( 'Border Color on Hover', '%TEXTDOMAIN%' ),
		'param_name' => 'border_color_hover',
		'dependency' => array( 'element' => 'custom_style', 'value' => array( 'yes' ) ),
	)
);