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