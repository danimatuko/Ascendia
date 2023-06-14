<?php


/**
 * Enqueue stylesheets
 *
 * @return void
 */
function ascendia_enqueue_styles() {
    // wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');  
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/dist/css/reset.css');

    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array('reset'));
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/main.css');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_styles');




/**
 * Enqueue scripts
 *
 * @return void
 */
function ascendia_enqueue_scripts() {
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
    wp_enqueue_script('my-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_scripts');
