/*!
 * YouTube Video Background
 *
 * %NAME% %VERSION%
 */
/* jshint -W062 */
/* global YT */

var WPBYTVideoBg = function( $ ) {

	'use strict';

	return {

		isMobile : ( navigator.userAgent.match( /(iPad)|(iPhone)|(iPod)|(Android)|(PlayBook)|(BB10)|(BlackBerry)|(Opera Mini)|(IEMobile)|(webOS)|(MeeGo)/i ) ) ? true : false,

		/**
		 * @link http://gambit.ph/how-to-use-the-javascript-youtube-api-across-multiple-plugins/
		 */
		init : function ( $container ) {

			var _this = this;

			$container = $container || $( '#wpb-inner' );

			if ( ! $container.find( '.wpb-youtube-video-bg-container' ).length || this.isMobile ) {
				return;
			}

			if ( 'undefined' === typeof( YT ) || 'undefined' === typeof( YT.Player ) ) {
				$.getScript( '//www.youtube.com/player_api' );
			}

			setTimeout( function() {

				if ( typeof window.onYouTubePlayerAPIReady !== 'undefined' ) {
					if ( typeof window.WPBOtherYTAPIReady === 'undefined' ) {
						window.WPBOtherYTAPIReady = [];
					}
					window.WPBOtherYTAPIReady.push( window.onYouTubePlayerAPIReady );
				}

				window.onYouTubePlayerAPIReady = function() {

					// Initialize YT.Player and do stuff here
					_this.playVideo( $container );

					if ( typeof window.WPBOtherYTAPIReady !== 'undefined' ) {
						if ( window.WPBOtherYTAPIReady.length ) {
							window.WPBOtherYTAPIReady.pop()();
						}
					}
				}
			}, 2 );
		},

		/**
		 * Loop through video container and load player
		 */
		playVideo: function( $container ) {

			var _this = this;

			$container.find( '.wpb-youtube-video-bg-container' ).each( function() {
				var $this = $( this ), containerId, videoId, startTime = 0;

				containerId = $this.find( '.wpb-youtube-player' ).attr( 'id' );
				videoId = $this.data( 'youtube-id' ),
				startTime = $this.data( 'youtube-start-time' );

				_this.loadPlayer( containerId, videoId, startTime );
			} );
		},

		/**
		 * Load YT player
		 */
		loadPlayer: function( containerId, videoId, startTime ) {

			new YT.Player( containerId, {
				width: '100%',
				height: '100%',
				videoId: videoId,
				playerVars: {
					playlist: videoId,
					iv_load_policy: 3, // hide annotations
					enablejsapi: 1,
					disablekb: 1,
					autoplay: 1,
					controls: 0,
					showinfo: 0,
					rel: 0,
					loop: 1,
					wmode: 'transparent',
					start: startTime
				},
				events: {
					onReady: function ( event ) {
						event.target.mute().setLoop( true );
						var el = document.getElementById( containerId );
						el.className = el.className + ' wpb-youtube-player-is-loaded';
					}
				}
			} );

			$( window ).trigger( 'resize' ); // trigger window calculation for video background
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	$( window ).load( function() {
		WPBYTVideoBg.init();
	} );

} )( jQuery );