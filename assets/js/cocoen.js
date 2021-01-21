/*!
 * Plugin Comparison Images Slider
 *
 * WPBakery Page Builder Extension 3.2.8 
 */
/* jshint -W062 */
var WPBCocoen = function( $ ) {

	'use strict';

	return {

		/**
		 * Init UI
		 */
		init : function () {
			$( '.wpb-cocoen' ).cocoen();
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	// $( window ).load( function() {
	$( document ).ready( function() {
		WPBCocoen.init();
	} );

} )( jQuery );