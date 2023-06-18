<?php


/**
 * Enqueue stylesheets
 *
 * @return void
 */
function ascendia_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/dist/css/reset.css');

    // $custom_css = "
    // :root,[data-bs-theme=light] {
    //     --bs-complement: #20c997;
    //   }
    // ";

    // wp_add_inline_style('bootstrap', $custom_css);

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/dist/css/bootstrap.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/main.css');
}

add_action('wp_enqueue_scripts', 'ascendia_enqueue_styles');


// function theme_custom_css() {
//     $primary_color = get_theme_mod('ascendia_accent_color', '#006865');

//     // Output customized CSS
//     $custom_css = "
//       <style>

//       --bs-complement {
//          color:red !important;
//         }
//       </style>
//     ";

//     echo $custom_css;
// }
// add_action('wp_head', 'theme_custom_css');



// function your_theme_add_inline_styles() {
//     $primary_color = get_theme_mod('ascendia_accent_color', '#006865');
//     $custom_css = "
//     :root,[data-bs-theme=light] {
//         --bs-complement: #20c997;
//       }
//     ";

//     wp_add_inline_style('bootstrap', $custom_css);
// }
// add_action('wp_enqueue_scripts', 'your_theme_add_inline_styles');



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
