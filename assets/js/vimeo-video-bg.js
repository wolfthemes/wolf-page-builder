/*!
 * Plugin Vimeo Video Background
 *
 * WPBakery Page Builder Extension 3.2.8 
 */
/* jshint -W062 */

var WPBVimeoVideoBg = function( $ ) {

	'use strict';

	return {
		isMobile : ( navigator.userAgent.match( /(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i ) ) ? true : false,
		initFlag : false,

		/**
		 * Mute all Vimeo video backgrounds
		 */
		muteVimeoBackgrounds: function( $container ) {
			
			$container = $container || $( '#wpb-inner' );

			// Do nothing if no vimeo background is found
			if ( 1 > $container.find( '.wpb-youtube-video-bg-container' ).length || this.isMobile ) {
				return;
			}
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	$( document ).ready( function() {
		WPBVimeoVideoBg.muteVimeoBackgrounds();
	} );

} )( jQuery );