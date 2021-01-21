/*!
 * Plugin counter
 *
 * WPBakery Page Builder Extension 3.2.8 
 */
/* jshint -W062 */

var WPBTyped =  WPBTyped || {},
	console = console || {};

WPBTyped = function( $ ) {

	'use strict';

	return {

		/**
		 * Init UI
		 */
		init : function () {

			$( '.wpb-typed' ).each( function() {
				var $typed = $( this ),
					strings = $typed.data( 'string' ) || [],
					loop = $typed.data( 'loop' ) || false,
					speed = $typed.data( 'speed' ) || false;
					
				if ( [] !== strings ) {
					$typed.typed( {
						strings : strings,
						loop : loop,
						typeSpeed : speed,
						contentType: 'html'
					} );
				}
			} );
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	$( document ).ready( function() {
		WPBTyped.init();
	} );

} )( jQuery );