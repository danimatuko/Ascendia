<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler border" type="button" data-bs-toggle="collapse"
                    data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon display-5">&#8801;</span>
                </button>
                <a class="navbar-brand" href="#">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        bloginfo('name');
                    } ?>

                </a>

                <div class="collapse navbar-collapse" id="main-menu">

                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new Bootstrap_5_Nav_walker()
                    ));
                    ?>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>





    <main class="section">