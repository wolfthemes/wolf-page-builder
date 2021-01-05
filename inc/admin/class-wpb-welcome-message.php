<?php
/**
 * %NAME% Welcome Message.
 *
 * @class WPB_Admin
 * @author WolfThemes
 * @category Admin
 * @package %PACKAGENAME%/Admin
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

if ( ! class_exists( 'WPB_Admin_Welcome_Message' ) ) {
/**
 * WPB_Admin_Welcome_Message class.
 */
class WPB_Admin_Welcome_Message {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		if ( ! isset( $_GET['page'] ) ) {
			add_action( 'welcome_panel', array( $this, 'welcome_panel' ) );
			add_action( 'admin_head', array( $this, 'welcome_admin_head' ) );
		}
	}

	/**
	 * Hide default welcome dashboard message and and create a custom one
	 *
	 * @access public
	 * @since 1.0
	 * @return void
	*/
	public function welcome_panel() {
		?>
<div class="welcome-panel-content wpb-welcome-panel-content">
	<div class="wpb-welcome-panel-overlay"></div>
	
	<h3><?php printf( esc_html__( '%s, a Hassle Free Page Builder for WordPress', '%TEXTDOMAIN%' ), 'Wolf Page Builder' ); ?></h3>
	
	<div class="welcome-panel-column-container">
		<div class="welcome-panel-column">
			<h4><?php esc_html_e( 'Let\'s Get Started', '%TEXTDOMAIN%' ); ?></h4>

				<a class="button button-primary button-hero" href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"><?php esc_html_e( 'Start now!', '%TEXTDOMAIN%' ); ?></a>
				<br>
				<?php printf(
					wp_kses(
						__( 'or, <a href="%s">go to the plugin settings</a>', '%TEXTDOMAIN%' ),
						array( 'a' => array( 'href' => array() ) )
					),
					esc_url( admin_url( 'admin.php?page=wpb-settings' ) )
				); ?>

		</div>
		<div class="welcome-panel-column">
			<h4><?php esc_html_e( 'Help', '%TEXTDOMAIN%' ); ?></h4>
			<ul>
				<li><i class="fa-fw fa fa-plus"></i> <a target="_blank" href="<?php echo esc_url( WPB_DOC_URI ); ?>/#section"><?php esc_html_e( 'How to create a section', '%TEXTDOMAIN%' ); ?></a></li>
				<li><i class="fa-fw fa fa-plus"></i> <a target="_blank" href="<?php echo esc_url( WPB_DOC_URI ); ?>/#element"><?php esc_html_e( 'How to add an element', '%TEXTDOMAIN%' ); ?></a></li>
				<li><i class="fa-fw fa fa-font"></i> <a target="_blank" href="<?php echo esc_url( WPB_DOC_URI ); ?>/#fonts"><?php esc_html_e( 'How to load google fonts', '%TEXTDOMAIN%' ); ?></a></li>
				<li><i class="fa-fw fa fa-file-text-o"></i> <a target="_blank" href="<?php echo esc_url( WPB_DOC_URI ); ?>"><?php esc_html_e( 'Documentation', '%TEXTDOMAIN%' ); ?></a></li>
				<?php if ( wpb_is_wolf_theme() ) : ?>
					<li><i class="fa-fw fa fa-support"></i> <a target="_blank" href="<?php echo WPB_SUPPORT_URL; ?>"><?php esc_html_e( 'Support forum', '%TEXTDOMAIN%' ); ?></a></li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="welcome-panel-column welcome-panel-last">
			<h4><?php esc_html_e( 'More plugins', '%TEXTDOMAIN%' ); ?></h4>
			<ul>
				<?php
					$plugin_dir = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR;
				?>
				<?php if ( ! is_dir( $plugin_dir. 'wolf-twitter' ) ) : ?>
					<li><i class="fa-fw fa fa-twitter"></i> <a target="_blank" href="<?php echo esc_url( WPB_WOLF_DOMAIN ); ?>/plugin/wolf-twitter/">Twitter Plugin</a></li>
				<?php endif; ?>

				<?php if ( ! is_dir( $plugin_dir. 'wolf-gram' ) ) : ?>
					<li><i class="fa-fw fa fa-instagram"></i> <a target="_blank" href="<?php echo esc_url( WPB_WOLF_DOMAIN ); ?>/plugin/wolf-gram/">Instagram Plugin</a></li>
				<?php endif; ?>

				<?php if ( ! is_dir( $plugin_dir. 'wolf-facebook-page-box' ) ) : ?>
					<li><i class="fa-fw fa fa-facebook"></i> <a target="_blank" href="<?php echo esc_url( WPB_WOLF_DOMAIN ); ?>/plugin/wolf-facebook-page-box/">Facebook Page Box</a></li>
				<?php endif; ?>

				<li><i class="fa-fw fa ti-wolf"></i> <a target="_blank" href="<?php echo esc_url( WPB_WOLF_DOMAIN ); ?>/plugins/"><?php esc_html_e( 'More plugins', '%TEXTDOMAIN%' ); ?></a></li>
			</ul>
		</div>
	</div>
</div>
		<?php
	}

	/**
	 *
	 *
	 * @param
	 * @return
	 */
	public function welcome_admin_head() {

		?>
		<style>
			.wpb-welcome-panel{
				background-image: url(<?php echo esc_url( WPB_URI ); ?>/assets/img/admin/welcome_bg.jpg);
			}
		</style>
		<script type="text/javascript">
			jQuery( document ).ready( function() {
				jQuery( '.wpb-welcome-panel-content' ).parent().addClass( 'wpb-welcome-panel' );
			} );
		</script>
		<?php
	}

} // end class

return new WPB_Admin_Welcome_Message();	

} // end class exists check
