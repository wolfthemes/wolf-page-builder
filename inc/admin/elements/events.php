<?php
/**
 * Tour Dates Plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Events' ) ) {
	wpb_add_element(
		array(
			'name' => esc_html__( 'Event List', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display your event list from the Wolf Events plugin', '%TEXTDOMAIN%' ),
			'base' => 'wolf_event_list',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-events',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'description' => esc_html__( 'Leave empty to display all', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Link to Single Event Page', '%TEXTDOMAIN%' ),
					'param_name' => 'link',
					'choices' => array(
						'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
						'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					),
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Display Past Events', '%TEXTDOMAIN%' ),
					'param_name' => 'past',
					'choices' => array(
						'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
						'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Artist Slug', '%TEXTDOMAIN%' ),
					'param_name' => 'artist',
					'display' => true,
				),
			),
		)
	);
}