<?php
/**
 * Process
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Process container
wpb_add_element(
	array(
		'name' => esc_html__( 'Process', '%TEXTDOMAIN%' ),
		'base' => 'wpb_process_container',
		'description' => esc_html__( 'Your step-by-step way of working', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_process_item',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-process',
		'help' => sprintf(
			esc_html__( 'It is recommended to insert %1$d to %2$d process elements and use the standard width for the parent row.', '%TEXTDOMAIN%' ),
			2,
			5
		),
		'params' => array(
		
			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Margin Top', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_top',
				'placeholder' => '20px',
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Margin Bottom', '%TEXTDOMAIN%' ),
				'param_name' => 'margin_bottom',
				'placeholder' => '20px',
			),
		),
	)
);

// process item
wpb_add_element(
	array(
		'name' => esc_html__( 'Process Item', '%TEXTDOMAIN%' ),
		'base' => 'wpb_process_item',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_process_container',
		'icon' => 'wpb-icon wpb-process',
		'params' => array(

			array(
				'type' => 'icon',
				'label' => esc_html__( 'Icon', '%TEXTDOMAIN%' ),
				'param_name' => 'icon',
				'choices' => $wpb_icons,
				'value' => 'line-icon-bulb',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
				'value' => esc_html__( 'My title', '%TEXTDOMAIN%' ),
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
				'type' => 'textarea',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'placeholder' => esc_html__( 'Optional description text', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
				'placeholder' => 'http://',
			),
		),
	)
);