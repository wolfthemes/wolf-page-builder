<?php
/**
 * Button dialog box
 *
 * @class WPB_Admin
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$button_color_array = array(
	'accent-color'  => esc_html__( 'theme color', '%TEXTDOMAIN%' ),
	'accent-color-bnw'  => esc_html__( 'theme color black/white on hover', '%TEXTDOMAIN%' ),
	'border-button'  => esc_html__( 'black/white', '%TEXTDOMAIN%' ),
	'border-button-accent-hover'  => esc_html__( 'black/white theme color on hover', '%TEXTDOMAIN%' ),
);

$button_type_array =  array(
	'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
	'round' => esc_html__( 'Round', '%TEXTDOMAIN%' ),
);

$button_size_array =  array(
	'medium' => esc_html__( 'Medium', '%TEXTDOMAIN%' ),
	'small' => esc_html__( 'Small', '%TEXTDOMAIN%' ),
	'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
);

global $wpb_icons;

$title = esc_html__( 'Button', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'text',
		'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
		'value' => esc_html__( 'Button', '%TEXTDOMAIN%' ),
	),

	array(
		'id' => 'url',
		'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
		'placeholder' => esc_html__( 'http://', '%TEXTDOMAIN%' ),
	),

	array(
		'id' => 'tagline',
		'label' => esc_html__( 'Tagline', '%TEXTDOMAIN%' ),
	),

	// array(
	// 	'id' => 'color',
	// 	'label' => esc_html__( 'Color', '%TEXTDOMAIN%' ),
	// 	'type' => 'select',
	// 	'options' => $button_color_array,
	// ),

	array(
		'id' => 'size',
		'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => $button_size_array,
	),

	array(
		'id' => 'type',
		'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => $button_type_array,
	),

	array(
		'id' => 'target',
		'label' => esc_html__( 'Open link in a new tab', '%TEXTDOMAIN%' ),
		'type' => 'checkbox',
		'value' => '_blank',
	),

	array(
		'id' => 'scroll_to_anchor',
		'label' => esc_html__( 'Scroll to anchor', '%TEXTDOMAIN%' ),
		'type' => 'checkbox',
		'value' => true,
	),

	array(
		'id' => 'add_button_icon',
		'label' => esc_html__( 'Add Icon', '%TEXTDOMAIN%' ),
		'type' => 'checkbox',
		'value' => 'yes',
	),

	array(
		'id' => 'icon',
		'label' => esc_html__( 'Icon', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => $wpb_icons,
	),

	array(
		'id' => 'icon_position',
		'label' => esc_html__( 'Icon position', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'after' => esc_html__( 'after', '%TEXTDOMAIN%' ),
			'before' => esc_html__( 'before', '%TEXTDOMAIN%' ),
		),
	),
);
echo wpb_generate_tinymce_popup( 'wpb_button', $params, $title );