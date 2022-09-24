<?php

/**
 * Simple Theme: wp_enqueue_scripts Hook.
 * 
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */

/**
 * Used for apply style.css of the theme.
 */
if ( ! function_exists( 'simpletheme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Simple Theme 1.0
	 *
	 * @return void
	 */
	function simpletheme_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'simpletheme-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'simpletheme-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'simpletheme_styles' );