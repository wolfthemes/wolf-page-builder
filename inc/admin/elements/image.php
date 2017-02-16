<?php
/**
 * Linked image
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_animations, $wpb_image_sizes;

wpb_add_element(
	array(
		'name' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A simple image with link options', '%TEXTDOMAIN%' ),
		'base' => 'wpb_image',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-single-image',
		'params' => array(

			array(
				'type' => 'image',
				'label' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Add Another Image on Hover', '%TEXTDOMAIN%' ),
				'param_name' => 'add_image_hover',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Image on Hover', '%TEXTDOMAIN%' ),
				'param_name' => 'image_hover',
				'dependency' => array( 'element' => 'add_image_hover', 'value' => array( 'yes' ) ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Size', '%TEXTDOMAIN%' ),
				'param_name' => 'image_size',
				'choices' => $wpb_image_sizes,
				'description' => esc_html__( 'Some thumbnail sizes may be cropped version of the original image. You can set the "large", "medium" and "thumbnail" sizes in the WP media settings ', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Hover Effect', '%TEXTDOMAIN%' ),
				'param_name' => 'hover_effect',
				'choices' => array(
					'none' => esc_html__( 'None', '%TEXTDOMAIN%' ),
					'default' => esc_html__( 'Default', '%TEXTDOMAIN%' ),
					'greyscale' => esc_html__( 'Black and white to colored', '%TEXTDOMAIN%' ),
					'to-greyscale' => esc_html__( 'Colored to Black and white', '%TEXTDOMAIN%' ),
					'scale' => esc_html__( 'Scale', '%TEXTDOMAIN%' ),
					'scale-greyscale' => esc_html__( 'Scale + Black and white to colored', '%TEXTDOMAIN%' ),
					'scale-to-greyscale' => esc_html__( 'Scale + Colored to Black and white', '%TEXTDOMAIN%' ),
				),
				'display' => true,
				'description' => esc_html__( 'Note that not all browsers support the black and white effect', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display caption', '%TEXTDOMAIN%' ),
				'param_name' => 'display_caption',
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link_type',
				'display' => true,
				'choices' => array(
					'none' => esc_html__( 'Not linked', '%TEXTDOMAIN%' ),
					'file' => esc_html__( 'Open full size image in a lightbox', '%TEXTDOMAIN%' ),
					'raw-file' => esc_html__( 'Full size image', '%TEXTDOMAIN%' ),
					'attachment' => esc_html__( 'Attachment page', '%TEXTDOMAIN%' ),
					'url' => esc_html__( 'Link to a custom URL', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
				'display' => true,
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'url' ) ),
			),

			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Scroll to anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'scroll_to_anchor',
				'display' => true,
				'dependency' => array( 'element' => 'link_type', 'value' => array( 'url' ) ),
			),
		)
	)
);