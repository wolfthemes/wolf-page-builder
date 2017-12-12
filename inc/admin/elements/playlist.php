<?php
/**
 * Wolf Playlist Manager plugin
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Playlist_Manager' ) ) {
	// Playlist Shortcode

	$choices = array();

	$playlists = get_posts( array( 'post_type' => 'wpm_playlist', 'posts_per_page' => -1, ) ); // get all playlist

	foreach ( $playlists as $playlist ) {
		$choices[ $playlist->ID ] = $playlist->post_title;
	}

	// if no result display "no playlist"
	if ( array() == $choices ) {
		$choices[0] = esc_html__( 'No playlist created yet', '%TEXTDOMAIN%' );
	}

	wpb_add_element(
		array(
			'name' => esc_html__( 'Playlist', '%TEXTDOMAIN%' ),
			'base' => 'wolf_playlist',
			'description' => esc_html__( 'Display one of your playlist', '%TEXTDOMAIN%' ),
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-playlist',
			'params' => array(
				array(
					'type' => 'select',
					'label' => esc_html__( 'Playlist', '%TEXTDOMAIN%' ),
					'param_name' => 'id',
					'choices' => $choices,
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Tracklist Visibility', '%TEXTDOMAIN%' ),
					'param_name' => 'show_tracklist',
					'choices' => array(
						'true' => esc_html__( 'show', '%TEXTDOMAIN%' ),
						'false' => esc_html__( 'hide', '%TEXTDOMAIN%' ),
					),
					'display' => true,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Skin', '%TEXTDOMAIN%' ),
					'param_name' => 'theme',
					'choices' => array(
						'dark' => esc_html__( 'Dark', '%TEXTDOMAIN%' ),
						'light' => esc_html__( 'Light', '%TEXTDOMAIN%' ),
					),
				),
			)
		)
	);
}