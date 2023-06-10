<?php

function ascendia_register_sidebar() {
    register_sidebar(
        array(
            'name'          => __('Primary Sidebar', 'ascendia'),
            'id'            => 'primary-sidebar',
            'description'   => __('This primary sidbar, appears in the blog page', 'ascendia'),
            'before_widget' => '<section id="%1$s" class="widget %2$s pl-4">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title is-size-4 has-text-weight-bold mb-1">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'ascendia_register_sidebar');