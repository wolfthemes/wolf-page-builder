<?php
/**
 * Anchor dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Anchor', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'id',
		'label' => esc_html__( 'ID', '%TEXTDOMAIN%' ),
	),

);
echo wpb_generate_tinymce_popup( 'wpb_anchor', $params, $title );