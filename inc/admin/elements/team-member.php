<?php
/**
 * Team member
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpb_animations;

wpb_add_element(
	array(
		'name' => esc_html__( 'Team Member', '%TEXTDOMAIN%' ),
		'base' => 'wpb_team_member',
		'icon' => 'wpb-icon wpb-team-member',
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'tags' => 'team band',
		'description' => esc_html__( 'Present your staff members', '%TEXTDOMAIN%' ),
		'params' => array(
			array(
				'type' => 'image',
				'label' => esc_html__( 'Photo', '%TEXTDOMAIN%' ),
				'param_name' => 'image',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Size', '%TEXTDOMAIN%' ),
				'param_name' => 'image_size',
				'choices' => $wpb_image_sizes,
				'description' => esc_html__( 'You can set the "large", "medium" and "thumbnail" sizes in the WP media settings ', '%TEXTDOMAIN%' ),
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Name', '%TEXTDOMAIN%' ),
				'param_name' => 'name',
				'display' => true,
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Role', '%TEXTDOMAIN%' ),
				'param_name' => 'role',
				'display' => true,
			),

			array(
				'type' => 'textarea',
				'label' => esc_html__( 'Description', '%TEXTDOMAIN%' ),
				'param_name' => 'tagline',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Image Style', '%TEXTDOMAIN%' ),
				'param_name' => 'image_style',
				'choices' => array(
					'default' => esc_html__( 'default', '%TEXTDOMAIN%' ),
					'round' => esc_html__( 'round', '%TEXTDOMAIN%' ),
					'shadow' => esc_html__( 'shadow', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Text Alignment', '%TEXTDOMAIN%' ),
				'param_name' => 'alignment',
				'choices' => array(
					'center' => esc_html__( 'center', '%TEXTDOMAIN%' ),
					'left' => esc_html__( 'left', '%TEXTDOMAIN%' ),
					'right' => esc_html__( 'right', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Title Tag', '%TEXTDOMAIN%' ),
				'param_name' => 'title_tag',
				'choices' => array(
					'h3',
					'span',
					'h1',
					'h2',
					'h4',
					'h5',
					'h6',
				),
			),
		)
	)
);

wpb_inject_param( 'wpb_team_member', array(
		array(
			'type' => 'select',
			'label' => esc_html__( 'Add Social Profiles', '%TEXTDOMAIN%' ),
			'param_name' => 'show_socials',
			'choices' => array(
				'hide' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				'show' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
			),
		),
	)
);

global $wpb_team_member_socials;

$add_params = array();
foreach ( $wpb_team_member_socials as $social ) {
	$add_params[] = array(
		'type' => 'url',
		'label' => $social,
		'param_name' => $social,
		'placeholder' => 'http://',
		'dependency' => array( 'element' => 'show_socials', 'value' => array( 'show' ) ),
	);
}
wpb_inject_param( 'wpb_team_member', $add_params );