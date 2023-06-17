<?php


/**
 * Enqueue stylesheets
 *
 * @return void
 */
function ascendia_enqueue_styles() {
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/dist/css/reset.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/main.css');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_styles');




/**
 * Enqueue scripts
 *
 * @return void
 */
function ascendia_enqueue_scripts() {
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
    wp_enqueue_script('my-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_scripts');


/**
 * Enqueue script for live preview updates
 */
function ascendia_customizer_preview() {
    wp_enqueue_script(
        'customizer_preview',
        get_template_directory_uri() . '/dist/js/customize-preview.js',
        array('customize-preview', 'jquery'),
        '1.0',
        true

    );
}

add_action('customize_preview_init', 'ascendia_customizer_preview');
