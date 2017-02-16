<?php
/**
 * Video opener
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Video opener
wpb_add_element(
	array(
		'name' => esc_html__( 'Video Opener', '%TEXTDOMAIN%' ),
		'base' => 'wpb_video_opener',
		'description' => esc_html__( 'Open a video in a overlay', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-video',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'select',
				'label' => esc_html__( 'Custom Play Button', '%TEXTDOMAIN%' ),
				'param_name' => 'custom_play_button',
				'choices' => array(
					'' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Button Image', '%TEXTDOMAIN%' ),
				'param_name' => 'button_image',
				'description' => esc_html__( 'If empty, a standard play button will be displayed', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'custom_play_button', 'value' => array( 'yes' ) ),
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
				'type' => 'url',
				'label' => esc_html__( 'Video URL', '%TEXTDOMAIN%' ),
				'param_name' => 'video_url',
				'placeholder' => 'https://vimeo.com/124894010',
				'description' => sprintf( 
					esc_html__( 'Support %1$s and %2$s', '%TEXTDOMAIN%' ),
					'YouTube',
					'Vimeo'
				),
				'display' => true,
			),
		),
	)
);