<?php
/**
 * Advanced Slider
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_icons, $wpb_image_sizes;

$button_types = apply_filters( 'wpb_button_types', array(
	'wpb-flat' => esc_html__( 'Flat', '%TEXTDOMAIN%' ),
	'wpb-outline' => esc_html__( 'Border', '%TEXTDOMAIN%' ),
	'wpb-outline-inverted' => esc_html__( 'Border Hover', '%TEXTDOMAIN%' ),
	'wpb-fill-in-up' => esc_html__( 'Fill-in-up', '%TEXTDOMAIN%' ),
) );

// Advanced slider container
wpb_add_element(
	array(
		'name' => esc_html__( 'Advanced Slider', '%TEXTDOMAIN%' ),
		'base' => 'wpb_advanced_slider',
		'description' => esc_html__( 'A powerful image/video slider', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_advanced_slide',
		'category' => esc_html__( 'Sliders', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-images-slider',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Slider Height', '%TEXTDOMAIN%' ),
				'description' => esc_html__( 'Enter a value in % or px. 100% for a full height slider.', '%TEXTDOMAIN%' ),
				'param_name' => 'slider_height',
				'value' => '650px',
				'display' => true,
			),
		),
	)
);

// Advanced slide
wpb_add_element(
	array(
		'name' => esc_html__( 'Advanced Slide', '%TEXTDOMAIN%' ),
		'base' => 'wpb_advanced_slide',
		'category' => esc_html__( 'Sliders', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_advanced_slider',
		'icon' => 'wpb-icon wpb-images-slider',
		'params' => array(

			// array(
			// 	'type' => 'select',
			// 	'label' => esc_html__( 'Main color tone', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'skin',
			// 	'choices' => array(
			// 		'dark' => esc_html__( 'Light', '%TEXTDOMAIN%' ),
			// 		'light' => esc_html__( 'Dark', '%TEXTDOMAIN%' ),
			// 	),
			// 	'description' => esc_html__( 'Choose the "Light" color tone if your slide background image is lighter than normal', '%TEXTDOMAIN%' ),
			// ),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
				'param_name' => 'background_type',
				'choices' => array(
					'image' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
					'video' => esc_html__( 'Video', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'background',
				'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
				'param_name' => 'background',
				'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
			),

			array(
				'type' => 'video_background',
				'label' => esc_html__( 'Video Background', '%TEXTDOMAIN%' ),
				'param_name' => 'video_bg',
				'video_type_option' => false,
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'video' ),
				),
			),

			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Show video background controls (play and mute buttons, only for self-hosted video)', '%TEXTDOMAIN%' ),
				'param_name' => 'video_bg_controls',
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'video' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Font Color', '%TEXTDOMAIN%' ),
				'param_name' => 'font_color',
				'video_type_option' => false,
				'choices' => array(
					'light' => esc_html__( 'Light', '%TEXTDOMAIN%' ),
					'dark' => esc_html__( 'Dark', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Title Type', '%TEXTDOMAIN%' ),
				'param_name' => 'title_type',
				'video_type_option' => false,
				'choices' => array(
					'text' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
					'image' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
				'dependency' => array( 
					'element' => 'title_type', 
					'value' => array( 'image' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Size', '%TEXTDOMAIN%' ),
				'param_name' => 'image_size',
				'choices' => $wpb_image_sizes,
				'description' => esc_html__( 'You can set the "large", "medium" and "thumbnail" sizes in the WP media settings ', '%TEXTDOMAIN%' ),
				'dependency' => array( 
					'element' => 'title_type', 
					'value' => array( 'image' ),
				),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'placeholder' => esc_html__( 'My Awesome Title', '%TEXTDOMAIN%' ),
				'display' => true,
				'dependency' => array( 
					'element' => 'title_type', 
					'value' => array( 'text' ),
				),
			),

			array(
				'type' => 'font',
				'label' => esc_html__( 'Title Font', '%TEXTDOMAIN%' ),
				'param_name' => 'title_font_family',
				'display' => true,
				'dependency' => array( 
					'element' => 'title_type', 
					'value' => array( 'text' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Caption Type', '%TEXTDOMAIN%' ),
				'param_name' => 'caption_type',
				'choices' => array(
					'text' => esc_html__( 'Standard text', '%TEXTDOMAIN%' ),
					'big-text' => esc_html__( 'Bigger text with semi-transparent background', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Caption Text', '%TEXTDOMAIN%' ),
				'param_name' => 'caption',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Caption Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'caption_alignment',
				'choices' => array(
					'center' => esc_html__( 'Center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Caption Width', '%TEXTDOMAIN%' ),
				'param_name' => 'caption_width',
				'choices' => array(
					'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
					'small' => esc_html__( 'Small', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Caption Position', '%TEXTDOMAIN%' ),
				'param_name' => 'caption_position',
				'choices' => array(
					'center' => esc_html__( 'Center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Add a First Button', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 1 Text', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_text',
				'value' => esc_html__( 'My button', '%TEXTDOMAIN%' ),
				//'display' => true,
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),
			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 1 Tagline', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_tagline',
				'placeholder' => esc_html__( 'Optional additional text', '%TEXTDOMAIN%' ),
				//'display' => true,
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 1 Type', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_type',
				'choices' => $button_types,
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 1 Shape', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_shape',
				'choices' => array(
					'' => esc_html__( 'Default', '%TEXTDOMAIN%' ),
					'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
					'round' => esc_html__( 'Round', '%TEXTDOMAIN%' ),
				),
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
				'value' => apply_filters( 'wpb_default_button_shape', 'default' ),
			),

			array(
				'type' => 'colorpicker',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 1 Color', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_color',
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'colorpicker',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 1 Color on Hover', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_color_hover',
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Button 1 Link', '%TEXTDOMAIN%' ),
				'param_name' => 'button_1_link',
				'placeholder' => 'http://',
				'dependency' => array( 'element' => 'button_1', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Add a Second Button', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 2 Text', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_text',
				'value' => esc_html__( 'My button', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),
			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 2 Tagline', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_tagline',
				'placeholder' => esc_html__( 'Optional additional text', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 2 Type', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_type',
				'choices' => $button_types,
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 2 Shape', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_shape',
				'choices' => array(
					'' => esc_html__( 'Default', '%TEXTDOMAIN%' ),
					'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
					'round' => esc_html__( 'Round', '%TEXTDOMAIN%' ),
				),
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
				'value' => apply_filters( 'wpb_default_button_shape', 'default' ),
			),

			array(
				'type' => 'colorpicker',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Button 2 Color', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_color',
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'colorpicker',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Button 2 Color on Hover', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_color_hover',
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Button 2 Link', '%TEXTDOMAIN%' ),
				'param_name' => 'button_2_link',
				'placeholder' => 'http://',
				'dependency' => array( 'element' => 'button_2', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Add Overlay', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Overlay Color', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay_color',
				'value' => '#000000',
				'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Overlay Pattern', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay_image',
				// 'description' => esc_html__( 'A repeatable image', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Overlay Opacity in Percent', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay_opacity',
				'value' => '40',
				'dependency' => array( 'element' => 'overlay', 'value' => array( 'yes' ) ),
			),
		),
	)
);