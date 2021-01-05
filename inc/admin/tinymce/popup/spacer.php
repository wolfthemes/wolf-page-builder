<?php
/**
 * Spacer dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Height', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'height',
		'label' => esc_html__( 'Height', '%TEXTDOMAIN%' ),
		'value' => '100px',
	),
);
echo wpb_generate_tinymce_popup( 'wpb_empty_space', $params, $title );