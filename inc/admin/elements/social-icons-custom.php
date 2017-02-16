<?php
/**
 * Social icons custom
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $wpb_team_member_socials;

// Social icons custom
wpb_add_element(
	array(
		'name' => esc_html__( 'Social Icons Custom URLs', '%TEXTDOMAIN%' ),
		'base' => 'wpb_socials_custom',
		'icon' => 'wpb-icon wpb-social-icons',
		'description' => esc_html__( 'A set of icons linked to your chosen URLs', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Social', '%TEXTDOMAIN%' ),
		'params' => array(
			

			array(
				'type' => 'select',
				'label' => esc_html__( 'Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'Center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
				'param_name' => 'type',
				'choices' => array(
					'normal' => esc_html__( 'Normal', '%TEXTDOMAIN%' ),
					'circle' => esc_html__( 'Circle', '%TEXTDOMAIN%' ),
					'square' => esc_html__( 'Square', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
				'param_name' => 'size',
				'choices' => array(
					'2x' => esc_html__( 'Medium', '%TEXTDOMAIN%' ),
					'1x' => esc_html__( 'Small', '%TEXTDOMAIN%' ),
					'3x' => esc_html__( 'Large', '%TEXTDOMAIN%' ),
					'4x' => esc_html__( 'Very Large', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Target', '%TEXTDOMAIN%' ),
				'param_name' => 'target',
				'choices' => array(
					'',
					'_self',
					'_blank',
					'_parent',
				),
				'display' => true,
			),

			array(
				'type' => 'colorpicker',
				'label' => esc_html__( 'Icon Color', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_color',
				'display' => true,
			),
		)
	)
);

$add_params = array();
foreach ( $wpb_team_member_socials as $social ) {
	$add_params[] = array(
		'type' => 'url',
		'label' => $social,
		'param_name' => $social,
		'placeholder' => 'http://',
	);
}
wpb_inject_param( 'wpb_socials_custom', $add_params );