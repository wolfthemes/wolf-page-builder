<?php
/**
 * Gist
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'gist' ) ) {
	// oemebed gist
	wpb_add_element(
		array(
			'name' => esc_html__( 'Gist', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display an Embed Gist', '%TEXTDOMAIN%' ),
			'base' => 'gist',
			'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-oembed-gist',
			'params' => array(

				array(
					'type' => 'url',
					'label' => esc_html__( 'Gist URL', '%TEXTDOMAIN%' ),
					'param_name' => 'url',
					'placeholder' => 'https://',
					'display' => true,
				),
			)
		)
	);
}