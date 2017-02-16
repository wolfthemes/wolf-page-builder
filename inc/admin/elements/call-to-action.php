<?php
/**
 * Button
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_icons;

$button_types = apply_filters( 'wpb_button_types', array(
	'wpb-flat' => esc_html__( 'Flat', '%TEXTDOMAIN%' ),
	'wpb-outline' => esc_html__( 'Border', '%TEXTDOMAIN%' ),
	'wpb-outline-inverted' => esc_html__( 'Border Hover', '%TEXTDOMAIN%' ),
	'wpb-fill-in-up' => esc_html__( 'Fill-in-up', '%TEXTDOMAIN%' ),
) );

// Buttons container
wpb_add_element(
	array(
		'name' => esc_html__( 'Button(s) Container', '%TEXTDOMAIN%' ),
		'base' => 'wpb_button_container',
		'description' => esc_html__( 'A simple button or a set of buttons', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_button',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-button',
		'params' => array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
			),

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

$button_params = array();

$button_params[] = array(
	'type' => 'text',
	'label' => esc_html__( 'Button Text', '%TEXTDOMAIN%' ),
	'param_name' => 'text',
	'value' => esc_html__( 'My Button', '%TEXTDOMAIN%' ),
	'display' => true,
);

$button_params[] = array(
	'type' => 'text',
	'label' => esc_html__( 'Button Tagline', '%TEXTDOMAIN%' ),
	'param_name' => 'tagline',
	'placeholder' => esc_html__( 'Optional additional text', '%TEXTDOMAIN%' ),
	'display' => true,
);

// if ( function_exists( 'wolf_get_theme_mod' ) ) {
// 	$button_params[] =  array(
// 		'type' => 'checkbox',
// 		'label' => esc_html__( 'Use theme button style (deprecated: use "Theme Style" button type)', '%TEXTDOMAIN%' ),
// 		'param_name' => 'theme_button_style',
// 		'description' => esc_html__( 'Check this option to use the theme\'s buttons style. It will overwrite the styling settings below.', '%TEXTDOMAIN%' ),
// 	);
// }

$button_params[] = array(
	'type' => 'select',
	'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
	'param_name' => 'size',
	'choices' => array(
		'medium' => esc_html__( 'Medium', '%TEXTDOMAIN%' ),
		'small' => esc_html__( 'Small', '%TEXTDOMAIN%' ),
		'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
		'very-large' => esc_html__( 'Very large', '%TEXTDOMAIN%' ),
	),
	'display' => true,
);

$button_params[] = array(
	'type' => 'select',
	'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
	'param_name' => 'type',
	'choices' => $button_types,
);

$button_params[] = array(
	'type' => 'select',
	'label' => esc_html__( 'Shape', '%TEXTDOMAIN%' ),
	'param_name' => 'shape',
	'choices' => array(
		'default' => esc_html__( 'Default', '%TEXTDOMAIN%' ),
		'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
		'round' => esc_html__( 'Round', '%TEXTDOMAIN%' ),
	),
	'value' => apply_filters( 'wpb_default_button_shape', 'default' ),
);

$button_params[] =  array(
	'type' => 'colorpicker',
	'label' => esc_html__( 'Color', '%TEXTDOMAIN%' ),
	'param_name' => 'color',
	'dependency' => array( 'element' => 'type', 'value' => array( 'wpb-flat', 'wpb-outline', 'wpb-outline-inverted' ) ),
);

$button_params[] = array(
	'type' => 'colorpicker',
	'label' => esc_html__( 'Color on Hover', '%TEXTDOMAIN%' ),
	'param_name' => 'color_hover',
	'dependency' => array( 'element' => 'type', 'value' => array( 'wpb-flat', 'wpb-outline', 'wpb-outline-inverted' ) ),
);

$button_params[] = array(
	'type' => 'link',
	'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
	'param_name' => 'link',
	'placeholder' => 'http://',
	'display' => true,
);

$button_params[] = array(
	'type' => 'checkbox',
	'label' => esc_html__( 'Smooth scroll', '%TEXTDOMAIN%' ),
	'param_name' => 'scroll_to_anchor',
	'description' => esc_html__( 'Check this option if your link is an anchor (eg: #my-section)', '%TEXTDOMAIN%' ),
	'display' => true,
);

$button_params[] = array(
	'type' => 'select',
	'label' => esc_html__( 'Add Icon', '%TEXTDOMAIN%' ),
	'param_name' => 'add_icon',
	'choices' => array(
		'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
		'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
	),
	'display' => true,
);

$button_params[] = array(
	'type' => 'icon',
	'label' => esc_html__( 'Icon', '%TEXTDOMAIN%' ),
	'param_name' => 'icon',
	'choices' => $wpb_icons,
	'display' => true,
	'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
);

$button_params[] = array(
	'type' => 'select',
	'label' => esc_html__( 'Icon Position', '%TEXTDOMAIN%' ),
	'param_name' => 'icon_position',
	'choices' => array(
		'before' => esc_html__( 'Before', '%TEXTDOMAIN%' ),
		'after' => esc_html__( 'After', '%TEXTDOMAIN%' ),
	),
	'dependency' => array( 'element' => 'add_icon', 'value' => array( 'yes' ) ),
	'display' => true,
);

// Call to action
wpb_add_element(
	array(
		'name' => esc_html__( 'Call to Action', '%TEXTDOMAIN%' ),
		'base' => 'wpb_call_to_action',
		'icon' => 'wpb-icon wpb-call-to-action',
		'description' => esc_html__( 'Provoke an immediate response', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'main_text',
				'value' => esc_html__( 'My call to action text', '%TEXTDOMAIN%' ),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Tagline', '%TEXTDOMAIN%' ),
				'param_name' => 'main_tagline',
				'placeholder' => esc_html__( 'Optional tagline', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		),
	)
);

// Button
wpb_add_element(
	array(
		'name' => esc_html__( 'Button', '%TEXTDOMAIN%' ),
		'base' => 'wpb_button',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_button_container',
		'icon' => 'wpb-icon wpb-button',
		'params' => array(

			array(
				'type' => 'select',
				'label' => esc_html__( 'Full Width', '%TEXTDOMAIN%' ),
				'param_name' => 'full_width',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
		),
	)
);

wpb_inject_param( 'wpb_button', $button_params );
wpb_inject_param( 'wpb_call_to_action', $button_params );