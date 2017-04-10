<?php
/**
 * Section shortcode
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/FrontEnd/Shortcodes
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'wpb_shortcode_section' ) ) {
	/**
	 * Section Shortcode
	 *
	 * @param array $atts
	 * @param string $content
	 * @return string
	 */
	function wpb_shortcode_section( $atts, $content = null ) {

		$output = $overlay_style = $inner_style = '';

		extract( shortcode_atts( array(
			'section_type' => 'columns',
			'layout' => '2-cols',
			'skin' => 'dark',
			'background_color' => '',
			'background_type' => 'image',
			'background_img' => '',
			'background_position' => 'center center',
			'background_repeat' => 'no-repeat',
			'background_size' => 'cover',
			'background_effect' => '',
			'parallax' => '',
			'parallax_img' => '',
			'video_bg_type' => '',
			'video_bg_youtube_url' => '',
			'video_bg_youtube_start_time' => 0,
			'video_bg_vimeo_url' => '',
			'video_bg_mp4' => '',
			'video_bg_webm' => '',
			'video_bg_ogv' => '',
			'video_bg_img' => '',
			'video_bg_controls' => '',
			'slideshow_img_ids' => '',
			'slideshow_speed' => 4000,
			'margin' => '',
			'padding_top' => '',
			'padding_bottom' => '',
			'full_height' => '',
			'arrow_down' => '',
			'arrow_down_style' => 'round',
			'arrow_down_text' => '',
			'overlay' => '',
			'overlay_image' => '',
			'overlay_color' => '',
			'overlay_opacity' => '100',
			'anchor' => '',
			'inline_style' => '',
			'extra_class' => '',
			'hide_class' => '',
		), $atts ) );

		// class
		$class = $extra_class;
		$class .= " wpb-section wpb-section-$section_type";

		if ( 'blocks' == $section_type ) {
			$class .= " wpb-section-$layout";
		}

		if ( 'columns' == $section_type ) {
			$class .= " wpb-font-$skin";
		}

		if ( $hide_class ) {
			$class .= " $hide_class";
		}

		if ( $full_height ) {
			$class .= ' wpb-section-full-height';
		}

		if ( 'transparent' === $background_type ) {
			$class .= ' wpb-section-transparent-bg';
		}

		if ( 'slideshow' === $background_type ) {
			$class .= ' wpb-section-slideshow-bg';
		}

		if ( 'parallax' === $background_effect && $background_img ) {
			$class .= ' wpb-section-parallax';
		}

		// style
		$section_style = $inline_style;

		// inner style
		if ( '' != $padding_top ) {
			$padding_top = ( is_numeric( $padding_top ) ) ? absint( $padding_top ) . 'px' : $padding_top;
			$inner_style .= 'padding-top:' . esc_attr( $padding_top ) . ';';
		}

		if ( '' != $padding_bottom ) {
			$padding_bottom = ( is_numeric( $padding_bottom ) ) ? absint( $padding_bottom ) . 'px' : $padding_bottom;
			$inner_style .= 'padding-bottom:' . esc_attr( $padding_bottom ) . ';';
		}

		// overlay style
		$overlay_opacity = ( $overlay_opacity ) ? absint( $overlay_opacity ) / 100 : .4;

		if ( $overlay ) {

			$_overlay_image = '';
			if ( $overlay_image != '' && $overlay_image != ' ' ) {
				$_overlay_image = wolf_get_url_from_attachment_id( $overlay_image, 'wpb-XL' );
			}
			if ( $overlay_color ) {
				$overlay_style .= 'background-color:' . wpb_sanitize_hex_color( $overlay_color ) . ';';
			}
			if ( $overlay_image ) {
				$overlay_style .= 'background-image:url(' . esc_url( $_overlay_image ) . ');';
			}
			$overlay_style .= "opacity:$overlay_opacity;";
		}

		// container style
		$container_style = '';
		if ( '' != $margin ) {
			$margin = ( is_numeric( $margin ) ) ? absint( $margin ) . 'px' : $margin;
			$container_style .= 'padding:' . $margin . ';';
		}

		// start section
		$output .= '<section class="wpb-section-container" style="' . wpb_esc_style_attr( $container_style ) . '">';

		$output .= '<div';

		if ( $anchor ) {
			$output .= ' id="' . esc_attr( $anchor ) . '"';
		}

		if ( $section_style ) {
			$output .= ' style="' . wpb_esc_style_attr( $section_style ) . '"';
		}

		$output .= ' class="' . wpb_sanitize_html_classes( $class ) . '"';

		$output .= '>';

			if ( 'image' === $background_type ) {

				$img_bg_args = array(
					'background_img' => $background_img,
					'background_color' => $background_color,
					'background_position' => $background_position,
					'background_repeat' => $background_repeat,
					'background_size' => $background_size,
					'background_effect' => $background_effect,
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

			} elseif ( 'slideshow' === $background_type ) {

				$slideshow_args = array(
					'slideshow_img_ids' => $slideshow_img_ids,
					'slideshow_speed' => $slideshow_speed,
				);

				$output .= wpb_background_slideshow( $slideshow_args );
			}

			// overlay
			if ( $overlay ) {
				$output .= '<div class="wpb-section-overlay" style="' . wpb_esc_style_attr( $overlay_style ) . '"></div>';
			}

			$output .= '<div class="wpb-section-inner"';

			if ( $inner_style ) {
				$output .= ' style="' . wpb_esc_style_attr( $inner_style ) . '"';
			}

			$output .= '>';

			if ( 'blocks' == $section_type ) {
				$output .= '<div class="wpb-blocks-wrapper">';
			}
				$output .= do_shortcode( $content );

			if ( 'blocks' == $section_type ) {
				$output .= '</div><!--.wpb-blocks-wrapper-->';
			}

			$output .= "\n"; // end section wrap
			$output .= '</div><!--.wpb-section-inner-->';
			$output .= "\n"; // end section inner

			/* scroll to next seciton arrow */
			if ( $arrow_down && $full_height ) {

				$output .= '<span class="wpb-arrow-down wpb-arrow-down-' . esc_attr( $arrow_down_style ) . '" style="animation-delay: 2s;">';

				if ( $arrow_down_text ) {
					$output .= '<span class="wpb-arrow-down-text">';
					$output .= $arrow_down_text;
					$output .= '</span>';
				}

				$output .= '</span>';
			}

		$output .= '</div><!--.wpb-section-->';
		$output .= '</section><!--.wpb-section-container-->';

		return $output;
	}
	add_shortcode( 'wpb_section', 'wpb_shortcode_section' );
}