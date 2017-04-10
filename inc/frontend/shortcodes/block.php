<?php
/**
 * Blocks shortcode
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_block' ) ) {
	/**
	 * Block shortcode
	 *
	 * @param array $atts
	 * @param array $content
	 * @return string
	 */
	function wpb_shortcode_block( $atts, $content = null ) {

		extract( shortcode_atts(  array(
			'skin' => 'dark',
			'background_color' => '',
			'background_type' => 'image',
			'background_img' => '',
			'background_position' => 'center center',
			'background_repeat' => 'no-repeat',
			'background_size' => 'cover',
			'video_bg_type' => '',
			'video_bg_youtube_url' => '',
			'video_bg_youtube_start_time' => '',
			'video_bg_vimeo_url' => '',
			'video_bg_mp4' => '',
			'video_bg_webm' => '',
			'video_bg_ogv' => '',
			'video_bg_img' => '',
			'video_bg_controls' => '',
			'slideshow_img_ids' => '',
			'slideshow_speed' => 4000,
			'content_type' => 'text',
			'overlay' => '',
			'overlay_image' => '',
			'overlay_color' => '',
			'overlay_opacity' => '100',
			'anchor' => '',
			'extra_class' => '',
			'inline_style' => '',
		), $atts ) );

		$output = $overlay_style = '';

		// class
		$class = $extra_class;
		$class = ( $class ) ? "$class " : ''; // add space
		$class .= "wpb-block wpb-block-$content_type wpb-font-$skin";


		if ( 'transparent' == $background_type ) {
			$class .= ' wpb-block-transparent-bg';
		}

		if ( $background_color ) {
			$class .= ' wpb-block-has-bg-color';
		}

		// overlay style
		$overlay_opacity = ( $overlay_opacity ) ? absint( $overlay_opacity ) / 100 : .4;

		if ( $overlay ) {
			$_overlay_image = '';
			if ( $overlay_image != '' && $overlay_image != ' ' ) {
				$_overlay_image = wolf_get_url_from_attachment_id( $overlay_image, 'large' );
			}
			if ( $overlay_color ) {
				$overlay_style .= 'background-color:' . wpb_sanitize_hex_color( $overlay_color ) . ';';
			}
			if ( $overlay_image ) {
				$overlay_style .= 'background-image:url(' . esc_url( $_overlay_image ) . ');';
			}
			$overlay_style .= "opacity:$overlay_opacity;";
		}

		$output .= '<div class="' . wpb_sanitize_html_classes( $class ) . '" style="' . wpb_esc_style_attr( $inline_style ) . '">';


		if ( 'image' === $background_type ) {

			$img_bg_args = array(
				'background_img' => $background_img,
				'background_color' => $background_color,
				'background_position' => $background_position,
				'background_repeat' => $background_repeat,
				'background_size' => $background_size,
			);

			$output .= wpb_background_img( $img_bg_args );

		// video background
		} elseif ( 'video' === $background_type ) {

			$video_bg_args = array(
				'video_bg_type' => $video_bg_type,
				'video_bg_youtube_url' => $video_bg_youtube_url,
				'video_bg_youtube_start_time' => $video_bg_youtube_start_time,
				'video_bg_vimeo_url' => $video_bg_vimeo_url,
				'video_bg_mp4' => $video_bg_mp4,
				'video_bg_webm' => $video_bg_webm,
				'video_bg_ogv' => $video_bg_ogv,
				'video_bg_img' => $video_bg_img,
				'video_bg_controls' => $video_bg_controls,
			);

			$output .= wpb_background_video( $video_bg_args );

		} elseif ( 'slideshow' == $background_type ) {

			$slideshow_args = array(
				'slideshow_img_ids' => $slideshow_img_ids,
				'slideshow_speed' => $slideshow_speed,
			);

			$output .= wpb_background_slideshow( $slideshow_args );
		}

		// overlay
		if ( $overlay ) {
			$output .= '<div class="wpb-block-overlay" style="' . wpb_esc_style_attr( $overlay_style ) . '"></div>';
		}

		$output .= '<div class="wpb-block-content">';
		$output .= '<div class="wpb-block-inner">' . do_shortcode( $content ) . '</div><!-- .wpb-block-inner -->';
		$output .= '</div><!-- .wpb-block-content --></div><!-- .wpb-block -->';

		return $output;
	}
	add_shortcode( 'wpb_block', 'wpb_shortcode_block'  );
}