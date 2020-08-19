<?php
/**
 * %NAME% Admin scripts
 *
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Enqueue admin scripts
 *
 * Styles and scripts for the admin
 *
 * @since %NAME% 2.4.2
 */
function wpb_enqueue_admin_scripts() {
	/* Styles */
	wp_enqueue_style( 'wp-color-picker' ); // colorpicker
	wp_enqueue_style( 'wpb-admin', WPB_CSS . '/admin/admin.css', array(), WPB_VERSION, 'all' );
	wp_enqueue_style( 'wpb-icon-pack', WPB_CSS . '/icon-pack.min.css', array(), WPB_VERSION );

	// Check that we're on the right page before enqueueing scripts
	if ( ! wpb_do_admin_wpb() ) {
		return;
	}

	/* Styles */
	// wp_enqueue_style( 'wp-jquery-ui-dialog' );
	wp_enqueue_style( 'fonticonpicker', WPB_CSS . '/admin/lib/jquery.fonticonpicker.min.css', array(), '2.0.0' );
	wp_enqueue_style( 'fonticonpickertheme', WPB_CSS . '/admin/lib/jquery.fonticonpicker.grey.min.css', array(), '2.0.0' );

	// Scripts
	$version = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? time() : WPB_VERSION;
	//wp_enqueue_script( 'tipsy', WPB_JS . '/admin/lib/tipsy.js', 'jquery', '1.0.0a', true );
	wp_enqueue_script( 'cookie', WPB_JS . '/admin/lib/jquery.memo.min.js', array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'fonticonpicker', WPB_JS . '/admin/lib/jquery.fonticonpicker.min.js', array( 'jquery' ), '2.0.0', true );
	wp_enqueue_script( 'generatefile', WPB_JS . '/admin/lib/jquery.generateFile.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'fileupload', WPB_JS . '/admin/lib/jquery.fileupload.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'wpb-panel', WPB_JS . '/admin/panel.js', array( 'jquery', 'jquery-ui-sortable', 'jquery-ui-dialog', 'wp-color-picker' ), $version, true );
	wp_enqueue_script( 'wpb-params', WPB_JS . '/admin/params.js', array( 'jquery' ), $version, true );
	wp_enqueue_script( 'wpb-filter', WPB_JS . '/admin/filter.js', array( 'jquery' ), $version, true );
	wp_enqueue_script( 'wpb-notice', WPB_JS . '/admin/notice.js', array( 'jquery' ), $version, true );

	// YOAST SEO plugin compatibility
	if ( defined( 'WPSEO_VERSION' ) ) {
		wp_enqueue_script( 'wpb-yoast', WPB_JS . '/admin/yoast.js', array( 'jquery' ), $version, true );
	}

	$post_id = ( isset( $_GET['post'] ) ) ? absint( $_GET['post'] ) : null;
	$wpb_content = wpb_admin_get_content( $post_id );

	// Global JS variables
	wp_localize_script( 'wpb-panel', 'WPBAdminParams', array(
			'ajaxUrl' => esc_url( admin_url( 'admin-ajax.php' ) ),
			'pluginUrl' => esc_url( WPB_URI ),
			'currentPostId' => $post_id,
			'wpbContent' => $wpb_content,
			'removeSectionConfirmation' => esc_html__( 'This will remove the section and its content.', '%TEXTDOMAIN%' ),
			'removeRowConfirmation' => esc_html__( 'This will remove the row and its content.', '%TEXTDOMAIN%' ),
			'removeElementConfirmation' => esc_html__( 'This will remove the element and its content.', '%TEXTDOMAIN%' ),
			'elementsListTitle' => esc_html__( 'Choose an element', '%TEXTDOMAIN%' ),
			'chooseSectionText' => esc_html__( 'Choose your section style', '%TEXTDOMAIN%' ),
			'cancelDialogText' => esc_html__( 'Cancel', '%TEXTDOMAIN%' ),
			'saveDialogText' => esc_html__( 'Save', '%TEXTDOMAIN%' ),
			'addElementText' => esc_html__( 'Add an Element', '%TEXTDOMAIN%' ),
			'childrenElementLenght' => esc_html__( 'There must be at least one element in this container. Remove the element container to remove the whole thing.', '%TEXTDOMAIN%' ),
			'rowLenght' => esc_html__( 'There must be at least one row in this section. Remove the entire section to remove the whole thing.', '%TEXTDOMAIN%' ),
			'chooseMultipleImage' => esc_html__( 'Select images', '%TEXTDOMAIN%' ),
			'chooseImage' => esc_html__( 'Select an image', '%TEXTDOMAIN%' ),
			'chooseFile' => esc_html__( 'Select a file', '%TEXTDOMAIN%' ),
			'chooseVideoFile' => esc_html__( 'Select a video', '%TEXTDOMAIN%' ),
			'confirmRemoveAllImages' => esc_html__( 'This will remove the entire image set', '%TEXTDOMAIN%' ),
			'WPBStatus' => ( get_post_meta( get_the_ID(), '_wpb_status', true ) ) ? get_post_meta( get_the_ID(), '_wpb_status', true ) : 'on',
			'standardMode' => esc_html__( 'Standard mode', '%TEXTDOMAIN%' ),
			'pageBuilderMode' => esc_html__( 'Page builder mode', '%TEXTDOMAIN%' ),
			'importContentText' => esc_html__( 'Import', '%TEXTDOMAIN%' ),
			'exportContentText' => esc_html__( 'Export', '%TEXTDOMAIN%' ),
			'pageIsEmpty' => esc_html__( 'The page is empty', '%TEXTDOMAIN%' ),
			'exportFileName' => sanitize_title( esc_html__( 'my-template', '%TEXTDOMAIN%' ) ),
			'saveButtonText' => esc_html__( 'Save', '%TEXTDOMAIN%' ),
			'cancelButtonText' => esc_html__( 'Cancel', '%TEXTDOMAIN%' ),
			'isWPUploadsFolderWritable' => wpb_is_wp_upload_folder_writable(),
			'isDev' => WPB_DEV,
			'defaultPalette' => array(
				'#000000', // black
				'#FFFFFF', // white
				'#ecad81', // orange
				'#79bc90', // green
				'#63a69f', // cyan
				'#7e8aa2', // dark blue
				'#c84564', // vine
				'#49535a', // dark blue
				'#C74735', // red
				'#e6ae48', // yellowish
				'#046380', // cyan 2
			),
		)
	);
}
add_action( 'admin_enqueue_scripts', 'wpb_enqueue_admin_scripts' );
