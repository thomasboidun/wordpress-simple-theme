<?php
/**
 * Simple Theme: Hooks
 *
 * @since Simple Theme 1.0
 */

add_editor_style('style.css');

show_admin_bar(false);

@require_once get_template_directory() . '/inc/hooks/init.php';

@require_once get_template_directory() . '/inc/hooks/wp_body_open.php';

@require_once get_template_directory() . '/inc/hooks/wp_enqueue_scripts.php';