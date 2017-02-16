<?php
/**
 * Video carousel
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Video carousel
wpb_add_element(
	array(
		'name' => esc_html__( 'Video Carousel', '%TEXTDOMAIN%' ),
		'base' => 'wpb_video_carousel',
		'description' => esc_html__( 'A list of videos displayed in a carousel', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-video',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Video URLs', '%TEXTDOMAIN%' ),
				'param_name' => 'urls',
				'placeholder' => '',
				'description' => esc_html__( 'Enter your YouTube or Vimeo URLs separated by a comma.', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		),
	)
);