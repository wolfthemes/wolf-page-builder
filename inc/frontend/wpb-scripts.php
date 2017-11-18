<?php
/**
 * %NAME% scripts functions
 *
 * Scripts related functions for frontend
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FRontend
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * JS params
 */
function wpb_get_js_params() {
	return array(
		'ajaxUrl' => esc_url( WPB()->ajax_url() ),
		'lightbox' => wpb_get_option( 'settings', 'lightbox', 'swipebox' ),
		'parallaxContainer' => apply_filters( 'wpb_parallax_container', 'body' ),
		'doParallaxOnMobile' => wpb_get_option( 'settings', 'do_parallax_mobile' ),
		'doAnimationOnMobile' => wpb_get_option( 'settings', 'do_animation_mobile' ),
		'doLazyLoad' => wpb_get_option( 'settings', 'do_lazyload' ),
		'parallaxNoIos' => apply_filters( 'wpb_parallax_no_ios', true ),
		'parallaxNoAndroid' => apply_filters( 'wpb_parallax_no_android', true ),
		'parallaxNoSmallScreen' => apply_filters( 'wpb_parallax_no_small_screen', true ),
		'language' => get_locale(),
	);
}

/**
 * Register scripts
 *
 * @since %NAME% %VERSION%
 */
function wpb_register_scripts() {

	$version = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? time() : WPB_VERSION;
	$parallax_version = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? time() : '1.4.2.2';
	$folder = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '/min';
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Modernizr
	wp_register_script( 'wpb-modernizr', WPB_JS . '/lib/modernizr.js', array(), '3.4.0', false );

	// Lightbox
	wp_register_script( 'swipebox', WPB_JS . '/lib/jquery.swipebox.min.js', array( 'jquery' ), '1.2.9', true );
	wp_register_script( 'fancybox', WPB_JS . '/lib/jquery.fancybox.pack.js', array( 'jquery' ), '2.1.5', true );

	// Parallax
	//wp_register_script( 'wpb-parallax', WPB_JS . '/lib/parallax' . $suffix . '.js', array( 'jquery' ), $parallax_version, true );
	wp_register_script( 'jarallax', WPB_JS . '/lib/jarallax.min.js', array(), '1.8.0', false );

	// Lazyload
	wp_register_script( 'lazyloadxt', WPB_JS . '/lib/jquery.lazyloadxt.min.js', array( 'jquery' ), '1.1.0', true );

	// Flexslider
	wp_register_script( 'flexslider', WPB_JS . '/lib/jquery.flexslider.min.js', array( 'jquery' ), '2.6.1', true );

	// BigText
	wp_register_script( 'bigtext', WPB_JS . '/lib/jquery.bigtext.min.js', array( 'jquery' ), '0.1.8', true );

	// Concat and minifed libraries for theme that use AJAX
	wp_register_script( 'wpb-lib-min', WPB_JS . '/min/lib.min.js', array( 'jquery' ), WPB_VERSION, true );

	// Concat and minifed scripts for theme that use AJAX
	wp_register_script( 'wpb-scripts', WPB_JS . '/min/scripts.min.js', array( 'jquery' ), WPB_VERSION, true );

	/*
	Don't register script below if we use the wpb_force_enqueue_scripts filter
	When using the wpb_force_enqueue_scripts, we will enqueue all these scripts concatenated and minified
	*/
	if ( apply_filters( 'wpb_force_enqueue_scripts', false ) ) {
		return;
	}

	// Libraries
	wp_register_script( 'cocoen', WPB_JS . '/lib/cocoen.min.js', array( 'jquery' ), '1.0.0', true );
	wp_register_script( 'countdown', WPB_JS . '/lib/jquery.countdown.min.js', array( 'jquery' ), '2.0.1', true );
	wp_register_script( 'countup', WPB_JS . '/lib/countUp.min.js', array( 'jquery' ), '1.8.1', true );
	wp_register_script( 'fittext', WPB_JS . '/lib/jquery.fittext.min.js', array( 'jquery' ), '1.2.0', true );
	wp_register_script( 'owlcarousel', WPB_JS . '/lib/owl.carousel.min.js', array( 'jquery' ), '2.0.0', true );
	wp_register_script( 'flickity', WPB_JS . '/lib/flickity.pkgd.min.js', array( 'jquery' ), '2.0.5', true );
	wp_register_script( 'typed', WPB_JS . '/lib/typed.min.js', array( 'jquery' ), '2.0.1', true );
	wp_register_script( 'wow', WPB_JS . '/lib/wow.min.js', array( 'jquery' ), '1.1.2', true );
	wp_register_script( 'waypoints', WPB_JS . '/lib/jquery.waypoints.min.js', array( 'jquery' ), '1.6.2', true );
	wp_register_script( 'lity', WPB_JS . '/lib/lity.min.js', array( 'jquery' ), '2.2.2', true );

	// Register scripts so they can be euqueued conditionally
	wp_register_script( 'wpb-accordion', WPB_JS . $folder . '/accordion' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-advanced-slider', WPB_JS . $folder . '/advanced-slider' . $suffix . '.js', array( 'jquery' ), $version, false );
	wp_register_script( 'wpb-carousels', WPB_JS . $folder . '/carousels' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-buttons', WPB_JS . $folder . '/buttons' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-cocoen', WPB_JS . $folder . '/cocoen' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-countdown', WPB_JS . $folder . '/countdown' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-counter', WPB_JS . $folder . '/counter' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-icons', WPB_JS . $folder . '/icons' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-mailchimp', WPB_JS . $folder . '/mailchimp' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-process', WPB_JS . $folder . '/process' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-sliders', WPB_JS . $folder . '/sliders' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-tabs', WPB_JS . $folder . '/tabs' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-toggles', WPB_JS . $folder . '/toggles' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-typed', WPB_JS . $folder . '/autotyping' . $suffix . '.js', array( 'jquery' ), $version, true );
	wp_register_script( 'wpb-youtube', WPB_JS . $folder . '/youtube' . $suffix . '.js', array( 'jquery' ), $version, true );

	// Plugin scripts
	wp_register_script( 'wpb-youtube-video-bg', WPB_JS . $folder . '/youtube-video-bg' . $suffix . '.js', array( 'jquery' ), $version, true );
	//wp_register_script( 'wpb-vimeo-video-bg', WPB_JS . $folder . '/vimeo-video-bg' . $suffix . '.js', array( 'jquery' ), $version, true );

	wp_register_script( 'wpb-functions', WPB_JS . $folder . '/functions' . $suffix . '.js', array( 'jquery' ), $version, true );
}
add_action( 'wp_enqueue_scripts', 'wpb_register_scripts' );

/**
 * Enqueue conditional scripts
 *
 * @since %NAME% %VERSION%
 */
function wpb_enqueue_common_scripts() {

	wp_enqueue_script( 'wpb-modernizr' );

	if ( apply_filters( 'wpb_force_enqueue_scripts', false ) ) {
		return;
	}

	// Lightbox
	$lightbox = wpb_get_option( 'settings', 'lightbox', 'swipebox' );

	// Check lightbox option
	if ( 'swipebox' == $lightbox ) {

		wp_enqueue_script( 'swipebox' );

	} elseif ( 'fancybox' == $lightbox ) {

		wp_enqueue_script( 'fancybox' );
		wp_enqueue_script( 'fancybox-media', WPB_JS . '/lib/jquery.fancybox-media.min.js', array( 'jquery' ), '1.0.6', true );
	}

	wp_enqueue_script( 'owlcarousel' );
	wp_enqueue_script( 'flickity' ); // carousels
	wp_enqueue_script( 'wow' );
	wp_enqueue_script( 'waypoints' );
	wp_enqueue_script( 'jarallax' );
	wp_enqueue_script( 'wpb-carousels' ); // may be used fro post types (post, product, testimonials etc...)

	if ( wpb_get_option( 'settings', 'do_lazyload' ) ) {
		wp_enqueue_script( 'lazyloadxt' );
	}

	// Plugin common scripts
	wp_enqueue_script( 'wpb-youtube-video-bg' );
	//wp_enqueue_script( 'wpb-vimeo-video-bg' );
	wp_enqueue_script( 'wpb-functions' ); // common functions

	// Recently added elements, need theme update before enqueuing elsewhere
	wp_enqueue_script( 'typed' );
	wp_enqueue_script( 'wpb-typed' );

	// add JS global variables
	wp_localize_script( 'wpb-functions', 'WPBParams', wpb_get_js_params() );
}
add_action( 'wp_enqueue_scripts', 'wpb_enqueue_common_scripts' );

/**
 * Force Enqueue  JS
 *
 * @since %NAME% %VERSION%
 */
function wpb_force_enqueue_scripts() {

	/* If the theme need scripts on every page for AJAX, we enqueue everything */
	if ( apply_filters( 'wpb_force_enqueue_scripts', false ) ) {

		// in case these libraries are used by 3rd party plugins
		wp_dequeue_script( 'bigtext' );
		wp_dequeue_script( 'cocoen' );
		wp_dequeue_script( 'countdown' );
		wp_dequeue_script( 'countup' );
		wp_dequeue_script( 'fittext' );
		wp_dequeue_script( 'owlcarousel' );
		wp_dequeue_script( 'flickity' );
		wp_dequeue_script( 'typed' );
		wp_dequeue_script( 'wow' );
		wp_dequeue_script( 'waypoints' );
		wp_dequeue_script( 'lity' );

		// Lightbox
		$lightbox = wpb_get_option( 'settings', 'lightbox', 'swipebox' );

		// Check lightbox option
		if ( 'swipebox' == $lightbox ) {

			wp_enqueue_script( 'swipebox' );

		} elseif ( 'fancybox' == $lightbox ) {

			wp_enqueue_script( 'fancybox' );
			wp_enqueue_script( 'fancybox-media', WPB_JS . '/lib/jquery.fancybox-media.min.js', array( 'jquery' ), '1.0.6', true );
		}

		// Plugins
		wp_enqueue_script( 'wolf-facebook-page-box' );
		wp_enqueue_script( 'bandsintown', 'https://widget.bandsintown.com/javascripts/bit_widget.js', array(), false, true );

		// WPB lib
		wp_enqueue_script( 'jarallax' );
		wp_enqueue_script( 'wpb-lib-min' ); // all lib files
		wp_enqueue_script( 'jquery-ui-accordion' );
		wp_enqueue_script( 'jquery-ui-tabs' );

		if ( wpb_get_option( 'settings', 'do_lazyload' ) ) {
			wp_enqueue_script( 'lazyloadxt' );
		}

		// WPB scripts
		wp_enqueue_script( 'wpb-scripts' );

		// add JS global variables
		wp_localize_script( 'wpb-scripts', 'WPBParams', wpb_get_js_params() );

		// MailChimp
		wp_enqueue_script( 'wpb-mailchimp', WPB_JS . '/min/mailchimp.min.js', array( 'jquery' ), WPB_VERSION, true );

		// Add MailChimp JS global variables
		wp_localize_script(
			'wpb-mailchimp', 'WPBMailchimpParams', array(
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			)
		);
	}
}
add_action( 'wp_enqueue_scripts', 'wpb_force_enqueue_scripts', 100 );