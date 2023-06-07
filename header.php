<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav>
            <!-- Add your navigation menu here -->
            <!-- <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?> -->
        </nav>
    </header>

    <main>