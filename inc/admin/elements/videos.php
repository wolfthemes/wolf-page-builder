<?php
/**
 * Videos plugin
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Videos' ) ) {
	// Video Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Last Videos', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'The last videos from your video gallery', '%TEXTDOMAIN%' ),
			'base' => 'wolf_last_videos',
			'category' => esc_html__( 'Medias', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-videos',
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
}
