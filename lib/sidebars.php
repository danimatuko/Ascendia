<?php

/**
 * Register footer widgets for the Ascendia theme.
 * 
 * @return void
 */
function ascendia_register_footer_widgets() {
    $footer_layout = get_theme_mod('ascendia_footer_layout', '3,3,3,3');
    $footer_layout = preg_replace('/\s+/', '', $footer_layout);
    $columns = array_map('intval', explode(",", $footer_layout));
    $footer_bg = "dark";

    foreach ($columns as $i => $column) {
        $args =  array(
            'id'            => 'footer-widget-' . ($i + 1),
            'name'          => sprintf(__('Footer Widget %d', 'ascendia'), ($i + 1)),
            'description'   => __('This primary sidebar appears in the blog page', 'ascendia'),
            'before_widget' => '<section id="%1$s" class="widget %2$s pl-4">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title is-size-4 has-text-weight-bold mb-1">',
            'after_title'   => '</h2>',
        );

        register_sidebar($args);
    }
}

/**
 * Register the primary sidebar for the Ascendia theme.
 *
 * @return void
 */
function ascendia_register_primary_sidebar() {
    $args = array(
        'name'          => __('Primary Sidebar', 'ascendia'),
        'id'            => 'primary-sidebar',
        'description'   => __('This primary sidebar appears in the blog page', 'ascendia'),
        'before_widget' => '<section id="%1$s" class="widget %2$s pl-4">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title is-size-4 has-text-weight-bold mb-1">',
        'after_title'   => '</h2>',
    );

    register_sidebar($args);
}

/**
 * Register all sidebars for the Ascendia theme.
 *
 * @return void
 */
function ascendia_register_sidebars() {
    ascendia_register_primary_sidebar();
    ascendia_register_footer_widgets();
}

// Hook into the widgets_init action to register sidebars
add_action('widgets_init', 'ascendia_register_sidebars');
