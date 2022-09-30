<?php

function load_megamenu_js_script() {
    wp_enqueue_script ('megamenu-js-script', get_template_directory_uri() . '/inc/lib/megamenu/index.js'); 
}

add_action('wp_enqueue_scripts', 'load_megamenu_js_script');

function add_type_attribute($tag, $handle, $src) {
    // if not your script, do nothing and return original $tag
    if ( 'megamenu-js-script' !== $handle ) {
        return $tag;
    }
    // change the script tag by adding type="module" and return it.
    $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
    return $tag;
}

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);

function megamenu_styles() {
	// Register theme stylesheet.
	$theme_version = wp_get_theme()->get( 'Version' );

    $version_string = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style(
		'megamenu-style',
		get_template_directory_uri() . '/inc/lib/megamenu/src/style.css',
		array(),
		$version_string
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'megamenu-style' );
}

add_action( 'wp_enqueue_scripts', 'megamenu_styles' );