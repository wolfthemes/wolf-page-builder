<?php
/**
 * Comparison Images Slider
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_image_sizes;

wpb_add_element(
	array(
		'name' => esc_html__( 'Comparison Images Slider', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A before and after images slider', '%TEXTDOMAIN%' ),
		'base' => 'wpb_comparison_images_slider',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-single-image',
		'params' => array(

			array(
				'type' => 'image',
				'label' => esc_html__( 'Before Image', '%TEXTDOMAIN%' ),
				'param_name' => 'before_image',
				'display' => true,
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'After Image', '%TEXTDOMAIN%' ),
				'param_name' => 'after_image',
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
		)
	)
);