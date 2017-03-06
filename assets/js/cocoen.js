/*!
 * Plugin Comparison Images Slider
 *
 * %NAME% %VERSION% 
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