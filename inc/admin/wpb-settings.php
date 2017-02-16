<?php
/**
 * %NAME% Plugin Settings
 *
 * 
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// delete_option( 'wpb_settings' );

$social_fields = array();

$wpb_socials = wpb_get_socials();

//debug( $wpb_socials );

foreach ( $wpb_socials as $social ) {
	$no_http = array( 'skype' );
	
	if ( in_array( $social, $no_http ) ) {
		$type = 'text';
		$placeholder = '';
	} else {
		$type = 'url';
		$placeholder = 'http://';
	}
	
	$social_fields[] = array(
		'type' => $type,
		'field_id' => $social,
		'label' => ucfirst( $social ) . ' URL',
		'placeholder' => $placeholder,
	);
}

/**
 * WPB settings panel
 */
$wpb_settings = array(

	// Main settings
	array(
		'title' => esc_html__( 'Settings', '%TEXTDOMAIN%' ),
		'settings_id' => 'wpb-settings',
		'settings_slug' => 'settings',
		'fields' => array(

			array(
				'type' => 'select',
				'field_id' => 'lightbox',
				'label' => esc_html__( 'Lightbox', '%TEXTDOMAIN%' ),
				'choices' => array(
					'swipebox' => 'swipebox',
					'fancybox' => 'fancybox',
					'' => esc_html__( 'None', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'checkbox',
				'field_id' => 'do_lazyload',
				'label' => esc_html__( 'Enable lazyload for image galleries', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'checkbox',
				'field_id' => 'do_animation_mobile',
				'label' => esc_html__( 'Enable animation on mobile devices', '%TEXTDOMAIN%' ),
			),
		),
	),

	array(
		'title' => esc_html__( 'MailChimp', '%TEXTDOMAIN%' ),
		'settings_id' => 'wpb-mailchimp',
		'settings_slug' => 'mailchimp',
		'fields' => array(
			array(
				'type' => 'text',
				'field_id' => 'mailchimp_api_key',
				'label' => esc_html__( 'MailChimp API key', '%TEXTDOMAIN%' ),
				'description' => esc_html__( 'Your MailChimp API can be found in your MailChimp profile -> account -> extras -> API keys', '%TEXTDOMAIN%' ),
				'placeholder' => '565b514d72e6fd8875u04884069721c1-us6',
			),

			array(
				'type' => 'text',
				'field_id' => 'default_mailchimp_list_id',
				'label' => esc_html__( 'Default MailChimp list ID', '%TEXTDOMAIN%' ),
				'description' => esc_html__( 'It can be found in your MailChimp account -> Lists -> Your List Name -> Settings -> List Name & default', '%TEXTDOMAIN%' ),
				'placeholder' => 'eg7ab65dc8',
			),

			array(
				'type' => 'text',
				'field_id' => 'label',
				'label' => esc_html__( 'Newsletter form title', '%TEXTDOMAIN%' ),
				'placeholder' => esc_html__( 'Subscribe to our newsletter', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'field_id' => 'subscribe_text',
				'label' => esc_html__( '"Subscribe" button text', '%TEXTDOMAIN%' ),
				'placeholder' => esc_html__( 'Subscribe', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'text',
				'field_id' => 'placeholder',
				'label' => esc_html__( 'Form input placeholder', '%TEXTDOMAIN%' ),
				'placeholder' => esc_html__( 'e.g: your email', '%TEXTDOMAIN%' ),
			),

			array(
				'type' => 'image',
				'field_id' => 'background',
				'label' => esc_html__( 'Background image', '%TEXTDOMAIN%' ),
			),
		),
	),

	// Goggle fonts
	array(
		'title' => esc_html__( 'Fonts Loader', '%TEXTDOMAIN%' ),
		'settings_id' => 'wpb-fonts',
		'settings_slug' => 'fonts',
		'fields' => array(
			array(
				'type' => 'text',
				'field_id' => 'google_fonts',
				'label' => esc_html__( 'Google fonts', '%TEXTDOMAIN%' ),
				'placeholder' => 'Roboto:400,700|Lora:400,700',
				'description' => wp_kses(
					sprintf(
						__( '<a href="%s" target="_blank">Find GoogleFonts</a>', '%TEXTDOMAIN%' ), 'https://www.google.com/fonts'
					),
					array(
						'a' => array(
							'href' => array(),
							'target' => array(),
						)
					)
				),
			),
		),
	),

	// Social profiles
	array(
		'title' => esc_html__( 'Social Profiles', '%TEXTDOMAIN%' ),
		'settings_id' => 'wpb-socials',
		'settings_slug' => 'socials',
		'fields' => $social_fields,
	)
);

return new WPB_Settings( $wpb_settings );