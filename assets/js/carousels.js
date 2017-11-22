/*!
 * Plugin carousels
 *
 * Requires owl.carousel.js
 *
 * %NAME% %VERSION% 
 */
/* jshint -W062 */
/* global WPB,
WPBParams */

var WPBCarousels = function( $ ) {

	'use strict';

	return {

		/**
		 * Init UI
		 */
		init : function () {

			var _this = this;

			this.testimonials();
			this.carouselGallery();
			this.videoCarousel();
			this.wolfTestimonials();
			this.resizeWolfTestimonials();
			this.postCarousel();

			/**
			 * Resize event
			 */
			$( window ).resize( function() {
				_this.resizeWolfTestimonials();
			} ).resize();
		},

		/**
		 * Image gallery carousel
		 */
		carouselGallery : function () {
			// $( '.wpb-carousel-gallery' ).owlCarousel( {
			// 	dots : false,
			// 	loop : true,
			// 	margin : 0,
			// 	nav : true,
			// 	autoplay : false,
			// 	autoplayTimeout : 4000,
			// 	autoplayHoverPause : true,
			// 	responsive : {
			// 		0 : {
			// 			items : 1
			// 		},
			// 		600 : {
			// 			items : 3
			// 		},
			// 		1000 : {
			// 			items : 5
			// 		}
			// 	},
			// 	onRefreshed : function() {
			// 		WPB.lightbox();
			// 	}
			// } );

			$( '.wpb-carousel-gallery' ).each( function() {
				$( this ).flickity( {
					wrapAround: true,
					groupCells: true,
					prevNextButtons: false,
					cellSelector: '.wpb-block'
				// Disable lightbox on drag
				} ).on( 'dragStart.flickity', function() {

					$( '.wpb-lightbox' ).addClass( 'wpb-disabled' );

				} ).on( 'dragEnd.flickity', function() {

					setTimeout( function() {
						$( '.wpb-lightbox' ).removeClass( 'wpb-disabled' );
					}, 1000 ); // wait before re-enabling lightbox
				} );
			} );
		},

		/**
		 * Video carousel
		 */
		videoCarousel : function () {

			$( '.wpb-video-carousel' ).owlCarousel( {
				dots : true,
				items: 1,
				merge: true,
				loop: true,
				margin: 10,
				video: true,
				center: true,
				responsive:{
					480:{
						items:2
					},
					600:{
						items:4
					}
				}
			} );
		},

		/**
		 * Testomonials slider
		 */
		testimonials : function () {
			// var defaultTransition = ( Modernizr.isTouch ) ? 'slide' : 'fade';
			var defaultTransition = 'slide';

			$( '.wpb-testimonials-slider' ).each( function () {

				var $slider = $( this ),
					transition,
					dataAutoplay = $slider.data( 'autoplay' ),
					dataSpeed = $slider.data( 'slideshow-speed' ),
					dataPauseonHover = $slider.data( 'pause-on-hover' ),
					dataTransition = $slider.data( 'transition' ),
					dataNavbullets = $slider.data( 'nav-bullets' ),
					dataArrows = $slider.data( 'nav-arrows' );

				transition = ( 'auto' === dataTransition ) ? defaultTransition : dataTransition;

				// $slider.owlCarousel( {
				// 	mouseDrag : false,
				// 	loop : true,
				// 	items : 1,
				// 	autoplay : dataAutoplay,
				// 	autoplayTimeout: dataSpeed,
				// 	autoplayHoverPause : dataPauseonHover,
				// 	nav : dataArrows,
				// 	dots : dataNavbullets
				// } );

				$( this ).flickity( {
					autoPlay : dataAutoplay,
					pauseAutoPlayOnHover: dataPauseonHover,
					prevNextButtons: dataArrows,
					pageDots: dataNavbullets,
					wrapAround: true,
					cellSelector: '.wpb-testimonal-slide'
				} );
			} );
		},

		/**
		 * Post carousel
		 */
		postCarousel : function() {
			$( '.wpb-last-posts-display-carousel' ).each( function() {
				$( this ).flickity( {
					groupCells: true,
					prevNextButtons: false,
					cellSelector: '.wpb-post-column'
				} );
			} );
		},

		/**
		 * Testimonial post type
		 */
		wolfTestimonials : function () {

			$( '.testimonials-display-carousel').each( function() {
				$( this ).flickity( {
					wrapAround: true,
					groupCells: '77%',
					prevNextButtons: false,
					cellSelector: '.testimonial'
				} );
			} );
		},

		/**
		 * Resize testimonials quote
		 */
		resizeWolfTestimonials : function () {
			var $testimonials = $( '.testimonials-display-carousel'),
				maxHeight = -1;

			$( '.testimonials-display-carousel .testimonial-content' ).removeAttr( 'style' );

			$( '.testimonials-display-carousel' ).each( function() {

				$( this ).find( '.testimonial-content' ).each( function() {
					maxHeight = maxHeight > $( this ).height() ? maxHeight : $( this ).height();
				} );

				$( this ).find( '.testimonial-content' ).each( function() {
					$( this ).height( maxHeight );
				} );
			} );
		}
	};

}( jQuery );

( function( $ ) {

	'use strict';

	// $( window ).load( function() {
	$( document ).ready( function() {
		WPBCarousels.init();
	} );

} )( jQuery );