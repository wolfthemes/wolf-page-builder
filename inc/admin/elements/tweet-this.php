<?php
/**
 * Tweet this button
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// FB like
wpb_add_element(
	array(
		'name' => esc_html__( 'Tweet This', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'Tweet this button', '%TEXTDOMAIN%' ),
		'tags' => 'twitter',
		'base' => 'wpb_tweet_this',
		'category' => esc_html__( 'Social', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-twitter',
		'params' => array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Button Type', '%TEXTDOMAIN%' ),
				'param_name' => 'type',
				'choices' => array(
					'horizontal' => esc_html__( 'Horizontal', '%TEXTDOMAIN%' ),
					'vertical' => esc_html__( 'Horizontal with count', '%TEXTDOMAIN%' ),
					'none' => esc_html__( 'Vertical with count', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),
		)
	)
);