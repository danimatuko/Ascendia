<?php

/**
 * Add theme options
 */
function ascendia_customize_register($wp_customize) {
    // Add a new section for theme options
    $wp_customize->add_section('ascendia_footer_options', array(
        'title' => 'Footer Options',
        'description' => 'Customize your footer options here.',
        'priority' => 30,
    ));

    // Add a setting for site info
    $wp_customize->add_setting('ascendia_site_info', array(
        'default' => 'Ascendia theme, All rights reserved.',
        'sanitize_callback' => 'sanitize_html_except_links',
        'transport' => 'postMessage'
    ));

    // Add a control for site info
    $wp_customize->add_control('ascendia_site_info', array(
        'label' => 'Site Info',
        'type' => 'text',
        'section' => 'ascendia_footer_options',
    ));
}

add_action('customize_register', 'ascendia_customize_register');




/**
 * Sanitize HTML content while preserving links
 * Allow <a> tags with href attribute and target attribute
 * Remove all other HTML tags and attributes
 *
 * @param string $html The HTML content to sanitize
 * @return string Sanitized HTML content
 */
function sanitize_html_except_links($html) {
    // Define the allowed HTML tags and attributes
    $allowed_tags = array(
        'a' => array(
            'href' => true,
            'title' => true
        ),
    );

    // Remove all disallowed HTML tags and attributes except for links
    $sanitized_html = wp_kses($html, $allowed_tags);

    return $sanitized_html;
}