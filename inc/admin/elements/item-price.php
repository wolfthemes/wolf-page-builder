<?php
/**
 * Item price
 *
 * @package WordPress
 * @subpackage %NAME%
 * @since %NAME% 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_animations;

// Restaurant menu item
wpb_add_element(
	array(
		'name' => esc_html__( 'Item Price', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Presentation of an item or service to sale', '%TEXTDOMAIN%' ),
		'base' => 'wpb_item_price',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'fa fa-2x fa-money',
		'params' => array(

			array(
				'type' => 'hidden',
				'param_name' => 'image_size',
				'value' => 'wpb-2x2',
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'placeholder' => esc_html__( 'Our special', '%TEXTDOMAIN%' ),
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
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Price', '%TEXTDOMAIN%' ),
				'param_name' => 'price',
				'placeholder' => '$10.75',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Subtitle', '%TEXTDOMAIN%' ),
				'param_name' => 'content',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Layout', '%TEXTDOMAIN%' ),
				'param_name' => 'layout',
				'choices' => array(
					'text' => esc_html__( 'Text only', '%TEXTDOMAIN%' ),
					'small-image' => esc_html__( 'Small image', '%TEXTDOMAIN%' ),
					'medium-image' => esc_html__( 'Medium image', '%TEXTDOMAIN%' ),
					'big-image' => esc_html__( 'Big image', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
			
			array(
				'type' => 'image',
				'label' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
				'dependency' => array( 'element' => 'layout', 'value' => array( 'small-image', 'medium-image', 'big-image' ) ),
				'display' => true,
			),
		)
	)
);