<?php
/**
 * Mailchimp dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Mailchimp signup', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'list',
		'label' => esc_html__( 'List', '%TEXTDOMAIN%' ),
		'desc' => esc_html__( 'Your mailchimp list ID.', '%TEXTDOMAIN%' ),
		'placeholder' => 'mb0sd78fg8',
	),

	array(
		'id' => 'size',
		'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'normal' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
			'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
		),
	),

	array(
		'id' => 'submit',
		'label' => esc_html__( 'Submit', '%TEXTDOMAIN%' ),
		'placeholder' => 'Submit',
	),
);
echo wpb_generate_tinymce_popup( 'wpb_mailchimp', $params, $title );