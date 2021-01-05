<?php
/**
 * MailChimp
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wpb_add_element(
	array(
		'name' => esc_html__( 'MailChimp', '%TEXTDOMAIN%' ),
		'base' => 'wpb_mailchimp',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Newsletter subscription form', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-mailchimp',
		'params' => array(
			array(
				'label' => esc_html__( 'List ID', '%TEXTDOMAIN%' ),
				'param_name' => 'list',
				'description' => esc_html__( 'It can be found in your MailChimp account -> Lists -> Your List Name -> Settings -> List Name & default', '%TEXTDOMAIN%' ),
				'value' => wpb_get_option( 'mailchimp', 'default_mailchimp_list_id' ),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Background', '%TEXTDOMAIN%' ),
				'description' => esc_html__( 'You can set a background in the MailChimp plugin settings.', '%TEXTDOMAIN%' ),
				'param_name' => 'use_bg',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
				'param_name' => 'size',
				'choices' => array(
					'normal' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
					'large' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'text_alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
		),
	)
);