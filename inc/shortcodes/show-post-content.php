<?php

function show_post_content($args) {
    $id = isset( $args['id'] ) ? $args['id'] : 0;
    $post = get_post($id);
    return apply_filters('the_content', $post->post_content);
}

add_shortcode('show-post-content', 'show_post_content');
