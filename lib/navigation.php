<?php

function ascendia_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'ascendia'),
            'secondary-menu' => __('Secondary Menu', 'ascendia')
        )
    );
}

add_action('after_setup_theme', 'ascendia_register_menus');