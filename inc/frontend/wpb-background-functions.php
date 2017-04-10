<?php
/**
 * %NAME% background functions
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FRontend
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Display image background
 *
 * @param array $args
 * @return string $output
 */
function wpb_background_img( $args ) {

	extract( wp_parse_args( $args, array(
		'background_img' => '',
		'background_color' => '',
		'background_position' => 'center center',
		'background_repeat' => 'no-repeat',
		'background_size' => 'cover',
		'background_effect' => '',
	) ) );

	$output = '';

	if ( $background_effect ) {
		$background_repeat = 'no-repeat';
		$background_size = 'cover';
	}

	// Use image with srcset to improve loading speed when applicable
	$do_object_fit = ( $background_img && 'no-repeat' === $background_repeat && 'cover' === $background_size || 'contain' === $background_size );

	if ( $do_object_fit ) {

		$position = array(
			'center center' => '50% 50%',
			'center top' => '50% 0',
			'left top' => '0 0',
			'right top' => '100% 0',
			'center bottom' => '50% 100%',
			'left bottom' => '0 100%',
			'right bottom' => '100% 100%',
			'left center' => '50% 0',
			'right center' => '100% 50%',
		);

		$cover_class = "wpb-img-$background_size";
		$cover_style = 'object-position:' . $position[ $background_position ];

		$srcset = wp_get_attachment_image_srcset( $background_img, 'wpb-XL' );
		$output .= wp_get_attachment_image( $background_img, 'wpb-XL', false, array( 'class' => "$cover_class wpb-img-bg-effect-$background_effect", 'style' => wpb_esc_style_attr( $cover_style ), 'data-image-srcset' => $srcset ) );

	} elseif ( $background_img || $background_color ) {

		$style  ='';

		if ( $background_img ) {
			$background_img_url = wpb_get_url_from_attachment_id( $background_img, 'wpb-XL' );
			$style .= 'background-image:url(' . esc_url( $background_img_url ) . ');';
		}

		if ( $background_color ) {
			$style .= 'background-color:' . esc_attr( $background_color ) . ';';
		}

		if ( $background_position )
			$style .= 'background-position:' . esc_attr( $background_position ) . ';';

		if ( $background_repeat ) {
			$style .= 'background-repeat:' . esc_attr( $background_repeat ) . ';';
		}

		if ( $background_size ) {
			$style .= 'background-size:' . esc_attr( $background_size ) . ';';
		}

		$output .= '<div class="wpb-img-bg" style="' . esc_attr( $style ) . '"></div>';
	}

	return $output;
}

/**
 * Display slideshow background
 *
 * @param array $args
 * @return string $output
 */
function wpb_background_slideshow( $args ) {

	extract( wp_parse_args( $args, array(
		'slideshow_img_ids' => '',
		'slideshow_speed' => 4000,
	) ) );

	$output = '';

	$image_ids = wpb_list_to_array( $slideshow_img_ids );

	if ( array() != $image_ids ) {

		wp_enqueue_script( 'flexslider' );
		wp_enqueue_script( 'wpb-sliders' );

		$output .= '<div data-slideshow-speed="' . absint( $slideshow_speed ) . '" class="wpb-section-slideshow-background"><ul class="slides">';

		foreach ( $image_ids as $image_id ) {
			$src  = esc_url( wpb_get_url_from_attachment_id( $image_id, 'wpb-XL' ) );

			$output .= '<li>';
			$output .= wp_get_attachment_image( $image_id, 'wpb-XL', false, array( 'class' => 'wpb-img-cover' ) );
			$output .= '</li>';
		}

		$output .= '</ul></div>';
	}

	return $output;
}

/**
 * Display video background
 *
 * @param array $args
 * @return string $output
 */
function wpb_background_video( $args ) {

	extract( wp_parse_args( $args, array(
		'video_bg_type' => '',
		'video_bg_youtube_url' => '',
		'video_bg_youtube_start_time' => 0,
		'video_bg_vimeo_url' => '',
		'video_bg_mp4' => '',
		'video_bg_webm' => '',
		'video_bg_ogv' => '',
		'video_bg_img' => '',
		'video_bg_controls' => '',
	) ) );

	$output = '';

	if ( 'selfhosted' === $video_bg_type ) {

		$output .= wpb_video_bg( $args );

	} elseif ( 'youtube' === $video_bg_type ) {

		$output .= wpb_youtube_video_bg( $args );

	} elseif ( 'vimeo' === $video_bg_type ) {

		$output .= wpb_vimeo_video_bg( $args );
	}

	return $output;
}

/**
 * Display a slef hosted video background
 *
 * Output a basic HTML5 video markup to use as video background
 *
 * @param array $args
 * @return string $output
 */
