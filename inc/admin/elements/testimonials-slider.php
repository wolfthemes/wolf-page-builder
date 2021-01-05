<?php
/**
 * Testimonials Slider
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Testimonials container
wpb_add_element(
	array(
		'name' => esc_html__( 'Testimonials Slider', '%TEXTDOMAIN%' ),
		'base' => 'wpb_testimonials',
		'description' => esc_html__( 'Show the feedbacks submitted by your happy customers', '%TEXTDOMAIN%' ),
		'has_child' => true,
		'child' => 'wpb_testimonial',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-testimonials',
		'params' => array(), // params will be added in wpb-elements-additional-settings.php
	)
);

// Testimonial
wpb_add_element(
	array(
		'name' => esc_html__( 'Testimonial', '%TEXTDOMAIN%' ),
		'base' => 'wpb_testimonial',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'nested' => true,
		'parent' => 'wpb_testimonials',
		'icon' => 'wpb-icon wpb-testimonials',
		'params' => array(
			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'value' => wpb_encode_textarea_html( esc_html__( 'I am very happy with everything.', '%TEXTDOMAIN%' ) ),
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Signature', '%TEXTDOMAIN%' ),
				'param_name' => 'name',
				'value' => esc_html__( 'Someone', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Avatar', '%TEXTDOMAIN%' ),
				'param_name' => 'avatar',
			),

			array(
				'type' => 'url',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
			),
		),
	)
);