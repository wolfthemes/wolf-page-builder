<?php
/**
 * Notifications
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// message box
wpb_add_element(
	array(
		'name' => esc_html__( 'Notification', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'A message box', '%TEXTDOMAIN%' ),
		'base' => 'wpb_notification',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'tags' => 'alert info message error box',
		'icon' => 'wpb-icon wpb-notification',
		'params' => array(

			array(
				'type' => 'select',
				'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
				'param_name' => 'type',
				'choices' => array(
					'success' => esc_html__( 'Success', '%TEXTDOMAIN%' ),
					'info' => esc_html__( 'Info', '%TEXTDOMAIN%' ),
					'alert' => esc_html__( 'Alert', '%TEXTDOMAIN%' ),
					'error' => esc_html__( 'Error', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'textarea',
				'holder' => 'div',
				'label' => esc_html__( 'Message', '%TEXTDOMAIN%' ),
				'param_name' => 'message',
				'value' => esc_html__( 'This is a notification message.', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Display Icon', '%TEXTDOMAIN%' ),
				'param_name' => 'display_icon',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Allow the visitor to dismiss the message', '%TEXTDOMAIN%' ),
				'param_name' => 'close',
				'choices' => array(
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
		),
	)
);