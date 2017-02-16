<?php
/**
 * Show template option if the markup is empty
 *
 * @version %VERSION%
 */

// include WP stuff
include_once 'wp.php';
?>
<templates id="wpb-templates" class="wpb-table">
	<div class="wpb-table-cell">
		<a href="#" id="wpb-add-section-default" class="wpb-add-section wpb-toolbar-button wpb-tipsy" title="<?php esc_html_e( 'Add a section', '%TEXTDOMAIN%' ); ?>"></a>
		<?php foreach ( wpb_get_templates() as $template ) : ?>
			<?php echo $template['name']; ?>
		<?php endforeach; ?>
	</div>
</templates>