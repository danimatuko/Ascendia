<?php

/**
 * Custom WordPress Loop
 *
 * This loop checks if there are any posts available and displays them using the template parts.
 * If no posts are found, it displays the "content-none" template part.
 */

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/post/content');
    endwhile;
    the_posts_pagination();
else :
    get_template_part('template-parts/post/content-none');
endif;
