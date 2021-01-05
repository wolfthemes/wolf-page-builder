<?php
/**
 * Pricing tables
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Testimonials container
wpb_add_element(
	array(
		'name' => esc_html__( 'Pricing Tables', '%TEXTDOMAIN%' ),
		'base' => 'wpb_pricing_tables_container',
		'description' => esc_html__( 'Help users pick the most appropriate plan for them', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_pricing_table',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-pricing-tables',
		'params' => array(

			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					1,2,3,4,
				),
			),
		),
	)
);

// Testimonial
wpb_add_element(
	array(
		'name' => esc_html__( 'Pricing Table', '%TEXTDOMAIN%' ),
		'base' => 'wpb_pricing_table',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_pricing_tables_container',
		'icon' => 'wpb-icon wpb-pricing-tables',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'value' => esc_html__( 'Basic Plan', '%TEXTDOMAIN%' ),
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
				),
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Tagline', '%TEXTDOMAIN%' ),
				'param_name' => 'tagline',
				'placeholder' => esc_html__( 'An optional tagline', '%TEXTDOMAIN%' ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Price', '%TEXTDOMAIN%' ),
				'param_name' => 'price',
				'placeholder' => 15,
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Currency', '%TEXTDOMAIN%' ),
				'param_name' => 'currency',
				'display' => true,
				'description' => esc_html__( 'e.g: $ or €', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Display Currency', '%TEXTDOMAIN%' ),
				'param_name' => 'display_currency',
				'choices' => array(
					'before' => esc_html__( 'before', '%TEXTDOMAIN%' ),
					'after' => esc_html__( 'after', '%TEXTDOMAIN%' )
				),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Offer', '%TEXTDOMAIN%' ),
				'param_name' => 'offer',
				'choices' => array(
					'no' => esc_html__( 'no', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'yes', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Offer Price', '%TEXTDOMAIN%' ),
				'param_name' => 'offer_price',
				'dependency' => array( 'element' => 'offer', 'value' => array( 'yes' ) ),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Price Period', '%TEXTDOMAIN%' ),
				'param_name' => 'price_period',
				'description' => esc_html__( 'e.g "monthly" or "per month"', '%TEXTDOMAIN%' ),
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Button', '%TEXTDOMAIN%' ),
				'param_name' => 'show_button',
				'choices' => array(
					'yes' => esc_html__( 'yes', '%TEXTDOMAIN%' ),
					'' => esc_html__( 'no', '%TEXTDOMAIN%' )
				),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Button Text', '%TEXTDOMAIN%' ),
				'param_name' => 'button_text',
				'placeholder' => esc_html__( 'Buy now', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_button', 'value' => array( 'yes' ) ),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Button Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
				'placeholder' => 'http://',
				'dependency' => array( 'element' => 'show_button', 'value' => array( 'yes' ) ),
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Open button link in a new window', '%TEXTDOMAIN%' ),
				'param_name' => 'target',
				'dependency' => array( 'element' => 'show_button', 'value' => array( 'yes' ) ),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Featured', '%TEXTDOMAIN%' ),
				'param_name' => 'featured',
				'choices' => array(
					'no' => esc_html__( 'no', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'yes', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Featured Text', '%TEXTDOMAIN%' ),
				'param_name' => 'featured_text',
				'placeholder' => esc_html__( 'Best Choice', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'featured', 'value' => array( 'yes' ) ),
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