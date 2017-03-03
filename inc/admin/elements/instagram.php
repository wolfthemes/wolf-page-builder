<?php
/**
 * Instagram plugin
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Instagram' ) ) {
	// Instagram Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Instagram Gallery', '%TEXTDOMAIN%' ),
			'base' => 'wolf_instagram_gallery',
			'description' => esc_html__( 'Your last instagram photos', '%TEXTDOMAIN%' ),
			'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-instagram',
			'params' => array(
				array(
					'type' => 'int',
					'label' => esc_html__( 'Image Count', '%TEXTDOMAIN%' ),
					'description' => esc_html__( 'Note that the instagram API may limit the number of image to display.', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 18,
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
					'param_name' => 'columns',
					'choices' => array( 6, 4, 3, 2 ),
					'display' => true,
				),

				array(
					'type' => 'checkbox',
					'label' => esc_html__( 'Display follow button', '%TEXTDOMAIN%' ),
					'param_name' => 'button',
					'display' => true,
				),
			)
		)
	);
}
