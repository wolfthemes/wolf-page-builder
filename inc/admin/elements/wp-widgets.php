<?php
/**
 * WP Widgets Elements
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// debug( wpb_get_wp_widgets() )

// pages, calendar, archives, meta, categories, recent-posts, recent-comments, rss, tag_cloud

foreach ( wpb_get_wp_widgets() as $widget ) {
	
	$base = $widget->id_base;
	$name = $widget->name;
	$description = $widget->widget_options['description'];

	$params = array();

	// Menu params for nav_menu widget
	$menus = array();
	$wp_menus = wp_get_nav_menus();
	foreach ( $wp_menus as $menu ) {
		$menus[ esc_attr( $menu->term_id ) ] = esc_html( $menu->name );
	}
	
	if ( 'text' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),

			array(
				'type' => 'textarea',
				'param_name' => 'text',
				'display' => true,
			),
		);
	}

	elseif ( 'pages' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Sort by', '%TEXTDOMAIN%' ),
				'param_name' => 'sortby',
				'display' => true,
				'choices' => array(
					'post_title' => esc_html__( 'Page title', '%TEXTDOMAIN%' ),
					'menu_order' => esc_html__( 'Page order', '%TEXTDOMAIN%' ),
					'ID' => esc_html__( 'Page ID', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Exclude', '%TEXTDOMAIN%' ),
				'param_name' => 'exclude',
				'display' => true,
				'description' => esc_html__( 'Page IDs, separated by commas.', '%TEXTDOMAIN%' ),
			),
		);
	}

	elseif ( 'calendar' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
		);
	}

	elseif ( 'archives' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display as dropdown', '%TEXTDOMAIN%' ),
				'param_name' => 'dropdown',
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Show post count', '%TEXTDOMAIN%' ),
				'param_name' => 'count',
			),
		);
	}

	elseif ( 'meta' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
		);
	}

	elseif ( 'tag_cloud' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Taxonomy:', '%TEXTDOMAIN%' ),
				'param_name' => 'taxonomy',
				'display' => true,
				'choices' => array(
					'post_tag' => esc_html__( 'Tags', '%TEXTDOMAIN%' ),
					'category' => esc_html__( 'Categories', '%TEXTDOMAIN%' ),
				),
			),
		);
	}

	elseif ( 'categories' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display as dropdown', '%TEXTDOMAIN%' ),
				'param_name' => 'dropdown',
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Show post count', '%TEXTDOMAIN%' ),
				'param_name' => 'count',
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Show hierarchy', '%TEXTDOMAIN%' ),
				'param_name' => 'hierarchical',
			),
		);
	}

	elseif ( 'rss' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Enter the RSS feed URL here', '%TEXTDOMAIN%' ),
				'param_name' => 'url',
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Give the feed a title (optional)', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'How many items would you like to display', '%TEXTDOMAIN%' ),
				'param_name' => 'items',
				'display' => true,
				'choices' => array(
					1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20
				),
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display item content?', '%TEXTDOMAIN%' ),
				'param_name' => 'show_summary',
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display item author if available?', '%TEXTDOMAIN%' ),
				'param_name' => 'show_author',
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display item date?', '%TEXTDOMAIN%' ),
				'param_name' => 'show_date',
			),
		);
	}

	elseif ( 'recent-posts' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'int',
				'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
				'param_name' => 'number',
				'display' => true,
			),
			array(
				'type' => 'checkbox',
				'label' => esc_html__( 'Display post date?', '%TEXTDOMAIN%' ),
				'param_name' => 'show_date',
			),
		);
	}

	elseif ( 'recent-comments' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
			array(
				'type' => 'int',
				'label' => esc_html__( 'Count', '%TEXTDOMAIN%' ),
				'param_name' => 'number',
				'display' => true,
			),
		);
	}

	elseif ( 'search' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),
		);
	}

	elseif ( 'nav_menu' == $base ) {
		$params = array(
			array(
				'type' => 'hidden',
				'param_name' => 'widget_id',
				'value' => get_class( $widget ),
			),

			array(
				'type' => 'text',
				'label' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				'param_name' => 'title',
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Select Menu', '%TEXTDOMAIN%' ),
				'param_name' => 'nav_menu',
				'display' => true,
				'choices' => $menus,
			),
		);
	}

	// WP Widgets
	wpb_add_element(
		array(
			'name' => sprintf( esc_html__( '%s Widget', '%TEXTDOMAIN%' ), ucfirst( $name ) ),
			'base' => 'wpb_wp_widget_' . $base,
			'description' => $description,
			'category' => esc_html__( 'WordPress Widgets', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-wordpress',
			'params' => $params,
		)
	);
}