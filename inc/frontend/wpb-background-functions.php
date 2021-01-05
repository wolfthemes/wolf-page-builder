<?php
/**
 * %NAME% background functions
 *
 * @author WolfThemes
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
function wpb_background_img( $args = array() ) {

	extract( wp_parse_args( $args, array(
		'background_img' => get_post_thumbnail_id(),
		'background_color' => '',
		'background_position' => 'center center',
		'background_repeat' => 'no-repeat',
		'background_size' => 'cover',
		'background_effect' => '',
		'background_img_size' => 'wpb-XL',
		'background_img_lazyload' => true,
	) ) );

	$output = '';

	if ( 'parallax' === $background_effect  ) {
		$background_repeat = 'no-repeat';
		$background_size = 'cover';
	}

	// Use image with srcset to improve loading speed when applicable
	$do_object_fit = ( $background_img && 'no-repeat' === $background_repeat && 'default' !== $background_size && 'parallax' !== $background_effect && ! wpb_is_edge() && ! wp_is_mobile() );

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

		$src = wpb_get_url_from_attachment_id( $background_img, $background_img_size );
		$srcset = wp_get_attachment_image_srcset( $background_img,$background_img_size );
		$alt = get_post_meta( $background_img, '_wp_attachment_image_alt', true);
		$blank = WPB_URI . '/assets/img/blank.gif';
		$img_dominant_color = wpb_get_image_dominant_color( $background_img );

		$original_src = ( $background_img_lazyload ) ? $blank : $src;

		$cover_class = "wpb-img-$background_size wpb-img-cover";

		if ( $background_img_lazyload ) {
			$cover_class .= ' wpb-lazy-hidden wpb-lazyload-bg';
		}

		$cover_style = 'object-position:' . $position[ $background_position ] . ';';

		$container_class = 'wpb-img-bg';
		$container_style = '';

		if ( 'zoomin' === $background_effect ) {
			$cover_class .= ' wpb-zoomin';
		}

		if ( $background_color ) {

			$background_color = wpb_sanitize_color( $background_color );
			$container_style .= "background-color:$background_color;";

		} elseif ( $img_dominant_color ) {

			$background_color = wpb_sanitize_color( $img_dominant_color );
			$container_style .= "background-color:$img_dominant_color;";
		}

		$output .= '<div class="' . wpb_sanitize_html_classes( $container_class ) . '" style="' . wpb_esc_style_attr( $container_style ) . '">';

		$bg_img_meta = wp_get_attachment_metadata( $background_img );
		$bg_img_width = ( isset( $bg_img_meta['width'] ) ) ? $bg_img_meta['width'] . 'px' : '1500px';

		if ( wp_attachment_is_image( $background_img ) ) {

			$output .= '<img
				src="' . esc_url( $original_src ) . '"
				style="' . wpb_esc_style_attr( $cover_style ) . '"
				data-src="' . esc_url( $src ) .'"
				srcset="' . esc_attr( $srcset ) . '"
				class="' . wpb_sanitize_html_classes( $cover_class ) . '"
				sizes="(max-width: ' . esc_attr( $bg_img_width ) . ') 100vw, ' . esc_attr( $bg_img_width ) . '"
				alt="' . esc_attr( $alt ) .'">';

		} else {
			$output .= wpb_placeholder_img( 'wpb-XL', $cover_class );
		}

		$output .= '<div class="wpb-img-bg-overlay"></div></div>';

	} elseif ( $background_img || $background_color ) {

		$style = $attrs = '';
		$container_class = 'wpb-img-bg';

		if ( 'parallax' === $background_effect && $background_img ) {

			$container_class .= ' wpb-parallax';

			$background_color = wpb_get_image_dominant_color( $background_img );

			if ( $background_color ) {
				$style .= 'background-color:' . wpb_sanitize_color( $background_color ) . ';';
			}

			$src = wpb_get_url_from_attachment_id( $background_img, $background_img_size );
			$srcset = wp_get_attachment_image_srcset( $background_img, $background_img_size );
			$attrs = ' data-image-src="' . $src . '"';
			$attrs .= ' data-image-srcset="' . $srcset . '"';
			$attrs .= ' data-speed="0.5"';

			//$src = ( $src ) ? $src : wpb_placeholder_img_url( 'wpb-XL' );

			$style .= 'background-image:url(' . esc_url( $src ) . ');';

			// Image infos to increase parallax performances
			$bg_meta = wp_get_attachment_metadata( $background_img );

			if ( is_array( $bg_meta ) && isset( $bg_meta['width'] ) ) {
				$attrs .= ' data-image-width="' . $bg_meta['width'] . '"';
			}

			if ( is_array( $bg_meta ) && isset( $bg_meta['height'] ) ) {
				$attrs .= ' data-image-height="' . $bg_meta['height'] . '"';
			}
		}

		if ( 'parallax' !== $background_effect ) {

			if ( $background_color ) {
				$style .= 'background-color:' . esc_attr( $background_color ) . ';';
			}

			if ( $background_position )
				$style .= 'background-position:' . esc_attr( $background_position ) . ';';

			if ( $background_repeat ) {
				$style .= 'background-repeat:' . esc_attr( $background_repeat ) . ';';
			}

			if ( $background_size && 'default' !== $background_size ) {
				$style .= 'background-size:' . esc_attr( $background_size ) . ';';
			}

			if ( $background_img ) {
				$background_img_url = wpb_get_url_from_attachment_id( $background_img, $background_img_size );

				//$background_img_url = ( $background_img_url ) ? $background_img_url : wpb_placeholder_img_url( 'wpb-XL' );

				$style .= 'background-image:url(' . esc_url( $background_img_url ) . ');';
			}
		}

		$output .= '<div ' . $attrs . ' class="' . wpb_sanitize_html_classes( $container_class ) . '" style="' . esc_attr( $style ) . '"></div>';
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

	$do_object_fit = ( ! wpb_is_edge() && ! wp_is_mobile() );

	$do_object_fit = false;

	if ( array() != $image_ids ) {

		wp_enqueue_script( 'flexslider' );
		wp_enqueue_script( 'wpb-sliders' );

		$output .= '<div data-slideshow-speed="' . absint( $slideshow_speed ) . '" class="wpb-section-slideshow-background"><ul class="slides">';

		foreach ( $image_ids as $image_id ) {
			$src = esc_url( wpb_get_url_from_attachment_id( $image_id, 'wpb-XL' ) );

			$output .= '<li>';

			if ( $do_object_fit ) {

				$output .= wp_get_attachment_image( $image_id, 'wpb-XL', false, array( 'class' => 'wpb-img-cover' ) );

			} else {

				$output .= '<div style="position:absolute;top:0;left:0;right:0;bottom:0;width:100%;height:100%;background:url(' . $src . ') center center;background-size:cover;"></div>';
			}

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

/**
 * Get dominant color from image
 *
 * @param int $attachment_id
 */
