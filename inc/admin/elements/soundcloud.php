<?php
/**
 * Soundcloud
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Soundcloud
wpb_add_element(
	array(
		'name' => esc_html__( 'Soundcloud', '%TEXTDOMAIN%' ),
		'base' => 'wpb_soundcloud',
		'description' => esc_html__( 'An embed Soundcloud playlist or song', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-soundcloud',
		'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'url',
				'label' => esc_html__( 'Playlist or Song URL', '%TEXTDOMAIN%' ),
				'param_name' => 'url',
				'placeholder' => 'https://',
				'display' => true,
			),
		),
	)
);