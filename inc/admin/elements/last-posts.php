<?php
/**
 * Last posts
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$last_posts_params = array(

	array(
		'type' => 'int',
		'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
		'param_name' => 'count',
		'description' => esc_html__( 'Number of post to display', '%TEXTDOMAIN%' ),
		'placeholder' => 3,
		'display' => true,
	),

	array(
		'type' => 'text',
		'label' => esc_html__( 'Post IDs', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'By default, your last posts will be displayed. You can choose the posts you want to display by entering a list of IDs separated by a comma.', '%TEXTDOMAIN%' ),
		'param_name' => 'ids',
		'display' => true,
	),

	array(
		'type' => 'text',
		'label' => esc_html__( 'Exclude Post IDs', '%TEXTDOMAIN%' ),
		'description' => esc_html__( 'You can choose the posts you don\'t want to display by entering a list of IDs separated by a comma.', '%TEXTDOMAIN%' ),
		'param_name' => 'exclude_ids',
		'display' => true,
	),

	array(
		'type' => 'text',
		'label' => esc_html__( 'Category', '%TEXTDOMAIN%' ),
		'param_name' => 'category',
		'description' => esc_html__( 'Include only one or several categories. Paste category slug(s) separated by a comma', '%TEXTDOMAIN%' ),
		'placeholder' => esc_html__( 'my-category, other-category', '%TEXTDOMAIN%' ),
	),

	array(
		'type' => 'text',
		'label' => esc_html__( 'Tags', '%TEXTDOMAIN%' ),
		'param_name' => 'tag',
		'description' => esc_html__( 'Include only one or several tags. Paste tag slug(s) separated by a comma', '%TEXTDOMAIN%' ),
		'placeholder' => esc_html__( 'my-tag, other-tag', '%TEXTDOMAIN%' ),
	),

	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Hide Category', '%TEXTDOMAIN%' ),
		'param_name' => 'hide_category',
		'class' => 'wpb-col-6 wpb-first',
	),

	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Hide Tags', '%TEXTDOMAIN%' ),
		'param_name' => 'hide_tag',
		'class' => 'wpb-col-6 wpb-last',
	),

	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Hide Thumbnail Image', '%TEXTDOMAIN%' ),
		'param_name' => 'hide_cover',
		'class' => 'wpb-col-6 wpb-first',
	),

	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Hide Author', '%TEXTDOMAIN%' ),
		'param_name' => 'hide_author',
		'class' => 'wpb-col-6 wpb-last',
	),

	array(
		'type' => 'checkbox',
		'label' => esc_html__( 'Hide Text', '%TEXTDOMAIN%' ),
		'param_name' => 'hide_summary',
	),
);

// Posts slider
wpb_add_element(
	array(
		'name' => esc_html__( 'Posts Slider', '%TEXTDOMAIN%' ),
		'base' => 'wpb_posts_slider',
		'description' => esc_html__( 'Display your last posts in a slider', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Sliders', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-posts-slider',
		'params' => array(),
	)
);
wpb_inject_param( 'wpb_posts_slider', $last_posts_params );

// Posts preview
wpb_add_element(
	array(
		'name' => esc_html__( 'Posts Preview', '%TEXTDOMAIN%' ),
		'base' => 'wpb_posts_preview',
		'description' => esc_html__( 'Display a sneak peak or your last posts', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-posts',
		'params' => array(),
	)
);
wpb_inject_param( 'wpb_posts_preview', $last_posts_params );

// Posts columns
wpb_add_element(
	array(
		'name' => esc_html__( 'Posts Columns', '%TEXTDOMAIN%' ),
		'base' => 'wpb_posts_columns',
		'description' => esc_html__( 'Display your last posts in columns', '%TEXTDOMAIN%' ),
		'category' => esc_html__( 'Content', '%TEXTDOMAIN%' ),
		'icon' => 'wpb-icon wpb-posts',
		'params' => array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'description' => esc_html__( 'Number of column to display', '%TEXTDOMAIN%' ),
				'display' => true,
				'choices' => array(
					3,2,4,5,6
				),
			),
		),
	)
);
wpb_inject_param( 'wpb_posts_columns', $last_posts_params );