<?php
/**
 * Music Network Plugin
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( class_exists( 'Wolf_Music_Network' ) ) {
	wpb_add_element(
		array(
			'name' => esc_html__( 'Music Network', '%TEXTDOMAIN%' ),
			'base' => 'wolf_music_network',
			'category' => esc_html__( 'Music', '%TEXTDOMAIN%' ),
			'tags' => 'music',
			'description' => esc_html__( 'Display your music social network', '%TEXTDOMAIN%' ),
			'icon' => 'wpb-icon wpb-music-network',
			'params' => array(

				array(
					'type' => 'int',
					'label' => esc_html__( 'Height', '%TEXTDOMAIN%' ),
					'param_name' => 'height',
					'value' => 32,
				),

				array(
					'type' => 'select',
					'label' => esc_html__( 'Alignment', '%TEXTDOMAIN%' ),
					'param_name' => 'align',
					'choices' => array(
						'center' => esc_html__( 'Centered', '%TEXTDOMAIN%' ),
						'left' => esc_html__( 'Left', '%TEXTDOMAIN%' ),
						'right' => esc_html__( 'Right', '%TEXTDOMAIN%' ),
					),
				),

				array(
					'type' => 'text',
					'label' => esc_html__( 'Services', '%TEXTDOMAIN%' ),
					'param_name' => 'services',
					'description' => esc_html__( 'separated by a comma (empty for all)', '%TEXTDOMAIN%' ),
				),
			)
		)
	);
}