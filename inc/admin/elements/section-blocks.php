<?php
/**
 * Section blocks
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wpb_add_element(
	array(		
		'name' => esc_html__( 'Section with Blocks', '%TEXTDOMAIN%' ),
		'base' => 'section_blocks',
		'icon' => 'wpb-icon wpb-section-blocks',
		'params' => array(
			
			array(
				'type' => 'hidden',
				'param_name' => 'section_type',
				'value' => 'blocks',
			),

			array(
				'type' => 'hidden',
				'param_name' => 'layout',
				'value' => '2-cols',
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Margin', '%TEXTDOMAIN%' ),
				'param_name' => 'margin',
				'placeholder' => '0',
				'description' => esc_html__( 'Empty space around the content', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Section Visibility', '%TEXTDOMAIN%' ),
				'param_name' => 'hide_class',
				'choices' => array(
					'' => esc_html__( 'Always visible', '%TEXTDOMAIN%' ),
					'wpb-hide-tablet' => esc_html__( 'Hide on tablet and mobile', '%TEXTDOMAIN%' ),
					'wpb-hide-mobile' => esc_html__( 'Hide on mobile', '%TEXTDOMAIN%' ),
					'wpb-show-tablet' => esc_html__( 'Show on tablet and mobile only', '%TEXTDOMAIN%' ),
					'wpb-show-mobile' => esc_html__( 'Show on mobile only', '%TEXTDOMAIN%' ),
					'wpb-hide' => esc_html__( 'Always hidden', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'slug',
				'label' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'anchor',
				'placeholder' => 'my-section',
				'description' => esc_html__( 'An unique identifier for your section.', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'slug',
				'label' => esc_html__( 'Extra Class', '%TEXTDOMAIN%' ),
				'param_name' => 'extra_class',
				'placeholder' => '.my-class',
				'description' => esc_html__( 'Optional additional CSS class to add to the section', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Inline Style', '%TEXTDOMAIN%' ),
				'param_name' => 'inline_style',
				'placeholder' => 'margin-top:15px;',
				'description' => esc_html__( 'Additional inline CSS style', '%TEXTDOMAIN%' ),
			),
		)
	)
);