function wpb_video_bg( $args ) {

	extract( wp_parse_args( $args, array(
		'video_bg_mp4' => '',
		'video_bg_webm' => '',
		'video_bg_ogv' => '',
		'video_bg_img' => '',
		'video_bg_controls' => '',
	) ) );

	$rand = rand( 0, 9999 );
	$output = '';
	$class = 'wpb-video-bg-container';
	$output .= "<div class='$class'>";

	if ( $video_bg_img ) {
		$output .= wp_get_attachment_image( $video_bg_img, 'wpb-XL', false, array( 'class' => 'wpb-img-cover wpb-video-bg-fallback' ) );
	}

	$output .= '<video class="wpb-video-bg" id="wpb-video-bg-' . absint( $rand ) . '" preload="auto" autoplay loop="loop" muted>';

	if ( $video_bg_webm ) {
		$output .= '<source src="' . esc_url( $video_bg_webm ) . '" type="video/webm">';
	}

	if ( $video_bg_mp4 ) {
		$output .= '<source src="' . esc_url( $video_bg_mp4 ) . '" type="video/mp4">';
	}

	if ( $video_bg_ogv ) {
		$output .= '<source src="' . esc_url( $video_bg_ogv ) . '" type="video/ogg">';
	}

	$output .= '</video>';
	$output .= '<div class="wpb-video-bg-overlay"></div>';
	/*
		Video controls can be found in the shortcode file section.php
	*/
	$output .= '</div>';

	return $output;
}

/**
 * Display a YouTube video background
 *
 * @param array $args
 * @return string $output
 */
function wpb_youtube_video_bg( $args ) {

	extract( wp_parse_args( $args, array(
		'video_bg_youtube_url' => '',
		'video_bg_youtube_start_time' => '',
		'video_bg_img' => '',
	) ) );

	$output = $style = '';
	$class = 'wpb-video-bg-container wpb-youtube-video-bg-container';
	$video_bg_youtube_url = esc_url( $video_bg_youtube_url );
	$random_id = rand( 1, 9999 );

	if (
		preg_match( '#youtube(?:\-nocookie)?\.com/watch\?v=([A-Za-z0-9\-_]+)#', $video_bg_youtube_url, $match )
		|| preg_match( '#youtube(?:\-nocookie)?\.com/v/([A-Za-z0-9\-_]+)#', $video_bg_youtube_url, $match )
		|| preg_match( '#youtube(?:\-nocookie)?\.com/embed/([A-Za-z0-9\-_]+)#', $video_bg_youtube_url, $match )
		|| preg_match( '#youtu.be/([A-Za-z0-9\-_]+)#', $video_bg_youtube_url, $match )
	) {

		if ( $match && isset( $match[1] ) ) {

			$youtube_id = $match[1];
			$embed_url = 'https://youtube.com/embed/' . $youtube_id;

			$output .= "<div class='$class' data-youtube-start-time='$video_bg_youtube_start_time' id='wpb-youtube-video-bg-$random_id-container' data-youtube-id='$youtube_id'>" . "\n";

			// Image fallback
			$output .= wp_get_attachment_image( $video_bg_img, 'wpb-XL', false, array( 'class' => 'wpb-img-cover' ) );

			$output .= "<div class='wpb-youtube-player wpb-youtube-bg' id='wpb-youtube-player-$random_id'></div>" . "\n";
			$output .= '<div class="wpb-video-bg-overlay"></div>';
			$output .= '</div><!-- .wpb-youtube-video-bg -->' . "\n";
		}
	}
	return $output;
}

/**
 * Display a vimeo video background
 *
 * Output vimeo video background markup
 *
 * @param array $args
 * @return string $output
 */
function wpb_vimeo_video_bg( $args ) {

	extract( wp_parse_args( $args, array(
		'video_bg_vimeo_url' => '',
		'video_bg_img' => '',
	) ) );

	$output = $style = '';
	$class = 'wpb-video-bg-container wpb-vimeo-video-bg-container';
	$video_bg_vimeo_url = esc_url( $video_bg_vimeo_url );
	$random_id = rand( 1, 9999 );

	if (
		preg_match( '#vimeo\.com/([0-9a-z\#=]+)#', $video_bg_vimeo_url, $match )
	) {

		if ( $match && isset( $match[1] ) ) {

			$vimeo_id = $match[1];
			$embed_url = 'https://player.vimeo.com/' . $vimeo_id;

			$output .= '<div class="wpb-vimeo-video-bg-container wpb-video-bg-container">';

			// Image fallback
			$output .= wp_get_attachment_image( $video_bg_img, 'large', false, array( 'class' => 'wpb-img-cover' ) );

			$output .= '<iframe class="wpb-vimeo-bg" src="https://player.vimeo.com/video/' . esc_attr( $vimeo_id ) . '?autoplay=1&loop=1&byline=0&title=0&background=1"></iframe>';
			$output .= '<div class="wpb-video-bg-overlay"></div>';
			$output .= '</div><!--.wpb-video-bg-container-->';
		}
	}
	return $output;
}