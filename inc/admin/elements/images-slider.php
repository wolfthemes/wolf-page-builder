<?php
/**
 * Images slider
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
		'name' => esc_html__( 'Image Slider', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'An elegant image slideshow', '%TEXTDOMAIN%' ),
		'base' => 'wpb_slider',
		'category' => esc_html__( 'Sliders', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-images-slider',
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
					'default' => esc_html__( 'None', '%TEXTDOMAIN%' ),
					'desktop' => esc_html__( 'Desktop Screen', '%TEXTDOMAIN%' ),
					'laptop' => esc_html__( 'Laptop Screen', '%TEXTDOMAIN%' ),
					'tablet' => esc_html__( 'Tablet Screen', '%TEXTDOMAIN%' ),
					'mobile' => esc_html__( 'Mobile Screen', '%TEXTDOMAIN%' ),
				),
				'description' => esc_html__( 'If you choose a custom layout your image may be cropped.', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		)
	)
);