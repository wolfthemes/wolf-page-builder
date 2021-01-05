<?php
/**
 * Albums plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Albums' ) ) {
	// Albums Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Albums', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Showcase your photos sorted by albums', '%TEXTDOMAIN%' ),
			'tags' => 'photo',
			'base' => 'wolf_last_albums',
			'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-albums',
			'params' => array(

				array(
					'type' => 'int',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 4,
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
					'param_name' => 'col',
					'choices' => array( 4,3,2 ),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Category', '%TEXTDOMAIN%' ),
					'param_name' => 'category',
					'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
					'display' => true,
				),
			)
		)
	);

	// Last Photos Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Photos Widget (last photos)', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display the last photos uploaded in your albums', '%TEXTDOMAIN%' ),
			'base' => 'wolf_last_photos_widget',
			'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-albums',
			'params' => array(

				array(
					'type' => 'int',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 4,
					'display' => true,
				),
			)
		)
	);
}