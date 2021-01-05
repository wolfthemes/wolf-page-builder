<?php
/**
 * jPlayer plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_jPlayer' ) ) {

	global $wpdb;
	$wolf_jplayer_playlists_table = esc_sql( $wpdb->prefix . 'wolf_jplayer_playlists' );

	$playlists = $wpdb->get_results( "SELECT * FROM $wolf_jplayer_playlists_table" );

	$args = array();

	if ( $playlists ) {

		$args = array(
			'name' => 'jPlayer',
			'base' => 'wolf_jplayer_playlist',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'A playlist of songs', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-jplayer',
			'params' => array(

				array(
					'type' => 'select',
					'label' => esc_html__( 'Playlist', '%TEXTDOMAIN%' ),
					'param_name' => 'id',
					'choices' => array(),
					'display' => true,
				),
			)
		);

		foreach ( $playlists as $p ) {
			$args['params'][0]['choices'][ $p->id ] = $p->name;
		}

	} else {
		$args = array(
			'name' => 'jPlayer',
			'base' => 'wolf_jplayer_playlist',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'description' => esc_html__( 'A playlist of songs', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-jplayer',
			'params' => array(

				array(
					'type' => 'select',
					'label' => esc_html__( 'Playlist', '%TEXTDOMAIN%' ),
					'param_name' => 'id',
					'choices' => array( 0 => esc_html__( 'No playlist created yet', '%TEXTDOMAIN%' ) ),
				),
			)
		);
	}

	// jPlayer Shortcode
	wpb_add_element( $args );
}