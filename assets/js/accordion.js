/*!
 * Plugin accordion
 *
 * %NAME% %VERSION% 
 */
/* jshint -W062 */

var WPBAccordion =  WPBAccordion || {},
	console = console || {};

WPBAccordion = function( $ ) {

	'use strict';

	return {

		/**
		 * Init UI
		 */
		init : function () {
			$( '.wpb-accordion' ).each( function() {
				$( this ).accordion( {
					autoHeight: true,
					heightStyle: 'content'
				} );
			} );
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	// $( window ).load( function() {
	$( document ).ready( function() {
		WPBAccordion.init();
	} );

} )( jQuery );