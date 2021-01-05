<?php
/**
 * Socials dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Socials', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'services',
		'label' => esc_html__( 'Services', '%TEXTDOMAIN%' ),
		'desc' => wp_kses(
			__( 'Leave empty to display them all.<br>* See the social networks available in the plugin options.', '%TEXTDOMAIN%' ),
			array( 'br' => array() )
		),
		'placeholder' => 'facebook,twitter',
	),

	array(
		'id' => 'type',
		'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'normal' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
			'circle' => esc_html__( 'Circle', '%TEXTDOMAIN%' ),
			'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
		),
	),

	array(
		'id' => 'size',
		'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'1x' => esc_html__( 'Small', '%TEXTDOMAIN%' ),
			'2x' => esc_html__( 'Medium', '%TEXTDOMAIN%' ),
			'3x' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
			'4x' => esc_html__( 'Very Large', '%TEXTDOMAIN%' ),
		),
	),
);
echo wpb_generate_tinymce_popup( 'wpb_socials', $params, $title );