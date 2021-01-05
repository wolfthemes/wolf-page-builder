<?php
/**
 * Images gallery
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wpb_add_element(
	array(
		'name' => esc_html__( 'Image Gallery', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A set of images', '%TEXTDOMAIN%' ),
		'base' => 'wpb_gallery',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-images-gallery',
		'params' => array(

			array(
				'type' => 'multiple_images',
				'label' => esc_html__( 'Images', '%TEXTDOMAIN%' ),
				'param_name' => 'ids',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Layout', '%TEXTDOMAIN%' ),
				'param_name' => 'layout',
				'choices' => array(
					'simple' => esc_html__( 'Simple', '%TEXTDOMAIN%' ),
					'mosaic' => esc_html__( 'Mosaic', '%TEXTDOMAIN%' ),
					'carousel' => esc_html__( 'Carousel', '%TEXTDOMAIN%' ),
				),
				'description' => esc_html__( 'For the mosaic gallery layout a multiple of 12 images is recommended. Uploaded images must be 960x960px minimum.', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Size', '%TEXTDOMAIN%' ),
				'param_name' => 'image_size',
				'choices' => $wpb_image_sizes,
				'description' => esc_html__( 'Some thumbnail sizes may be cropped version of the original image. You can set the "large", "medium" and "thumbnail" sizes in the WP media settings ', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'layout', 'value' => array( 'simple', 'carousel' ) ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					4,1,2,3,5,6
				),
				'dependency' => array( 'element' => 'layout', 'value' => array( 'simple' ) ),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Padding', '%TEXTDOMAIN%' ),
				'param_name' => 'padding',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'dependency' => array( 'element' => 'layout', 'value' => array( 'simple', 'carousel' ) ),
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
				'type' => 'select',
				'label' => esc_html__( 'Link Type', '%TEXTDOMAIN%' ),
				'param_name' => 'link_type',
				'choices' => array(
					'file' => esc_html__( 'Open full size image in a lightbox', '%TEXTDOMAIN%' ),
					'raw-file' => esc_html__( 'Full size image', '%TEXTDOMAIN%' ),
					'attachment' => esc_html__( 'Attachment page', '%TEXTDOMAIN%' ),
					'none' => esc_html__( 'Not linked', '%TEXTDOMAIN%' ),
				),
			),
		)
	)
);