function wpb_get_image_dominant_color( $attachment_id ) {

	if ( ! $attachment_id ) {
		return;
	}

	$metadata = wp_get_attachment_metadata( $attachment_id );

	if ( ! isset( $metadata['file'] ) ) {
		return 'transparent';
	}

	$upload_dir = wp_upload_dir();
	$filename = $upload_dir['basedir'] . '/' . $metadata['file'];
	$ext = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );

	if ( 'jpg' == $ext || 'jpeg' == $ext ) {

		$image = imagecreatefromjpeg( $filename);

	} elseif ( 'png' == $ext ) {

		$image = imagecreatefrompng( $filename);

	} elseif ( 'gif' == $ext ) {

		$image = imagecreatefromgif( $filename);

	} else {
		return 'transparent';
	}

	$thumb = imagecreatetruecolor( 1,1 );
	imagecopyresampled( $thumb, $image, 0, 0, 0, 0, 1, 1, imagesx( $image ), imagesy( $image ) );
	$main_color = strtoupper( dechex( imagecolorat( $thumb, 0, 0 ) ) );

	return '#' . $main_color;
}

/**
 * Sanitize color input
 *
 * @link https://github.com/redelivre/wp-divi/blob/master/includes/functions/sanitization.php
 *
 * @param string $color
 * @return string $color
 */
function wpb_sanitize_color( $color ) {

	// Trim unneeded whitespace
	$color = str_replace( ' ', '', $color );
	// If this is hex color, validate and return it
	if ( 1 === preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
		return $color;
	}
	// If this is rgb, validate and return it
	elseif ( 'rgb(' === substr( $color, 0, 4 ) ) {
		sscanf( $color, 'rgb(%d,%d,%d)', $red, $green, $blue );
		if ( ( $red >= 0 && $red <= 255 ) &&
			 ( $green >= 0 && $green <= 255 ) &&
			 ( $blue >= 0 && $blue <= 255 )
			) {
			return "rgb({$red},{$green},{$blue})";
		}
	}
	// If this is rgba, validate and return it
	elseif ( 'rgba(' === substr( $color, 0, 5 ) ) {
		sscanf( $color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );
		if ( ( $red >= 0 && $red <= 255 ) &&
			 ( $green >= 0 && $green <= 255 ) &&
			 ( $blue >= 0 && $blue <= 255 ) &&
			   $alpha >= 0 && $alpha <= 1
			) {
			return "rgba({$red},{$green},{$blue},{$alpha})";
		}
	} elseif ( 'transparent' === $color ) {
		return 'transparent';
	}
}