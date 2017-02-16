<?php
/**
 * Headline dialog box
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

$title = esc_html__( 'Headline', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'text',
		'label' => esc_html__( 'Text', '%TEXTDOMAIN%' ),
		'placeholder' => esc_html__( 'My Cool Headline', '%TEXTDOMAIN%' ),
	),

	array(
		'id' => 'max_font_size',
		'label' => esc_html__( 'Font Size', '%TEXTDOMAIN%' ),
		'placeholder' => '48px',
	),

	array(
		'id' => 'letter_spacing',
		'label' => esc_html__( 'Letter Spacing', '%TEXTDOMAIN%' ),
		'placeholder' => '3px',
	),

	array(
		'id' => 'font_family',
		'label' => esc_html__( 'Font Family', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => $font_list,
	),

	array(
		'id' => 'text_transform',
		'label' => esc_html__( 'Font Transform', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'uppercase' => esc_html__( 'uppercase', '%TEXTDOMAIN%' ),
			'none' => esc_html__( 'none', '%TEXTDOMAIN%' ),
		),
	),
);
echo wpb_generate_tinymce_popup( 'wpb_headline', $params, $title );
