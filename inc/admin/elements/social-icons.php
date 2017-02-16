<?php
/**
 * Social icons
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Social icons
wpb_add_element(
	array(
		'name' => esc_html__( 'Social Icons', '%TEXTDOMAIN%' ),
		'base' => 'wpb_socials',
		'icon' => 'wpb-icon wpb-social-icons',
		'description' => esc_html__( 'A set of icons linked to your social profiles', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Social', '%TEXTDOMAIN%' ),
		'params' => array(

			array(
				'type' => 'text',
				'label' => esc_html__( 'Services', '%TEXTDOMAIN%' ),
				'param_name' => 'services',
				'placeholder' => 'facebook,twitter,instagram',
				'description' => sprintf(
					wp_kses(
						__( 'Enter the service names separated by a comma. Leave empty to display them all.<br>You can set your profiles in the <a href="%s" target="_blank">plugin settings</a>.', '%TEXTDOMAIN%' ),
						array( 'br' => array(), 'a' => array( 'href' => array(), 'target' => array() ) )
					),
					esc_url( admin_url( 'admin.php?page=wpb-settings' ) )
				),
				'display' => true,
			),

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
				'label' => esc_html__( 'Icon color', '%TEXTDOMAIN%' ),
				'param_name' => 'icon_color',
				'display' => true,
			),
		)
	)
);