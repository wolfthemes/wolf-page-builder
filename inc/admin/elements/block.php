<?php
/**
 *  Block
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Block
wpb_add_element(
	array(
		'name' => esc_html__( 'Block', '%TEXTDOMAIN%' ),
		'base' => 'block',
		'icon' => 'wpb-icon wpb-section-columns',
		'params' => array(

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-first',
				'label' => esc_html__( 'Content Type', '%TEXTDOMAIN%' ),
				'param_name' => 'content_type',
				'choices' => array(
					'text' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
					'media' => esc_html__( 'Media (no padding)', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'class' => 'wpb-col-6 wpb-last',
				'label' => esc_html__( 'Main Color Tone', '%TEXTDOMAIN%' ),
				'param_name' => 'skin',
				'choices' => array(
					'dark' => esc_html__( 'Light', '%TEXTDOMAIN%' ),
					'light' => esc_html__( 'Dark', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Background Type', '%TEXTDOMAIN%' ),
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
				'type' => 'background',
				'label' => esc_html__( 'Background', '%TEXTDOMAIN%' ),
				'param_name' => 'background',
				'dependency' => array( 'element' => 'background_type', 'value' => array( 'image' ) ),
			),

			array(
				'type' => 'video_background',
				'label' => esc_html__( 'Video Background', '%TEXTDOMAIN%' ),
				'param_name' => 'video_bg',
				'dependency' => array( 
					'element' => 'background_type', 
					'value' => array( 'video' ),
				),
			),

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
		)
	)
);