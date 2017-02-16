<?php
/**
 * Discography Plugin
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Discography' ) ) {
	// Discography Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Last Releases', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display your discography', '%TEXTDOMAIN%' ),
			'base' => 'wolf_last_releases',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'tags' => 'discography',
			'icon' => 'wpb-icon wpb-releases',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 3,
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
					'param_name' => 'col',
					'choices' => array( 3,2,4 ),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Label', '%TEXTDOMAIN%' ),
					'param_name' => 'label',
					'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Band', '%TEXTDOMAIN%' ),
					'param_name' => 'band',
					'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
					'display' => true,
				),
			)
		)
	);

	wpb_add_element(
		array(
			'name' => esc_html__( 'Last Release', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display your last release', '%TEXTDOMAIN%' ),
			'base' => 'wolf_last_release',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'tags' => 'discography',
			'icon' => 'wpb-icon wpb-releases',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Label', '%TEXTDOMAIN%' ),
					'param_name' => 'label',
					'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Band', '%TEXTDOMAIN%' ),
					'param_name' => 'band',
					'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
					'display' => true,
				),

				// array(
				// 	'label' => esc_html__( 'Show title', '%TEXTDOMAIN%' ),
				// 	'class' => 'wpb-col-6 wpb-first',
				// 	'type' => 'checkbox',
				// 	'param_name' => 'display_title',
				// 	'value' => 'true',
				// ),

				// array(
				// 	'label' => esc_html__( 'Show buttons', '%TEXTDOMAIN%' ),
				// 	'class' => 'wpb-col-6 wpb-first',
				// 	'type' => 'checkbox',
				// 	'param_name' => 'display_button',
				// 	'value' => 'true',
				// ),
			)
		)
	);
}