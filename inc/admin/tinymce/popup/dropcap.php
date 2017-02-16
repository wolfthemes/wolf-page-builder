<?php
/**
 * Dropcap dialog box
 *
 * @class WPB_Admin
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$font_list = array( '' => esc_html__( 'Default heading font', '%TEXTDOMAIN%' ) );
$wpb_google_fonts = wpb_get_google_fonts_options();

foreach ( $wpb_google_fonts as $key => $value ) {
	$font_list[ $key ] = $key;
}

$title = esc_html__( 'Dropcap', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'text',
		'label' => esc_html__( 'Letter', '%TEXTDOMAIN%' ),
	),

	array(
		'id' => 'font',
		'label' => esc_html__( 'Font Family', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => $font_list,
	),
);
echo wpb_generate_tinymce_popup( 'wpb_dropcap', $params, $title );