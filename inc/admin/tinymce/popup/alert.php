<?php
/**
 * Notification dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Notification', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'message',
		'label' => esc_html__( 'Message', '%TEXTDOMAIN%' ),
		'placeholder' => esc_html__( 'Your notification message', '%TEXTDOMAIN%' )
	),

	array(
		'id' => 'type',
		'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'success' => esc_html__( 'success', '%TEXTDOMAIN%' ),
			'info' => esc_html__( 'info', '%TEXTDOMAIN%' ),
			'tip' => esc_html__( 'tip', '%TEXTDOMAIN%' ),
			'error' => esc_html__( 'error', '%TEXTDOMAIN%' ),
		),
	)
);
echo wpb_generate_tinymce_popup( 'wpb_alert_message', $params, $title );