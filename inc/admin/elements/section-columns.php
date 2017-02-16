<?php
/**
 * Section columns
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

		'name' => esc_html__( 'Section with Columns', '%TEXTDOMAIN%' ),
		'base' => 'section_columns',
		'icon' => 'wpb-icon wpb-section-columns',
		'params' => array(

			array(
				'type' => 'hidden',
				'param_name' => 'section_type',
				'value' => 'columns',
			),

			array(
				'type' => 'hidden',
				'param_name' => 'layout',
				'value' => '1-cols',
			),

			array(
				'type' => 'slug',
				'label' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'anchor',
				'placeholder' => 'my-section',
				'description' => esc_html__( 'An unique identifier for your section.', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Main Color Tone', '%TEXTDOMAIN%' ),
				'param_name' => 'skin',
				'choices' => array(
					'dark' => esc_html__( 'Light', '%TEXTDOMAIN%' ),
					'light' => esc_html__( 'Dark', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Padding Top', '%TEXTDOMAIN%' ),
				'param_name' => 'padding_top',
				'placeholder' => '50px',
				'description' => esc_html__( 'Empty space above the content', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Padding Bottom', '%TEXTDOMAIN%' ),
				'param_name' => 'padding_bottom',
				'placeholder' => '50px',
				'description' => esc_html__( 'Empty space below the content', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Margin', '%TEXTDOMAIN%' ),
				'param_name' => 'margin',
				'placeholder' => '0',
				'description' => esc_html__( 'Empty space around the content (supports CSS format like 0px 0px 0px 0px)', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
				'param_name' => 'background_type',
				'choices' => array(
					'none' => esc_html__( 'Default', '%TEXTDOMAIN%' ),
					'image' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
					'video' => esc_html__( 'Video', '%TEXTDOMAIN%' ),
					'slideshow' => esc_html__( 'Slideshow', '%TEXTDOMAIN%' ),
					'transparent' => esc_html__( 'Transparent', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Full Height', '%TEXTDOMAIN%' ),
				'param_name' => 'full_height',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'checkbox',
				// 'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Add pointing down arrow', '%TEXTDOMAIN%' ),
				'description' => esc_html__( 'Allow user to scroll to the next section when clicking on the arrow', '%TEXTDOMAIN%' ),
				'param_name' => 'arrow_down',
				'dependency' => array( 'element' => 'full_height', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'select',
				// 'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Arrow Style (if set above)', '%TEXTDOMAIN%' ),
				'param_name' => 'arrow_down_style',
				'choices' => array(
					'round' => esc_html__( 'Round', '%TEXTDOMAIN%' ),
					'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
				),
				'dependency' => array( 'element' => 'full_height', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'text',
				// 'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Arrow Caption', '%TEXTDOMAIN%' ),
				'param_name' => 'arrow_down_text',
				'placeholder' => esc_html__( 'Continue', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'full_height', 'value' => array( 'yes' ) ),
			),

			array(
				'type' => 'background',
				'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
				'param_name' => 'background',
				'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
			),

			array(
				'type' => 'select',
				'style' => 'margin-top:-30px;margin-bottom:40px;',
				'label' => esc_html__( 'Background Effect', '%TEXTDOMAIN%' ),
				'param_name' => 'background_effect',
				'choices' => array(
					'' => esc_html__( 'None', '%TEXTDOMAIN%' ),
					'parallax' => esc_html__( 'Parallax', '%TEXTDOMAIN%' ),
				),
				'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
			),

			// array(
			// 	'type' => 'select',
			// 	'style' => 'margin-top:-30px;margin-bottom:40px;',
			// 	'label' => esc_html__( 'Add Parallax', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'parallax',
			// 	'choices' => array(
			// 		'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
			// 		'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
			// 	),
			// 	'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
			// ),

			// array(
			// 	'type' => 'image',
			// 	'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'parallax_img',
			// 	'dependency' => array( 'element' => 'parallax', 'value' => array( 'yes' ) ),
			// ),

			array(
				'type' => 'video_background',
				'label' => esc_html__( 'Video Background', '%TEXTDOMAIN%' ),
				'param_name' => 'video_bg',
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'video' ),
				),
			),

			// array(
			// 	'type' => 'checkbox',
			// 	'label' => esc_html__( 'Video background controls', '%TEXTDOMAIN%' ),
			// 	'param_name' => 'video_bg_controls',
			// 	'dependency' => array( 
			// 		'element' => 'background_type', 
			// 		'value' => array( 'video' ),
			// 	),
			// ),

			array(
				'type' => 'multiple_images',
				'label' => esc_html__( 'Slideshow Images', '%TEXTDOMAIN%' ),
				'param_name' => 'slideshow_img_ids',
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'slideshow' ),
				),
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Slideshow Speed (in ms)', '%TEXTDOMAIN%' ),
				'param_name' => 'slideshow_speed',
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'slideshow' ),
				),
				'value' => 4000,
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Add Overlay', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-last',
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

			array(
				'type' => 'select',
				'label' => esc_html__( 'Advanced Settings', '%TEXTDOMAIN%' ),
				'param_name' => 'show_advanced_settings',
				'choices' => array(
					'hide' => esc_html__( 'Hide', '%TEXTDOMAIN%' ),
					'show' => esc_html__( 'Show', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'slug',
				'label' => esc_html__( 'Extra Class', '%TEXTDOMAIN%' ),
				'param_name' => 'extra_class',
				'placeholder' => '.my-class',
				'description' => esc_html__( 'Optional additional CSS class to add to the section', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_advanced_settings', 'value' => array( 'show' ) ),
			),

			array(
				'type' => 'inline_css',
				'label' => esc_html__( 'Inline Style', '%TEXTDOMAIN%' ),
				'param_name' => 'inline_style',
				'placeholder' => 'margin-top:15px;',
				'description' => esc_html__( 'Additional inline CSS style', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_advanced_settings', 'value' => array( 'show' ) ),
			),
		)
	)
);