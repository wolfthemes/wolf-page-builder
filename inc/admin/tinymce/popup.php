<?php
/**
 * %NAME% TinyMCE popup HTML wrapper
 *
 * @class WPB_Admin
 * @author %AUTHOR%
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */
include_once( 'load.php' );
$popup = null;
if ( isset( $_GET[ 'popup' ] ) )
	$popup = 'popup/' . $_GET['popup'] . '.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head></head>
<body>
	<?php include( $popup ); ?>
</body>
</html>