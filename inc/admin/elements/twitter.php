<?php
/**
 * Twitter plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Twitter' ) ) {

	// Twitter Shortcode
	wpb_add_element(
		array(
			'name' => esc_html__( 'Last Tweets', '%TEXTDOMAIN%' ),
			'base' => 'wolf_tweet',
			'description' => esc_html__( 'Your last tweets', '%TEXTDOMAIN%' ),
			'tags' => 'twitter',
			'category' => esc_html__( 'Social', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-twitter',
			'params' => array(

				array(
					'type' => 'text',
					'label' => esc_html__( 'Username', '%TEXTDOMAIN%' ),
					'param_name' => 'username',
					'value' => wpb_get_twitter_usename(),
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Type', '%TEXTDOMAIN%' ),
					'param_name' => 'type',
					'choices' => array(
						'single' => esc_html__( 'single', '%TEXTDOMAIN%' ),
						'list' => esc_html__( 'list', '%TEXTDOMAIN%' ),
					),
					'display' => true,
				),

				array(
					'type' => 'int',
					'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
					'param_name' => 'count',
					'value' => 3,
					'dependency' => array( 'element' => 'type', 'value' => array( 'list' ) ),
					'display' => true,
				),
			)
		)
	);
}