/*!
 * Plugin tabs
 *
 * %NAME% %VERSION% 
 */
/* jshint -W062 */

var WPBTabs =  WPBTabs || {},
	WPB = WPB || {},
	WPBParams =  WPBParams || {},
	console = console || {};

WPBTabs = function( $ ) {

	'use strict';

	return {

		/**
		 * Init UI
		 */
		init : function () {
			$( '.wpb-tabs' ).each( function() {
				$( '#' + $( this ).attr( 'id' ) ).tabs();
			} );
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	// $( window ).load( function() {
	$( document ).ready( function() {
		WPBTabs.init();
	} );

} )( jQuery );