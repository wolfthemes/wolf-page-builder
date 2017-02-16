<?php
/**
 * Video
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Video
wpb_add_element(
	array(
		'name' => esc_html__( 'Video', '%TEXTDOMAIN%' ),
		'base' => 'wpb_video',
		'description' => esc_html__( 'An embed video', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-video',
		'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
		'tags' => 'embed',
		'params' => array(

			array(
				'type' => 'url',
				'label' => esc_html__( 'Video URL', '%TEXTDOMAIN%' ),
				'param_name' => 'url',
				'placeholder' => 'https://vimeo.com/30391286',
				'description' => sprintf( wp_kses(
					__( 'Link to the video. More about supported formats at <a href="%s" target="_blank">WordPress codex page.</a>', '%TEXTDOMAIN%' ),
						array( 'a' => array( 'href' => array() ) )
					),
					'http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F'
				),
				'display' => true,
			),
		),
	)
);