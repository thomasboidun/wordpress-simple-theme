<?php

/**
 * Simple Theme: init Hook.
 * 
 * https://developer.wordpress.org/reference/hooks/init/
 */

@require_once get_template_directory() . '/inc/patterns.php';

add_action( 'init', 'simpletheme_register_block_patterns', 9 );
