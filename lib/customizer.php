<?php

/**
 * Add theme options
 */
function ascendia_customize_register($wp_customize) {
    // Set transport for blogname setting
    $wp_customize->get_setting('blogname')->transport = 'postMessage';

    // Add selective refresh partial for blogname
    $wp_customize->selective_refresh->add_partial(
        "blogname",
        array(
            'selector' => '.navbar-brand',
            'container_inclusive' => false,
            'render_callback' => function () {
                bloginfo('name');
            }
        )
    );

    // Add selective refresh partial for footer-site-info
    $wp_customize->selective_refresh->add_partial(
        "footer-site-info",
        array(
            'settings' => array('ascendia_site_info'),
            'selector' => '.site-info',
            'container_inclusive' => true,
            'render_callback' => function () {
                get_template_part("template-parts/footer/info");
            }
        )
    );

    // Add a new section for footer options
    $wp_customize->add_section(
        'ascendia_footer_options',
        array(
            'title' => 'Footer Options',
            'description' => 'Customize your footer options here.',
            'priority' => 30,
        )
    );

    // Add a setting for site info
    $wp_customize->add_setting(
        'ascendia_site_info',
        array(
            'default' => 'Ascendia theme, All rights reserved.',
            'sanitize_callback' => 'sanitize_html_except_links',
            'transport' => 'postMessage',
        )
    );

    // Add a control for site info
    $wp_customize->add_control(
        'ascendia_site_info',
        array(
            'label' => 'Site Info',
            'type' => 'text',
            'section' => 'ascendia_footer_options',
        )
    );

    // Add a setting for footer background
    $wp_customize->add_setting(
        'ascendia_footer_background',
        array(
            'default' => 'dark',
            'sanitize_callback' => 'ascendia_sanitize_footer_background',
            'transport' => 'postMessage',
        )
    );

    // Add a control for footer background
    $wp_customize->add_control(
        'ascendia_footer_background',
        array(
            'type' => 'select',
            'label' => 'Footer Background',
            'choices' => array(
                'light' => esc_html__('Light'),
                'dark' => esc_html__('Dark'),
            ),
            'section' => 'ascendia_footer_options',
        )
    );

    // Add selective refresh partial for footer
    $wp_customize->selective_refresh->add_partial(
        "footer",
        array(
            'settings' => array('ascendia_footer_background'),
            'selector' => '#footer',
            'container_inclusive' => false,
            'render_callback' => function () {
                get_footer();
            }
        )
    );

    // Add a setting for footer layout
    $wp_customize->add_setting(
        'ascendia_footer_layout',
        array(
            'default' => '3,3,3,3',
            'transport' => 'postMessage',
            'sanitize_callback' => 'sanitize_text_field',
            'validate_callback' => 'ascendia_validate_footer_layout',
        )
    );

    // Add a control for footer layout
    $wp_customize->add_control(
        'ascendia_footer_layout',
        array(
            'label' => 'Footer Layout',
            'type' => 'text',
            'section' => 'ascendia_footer_options',
        )
    );

    // Add a new section for general options
    $wp_customize->add_section(
        'ascendia_general_options',
        array(
            'title' => 'General Options',
            'description' => 'Customize your general options here.',
            'priority' => 20,

        )
    );


    // Add a setting for accent color
    $wp_customize->add_setting(
        'ascendia_accent_color',
        array(
            'default' => 'blue',
            'sanitize_callback' => 'sanitize_hex_color'
        )
    );

    // Add a setting for accent color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ascendia_accent_color', array(
        'default' => '#006865',
        'label' => __('Accent Color'),
        'section' => 'ascendia_general_options',

    )));
}

// Hook the customize_register function to the customize_register action
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
            'title' => true,
        ),
    );

    // Remove all disallowed HTML tags and attributes except for links
    $sanitized_html = wp_kses($html, $allowed_tags);

    return $sanitized_html;
}

/**
 * Sanitize the footer background input
 *
 * @param string $input The input value
 * @return string Sanitized footer background value
 */
function ascendia_sanitize_footer_background($input) {
    $valid = array('light', 'dark', true);

    if (in_array($input, $valid)) {
        return $input;
    }

    return 'dark';
}

/**
 * Validate the footer layout value
 *
 * @param WP_Error $validity The validity object
 * @param string $value The value to validate
 * @return WP_Error The updated validity object
 */
function ascendia_validate_footer_layout($validity, $value) {
    if (!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
        $validity->add('invalid_footer_layout', esc_html('Footer Layout is invalid'));
    }

    return $validity;
}
