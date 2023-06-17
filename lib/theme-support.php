<?php
function ascendia_theme_support() {
    // Add support for HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for selective refresh
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom logos
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 100,

    ));

    // Add support for featured images
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ascendia_theme_support');
