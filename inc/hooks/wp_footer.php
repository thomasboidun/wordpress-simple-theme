<?php
/**
 * Simple Theme: wp_footer Hook.
 * 
 * https://developer.wordpress.org/reference/hooks/wp_footer/
 */

remove_action( 'wp_footer', 'the_block_template_skip_link' );
