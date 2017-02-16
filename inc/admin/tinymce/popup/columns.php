<?php
/**
 * Columns dialog box
 *
 * @class WPB_Admin
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
$title = esc_html__( 'Columns', '%TEXTDOMAIN%' );
$params = array(

	array(
		'id' => 'col',
		'label' => esc_html__( 'Size', '%TEXTDOMAIN%' ),
		'type' => 'select',
		'options' => array(
			'wpb-col-6' => esc_html__( 'col-6 (one half)', '%TEXTDOMAIN%' ),
			'wpb-col-4' => esc_html__( 'col-4 (one third)', '%TEXTDOMAIN%' ),
			'wpb-col-3' => esc_html__( 'col-3 (one fourth)', '%TEXTDOMAIN%' ),
			'wpb-col-11' => 'col-11',
			'wpb-col-10' => 'col-10',
			'wpb-col-9' => 'col-9',
			'wpb-col-8' => 'col-8',
			'wpb-col-7' => 'col-7',
			'wpb-col-5' => 'col-5',
			'wpb-col-2' => 'col-2',
			'wpb-col-1' => 'col-1',
		),
		'desc' => esc_html__( 'A row consists of a series of columns (col-X) that add up to 12.<br>Check the "First" checkbox below if your column is the first of the row<br>and check the "Last" checkbox if your column is the last of the row.', '%TEXTDOMAIN%' ),
	),

	array(
		'id' => 'first',
		'label' => esc_html__( 'First', '%TEXTDOMAIN%' ),
		'type' => 'checkbox',
	),

	array(
		'id' => 'last',
		'label' => esc_html__( 'Last', '%TEXTDOMAIN%' ),
		'type' => 'checkbox',
	),
);
echo wpb_generate_tinymce_popup( 'wpb_col', $params, $title, true );
