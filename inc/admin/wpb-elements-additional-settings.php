<?php
/**
 * %NAME% Element Additional Settings
 *
 * @author WolfThemes
 * @category Core
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add custom color settings to certain elements
 */
$custom_colors_elements = array(
	'wpb_icon_with_text'
);

global $custom_colors;

foreach ( $custom_colors_elements as $custom_colors_element ) {
	wpb_inject_param(
		$custom_colors_element,
		$custom_colors
	);
}

/**
 * Add carousel settings
 */
$carousel_elements = array(
	'wpb_testimonials',
);

foreach ( $carousel_elements as $carousel_element ) {
	wpb_inject_param(
		$carousel_element, array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Autoplay', '%TEXTDOMAIN%' ),
				'param_name' => 'autoplay',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Pause on Hover (if autoplay)', '%TEXTDOMAIN%' ),
				'param_name' => 'pause_on_hover',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Slideshow Speed in ms', '%TEXTDOMAIN%' ),
				'param_name' => 'slideshow_speed',
				'value' => 6000,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Navigation Bullets', '%TEXTDOMAIN%' ),
				'param_name' => 'nav_bullets',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Navigation Arrows', '%TEXTDOMAIN%' ),
				'param_name' => 'nav_arrows',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),
		)
	);
}

/**
 * Add slider settings
 */
$slider_elements = array(
	'wpb_slider',
	'wpb_advanced_slider',
	'wpb_posts_slider',
	'wpb_posts_big_slider',
);

foreach ( $slider_elements as $slider_element ) {
	wpb_inject_param(
		$slider_element, array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Autoplay', '%TEXTDOMAIN%' ),
				'param_name' => 'autoplay',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Pause on Hover (if autoplay)', '%TEXTDOMAIN%' ),
				'param_name' => 'pause_on_hover',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Transition', '%TEXTDOMAIN%' ),
				'param_name' => 'transition',
				'choices' => array(
					'auto' => esc_html__( 'Auto (fade by default and slide on touchable devices)', '%TEXTDOMAIN%' ),
					'slide' => esc_html__( 'Slide', '%TEXTDOMAIN%' ),
					'fade' => esc_html__( 'Fade', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Slideshow Speed in ms', '%TEXTDOMAIN%' ),
				'param_name' => 'slideshow_speed',
				'value' => 6000,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Navigation Bullets', '%TEXTDOMAIN%' ),
				'param_name' => 'nav_bullets',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Show Navigation Arrows', '%TEXTDOMAIN%' ),
				'param_name' => 'nav_arrows',
				'choices' => array(
					'true' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'false' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
			),
		)
	);
}

/**
 * Add animation and animation delay settings to certain elements
 */
$animated_elements = array(
	'wpb_headline', 'wpb_bigtext', 'wpb_icon_with_text', 'wpb_testimonials', 'wpb_team_member', 'wpb_text_block',
	'wpb_image_link', 'wpb_image', 'wpb_slider', 'wpb_button_container',
	'wpb_posts_slider', 'wpb_video_opener', 'wpb_countdown', 'wpb_item_price',
	'wpb_mailchimp',
	'wolf_tweet',
);

$wpb_animations = wpb_get_animations();

foreach ( $animated_elements as $animated_element ) {
	wpb_inject_param(
		$animated_element, array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Animation', '%TEXTDOMAIN%' ),
				'param_name' => 'animation',
				'choices' => $wpb_animations,
				'display' => true,
			),

			array(
				'type' => 'int',
				'label' => esc_html__( 'Animation Delay (in ms)', '%TEXTDOMAIN%' ),
				'param_name' => 'animation_delay',
				'display' => true,
				'placeholder' => 0,
			),
		)
	);
}

/**
 * Add inline style and class field settings to certain elements
 */
$stylable_elements = array(
	'block',
	'wpb_video',
	'row',
	'contact-form-7',
	'wpb_google_map',
	'wpb_separator',
	'wpb_icon_with_text', 'wpb_text_block',
	'wpb_image_link',
	'wpb_image',
	'wpb_gallery',
	'wpb_slider',
	'wpb_button_container',
	'wpb_process_container',
	'wpb_posts_slider',
	'wpb_video_opener',
	'wpb_facebook_like',
	'wpb_call_to_action',
	'wpb_skill_bar',
	'wpb_item_price',
	'wpb_bigtext',
	'wpb_youtube',
	'wpb_mailchimp',
	'wpb_empty_space',
);

foreach ( $stylable_elements as $stylable_element ) {
	wpb_inject_param(
		$stylable_element, array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Advanced Settings', '%TEXTDOMAIN%' ),
				'param_name' => 'show_advanced_settings',
				'choices' => array(
					'hide' => esc_html__( 'Hide', '%TEXTDOMAIN%' ),
					'show' => esc_html__( 'Show', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'slug',
				'label' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
				'param_name' => 'anchor',
				'placeholder' => 'my-element',
				'description' => esc_html__( 'An unique ID for your element.', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_advanced_settings', 'value' => array( 'show' ) ),
				'display' => true,
			),
			array(
				'type' => 'slug',
				'label' => esc_html__( 'Extra Class', '%TEXTDOMAIN%' ),
				'param_name' => 'extra_class',
				'placeholder' => 'my-class',
				'description' => esc_html__( 'Optional CSS class to add to the element', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_advanced_settings', 'value' => array( 'show' ) ),
				'display' => true,
			),

			array(
				'type' => 'inline_css',
				'label' => esc_html__( 'Inline Style', '%TEXTDOMAIN%' ),
				'param_name' => 'inline_style',
				'placeholder' => 'margin-top:15px;',
				'description' => esc_html__( 'Additional inline CSS style', '%TEXTDOMAIN%' ),
				'dependency' => array( 'element' => 'show_advanced_settings', 'value' => array( 'show' ) ),
				'display' => true,
			),
		)
	);
}

if ( class_exists( 'Wolf_Videos' ) ) {
	/**
	 * Wolf Videos
	 */
	wpb_inject_param(
		'wolf_last_videos', array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Padding', '%TEXTDOMAIN%' ),
				'param_name' => 'padding',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Animation', '%TEXTDOMAIN%' ),
				'param_name' => 'animation',
				'choices' => $wpb_animations,
				'display' => true,
			),
		)
	);
}

if ( class_exists( 'Wolf_Albums' ) ) {
	/**
	 * Wolf Albums
	 */
	wpb_inject_param(
		'wolf_last_albums', array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Padding', '%TEXTDOMAIN%' ),
				'param_name' => 'padding',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Animation', '%TEXTDOMAIN%' ),
				'param_name' => 'animation',
				'choices' => $wpb_animations,
				'display' => true,
			),
		)
	);
}

if ( class_exists( 'Wolf_Discography' ) ) {
	/**
	 * Wolf Discorgaphy
	 */
	wpb_inject_param(
		'wolf_last_releases', array(
			array(
				'type' => 'select',
				'label' => esc_html__( 'Padding', '%TEXTDOMAIN%' ),
				'param_name' => 'padding',
				'choices' => array(
					'yes' => esc_html__( 'Yes', '%TEXTDOMAIN%' ),
					'no' => esc_html__( 'No', '%TEXTDOMAIN%' ),
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Animation', '%TEXTDOMAIN%' ),
				'param_name' => 'animation',
				'choices' => $wpb_animations,
				'display' => true,
			),
		)
	);
}