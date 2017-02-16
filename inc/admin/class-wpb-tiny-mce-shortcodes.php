<?php
/**
 * %NAME% Tiny MCE shortcode.
 *
 * @class WPB_Tiny_Mce_Shortcodes
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'WPB_Tiny_Mce_Shortcodes' ) ) {
	/**
	 * Main WPB_Tiny_Mce_Shortcodes Class
	 *
	 * Contains the main functions for WPB_Tiny_Mce_Shortcodes
	 *
	 * @class WPB_Tiny_Mce_Shortcodes
	 * @since 1.0.0
	 * @package %NAME%
	 * @author %AUTHOR%
	 */
	class WPB_Tiny_Mce_Shortcodes {

		/**
		 * WPB_Tiny_Mce_Shortcodes Constructor.
		 */
		public function __construct() {

			// Admin tinyMCE and styles
			add_action( 'admin_init', array( $this, 'mce_init' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		}

		/**
		 * Registers TinyMCE rich editor buttons.
		 */
		public function mce_init() {

			if ( ! current_user_can( 'edit_posts' ) && ! current_user_can( 'edit_pages' ) ) {
				return;
			}

			if ( 'true' == get_user_option( 'rich_editing' ) ) {
				add_filter( 'mce_external_plugins', array( $this, 'add_plugin' ) );
				add_filter( 'mce_buttons', array( $this, 'register_button' ) );
				add_filter( 'tiny_mce_before_init', array( $this, 'google_font_list' ) );
			}
		}

		/**
		 * Defines TinyMCE rich editor js plugin.
		 *
		 * @param array $plugin_array
		 */
		public function add_plugin( $plugin_array ) {

			$plugin_array['WPBShortcodesTinyMce'] = esc_url( WPB_URI . '/inc/admin/tinymce/plugin.js' );

			return $plugin_array;
		}

		/**
		 * Adds TinyMCE rich editor buttons.
		 *
		 * @param array $button
		 */
		public function register_button( $buttons ) {
			$buttons[] = 'wpb_shortcodes_tiny_mce_button';
			$buttons[] = 'fontselect';
			$buttons[] = 'fontsizeselect';
			return $buttons;
		}

		/**
		 * Adds google font dropdown
		 *
		 * @param array $params
		 */
		public function google_font_list( $params ) {
			
			$wpb_google_fonts = wpb_get_google_fonts_options();

			$fonts = '';

			if ( is_array( $wpb_google_fonts ) ) {
				foreach ( $wpb_google_fonts as $key => $value ) {
					if ( '' != $value ) {
						$fonts .= "$key=$key;";
					}
				}
			}

			$params['font_formats'] = $fonts;

			return $params;
		}

		/**
		 * Register/queue admin scripts.
		 */
		public function admin_scripts() {

			// wp_enqueue_style( 'wpb-popup', WPB_URI . '/inc/admin/tinymce/css/popup.css', false, '1.0', 'all' );
			
			wp_localize_script( 'jquery', 'Wolf_Shortcodes_Tiny_Mce', array( 'plugin_folder' => WPB_URI . '/inc/admin/tinymce/' ) );

			wp_enqueue_script( 'wpb-tinymce', WPB_JS . '/admin/tinymce.js', array( 'jquery' ), WPB_VERSION, true );
			
			// Add JS global variables
			wp_localize_script(
				'wpb-tinymce', 'WPBTinyMceParams', array(
					'anchor' => esc_html__( 'Anchor', '%TEXTDOMAIN%' ),
					'dropcap' => esc_html__( 'Dropcap', '%TEXTDOMAIN%' ),
					'button' => esc_html__( 'Button', '%TEXTDOMAIN%' ),
					'alert' => esc_html__( 'Notifications', '%TEXTDOMAIN%' ),
					'highlight' => esc_html__( 'Highlight', '%TEXTDOMAIN%' ),
					'spacer' => esc_html__( 'Spacer', '%TEXTDOMAIN%' ),
					// 'mailchimp' => esc_html__( 'Newsletter sign up', '%TEXTDOMAIN%' ),
					'fittext' => esc_html__( 'Headline', '%TEXTDOMAIN%' ),
					'socials' => esc_html__( 'Socials', '%TEXTDOMAIN%' ),
					'fonts' => esc_html__( 'Fonts', '%TEXTDOMAIN%' ),
					'columns' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
					'insertText' => esc_html__( 'Insert a shortcode', '%TEXTDOMAIN%' ),
					// 'fontList' => $wpb_fonts,
				)
			);
		}

	} // end class
} // end class exist check

return new WPB_Tiny_Mce_Shortcodes();