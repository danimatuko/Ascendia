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
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for site info
    $wp_customize->add_control('ascendia_site_info', array(
        'label' => 'Site Info',
        'type' => 'text',
        'section' => 'ascendia_footer_options',
    ));
}

add_action('customize_register', 'ascendia_customize_register');
