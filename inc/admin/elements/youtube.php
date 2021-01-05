<?php
/**
 * Youtube video
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Youtube
wpb_add_element(
	array(
		'name' => esc_html__( 'YouTube Video', '%TEXTDOMAIN%' ),
		'base' => 'wpb_youtube',
		'description' => esc_html__( 'A youtube video with video preview', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-youtube',
		'params' => array(
			array(
				'type' => 'url',
				'label' => esc_html__( 'YouTube Video URL', '%TEXTDOMAIN%' ),
				'param_name' => 'url',
				'placeholder' => 'https://www.youtube.com/watch?v=fKBweD2hyf4',
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'placeholder' => esc_html__( 'My video title', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'image',
				'label' => esc_html__( 'Cover Image', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
				'display' => true,
			),

			array(
				'type' => 'file_video',
				'label' => esc_html__( 'Video Preview', '%TEXTDOMAIN%' ),
				'param_name' => 'video_preview',
				'description' => esc_html__( 'A short mp4 video file', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		),
	)
);