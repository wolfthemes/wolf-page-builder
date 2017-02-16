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
		'name' => esc_html__( 'Linked Image', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A linked image with a text overlay', '%TEXTDOMAIN%' ),
		'base' => 'wpb_image_link',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-image-link',
		'params' => array(

			array(
				'type' => 'image',
				'label' => esc_html__( 'Image', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
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
				'label' => esc_html__( 'Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'text_alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Style', '%TEXTDOMAIN%' ),
				'param_name' => 'image_style',
				'choices' => array(
					'default' => esc_html__( 'default', '%TEXTDOMAIN%' ),
					'wpb-round' => esc_html__( 'rounded', '%TEXTDOMAIN%' ),
					'wpb-shadow' => esc_html__( 'shadow', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Frame Style', '%TEXTDOMAIN%' ),
				'param_name' => 'frame_style',
				'choices' => array(
					'' => esc_html__( 'none', '%TEXTDOMAIN%' ),
					'wpb-frame-border' => esc_html__( 'border', '%TEXTDOMAIN%' ),
				),
				'display' => true,
				//'dependency' => array( 'element' => 'image_style', 'value' => array( 'default' ) ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
				'param_name' => 'text',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Tagline', '%TEXTDOMAIN%' ),
				'param_name' => 'secondary_text',
				'display' => true,
			),

			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Tagline as Button', '%TEXTDOMAIN%' ),
				'param_name' => 'secondary_text_button',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'text_tag',
				'choices' => array(
					'h3',
					'span',
					'h5',
					'h4',
					'h2',
					'h1',
				),
				// 'description' => '',
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Text Color', '%TEXTDOMAIN%' ),
				'param_name' => 'text_color',
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Overlay Color', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay_color',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Overlay Opacity in Percent', '%TEXTDOMAIN%' ),
				'param_name' => 'overlay_opacity',
				'display' => true,
			),

			array(
				'type' => 'link',
				'label' => esc_html__( 'Link', '%TEXTDOMAIN%' ),
				'param_name' => 'link',
				'placeholder' => 'http://',
				'display' => true,
			),
		)
	)
);