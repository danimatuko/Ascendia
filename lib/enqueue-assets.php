<?php


/**
 * Enqueue stylesheets
 *
 * @return void
 */
function ascendia_enqueue_styles() {
    wp_enqueue_style('bulma', 'https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_styles');




/**
 * Enqueue scripts
 *
 * @return void
 */
function ascendia_enqueue_scripts() {
    wp_enqueue_script('my-script', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_scripts');