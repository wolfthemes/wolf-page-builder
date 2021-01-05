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

if ( class_exists( 'Wolf_Tour_Dates' ) ) {
	wpb_add_element(
		array(
			'name' => esc_html__( 'Tour Dates', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'Display your event list from the Wolf Tour Dates plugin', '%TEXTDOMAIN%' ),
			'base' => 'wolf_tour_dates',
			'category' => 'Music',
			'icon' => 'wpb-icon wpb-tour-dates',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 10,
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Link to Single Show Page', '%TEXTDOMAIN%' ),
					'param_name' => 'link',
					'choices' => array(
						'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
						'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					),
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Display Past Shows', '%TEXTDOMAIN%' ),
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
			)
		)
	);

	wpb_add_element(
		array(
			'name' => esc_html__( 'Tour Dates Widget', '%TEXTDOMAIN%' ),
			'base' => 'wolf_upcoming_shows_widget',
			'description' => esc_html__( 'Events list widget', '%TEXTDOMAIN%' ),
			'category' => 'Music',
			'icon' => 'wpb-icon wpb-tour-dates',
			'params' => array(

				array(
					'type' => 'hidden',
					'param_name' => 'linked',
					'value' => 'false',
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 8,
					'display' => true,
				),

				array(
					'type' => 'url',
					'label' => esc_html__( 'Tour Dates Page URL', '%TEXTDOMAIN%' ),
					'param_name' => 'page_url',
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Link Text', '%TEXTDOMAIN%' ),
					'param_name' => 'link_text',
					'value' => esc_html__( 'View all dates', '%TEXTDOMAIN%' ),
					'display' => true,
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Artist Slug', '%TEXTDOMAIN%' ),
					'param_name' => 'artist',
				),
			)
		)
	);
}