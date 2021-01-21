<?php
/**
 * Anchor dialog box
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package WolfPageBuilder/Admin
 * @version 3.2.8
 */
$title = esc_html__( 'Anchor', 'wolf-page-builder' );
$params = array(

	array(
		'id' => 'id',
		'label' => esc_html__( 'ID', 'wolf-page-builder' ),
	),

);
echo wpb_generate_tinymce_popup( 'wpb_anchor', $params, $title );
