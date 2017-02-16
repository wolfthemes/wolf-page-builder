<?php
/**
 * %NAME% helpdesk page
 *
 * Redirect user to the support forum using JS
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/AdminPages
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="wrap"><?php esc_html_e( 'Redirection...', '%TEXTDOMAIN%' ); ?></div>
<script type="text/javascript">
	//<![CDATA[
	window.location.replace("<?php echo esc_url( WPB_SUPPORT_URL . '/' ); ?>");
	//]]>
</script>