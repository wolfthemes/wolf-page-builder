<?php
/**
 * Count down
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Count Down
wpb_add_element(
	array(
		'name' => esc_html__( 'Count Down', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'See the seconds tick down', '%TEXTDOMAIN%' ),
		'base' => 'wpb_countdown',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-count-down',
		'params' => array(

			array(
				'type' => 'text',
				'label' => esc_html__( 'Date', '%TEXTDOMAIN%' ),
				'param_name' => 'date',
				'description' => esc_html__( 'formatted like 12/24/2020 12:00:00', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'text',
				'class' => '',
				'label' => esc_html__( 'UTC Timezone offset', '%TEXTDOMAIN%' ),
				'param_name' => 'offset',
				'description' => esc_html__( 'e.g : -5 for NY', '%TEXTDOMAIN%' ),
				'display' => true,
			),
		)
	)
);