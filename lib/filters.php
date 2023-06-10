<?php

/**
 * Change this number to the desired excerpt length
 *
 * @param int $length
 * @return int
 */
function ascendia_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'ascendia_excerpt_length');



/**
 * Changes the to the desired excerpt ending
 *
 * @param string $more
 * @return string
 */
function  ascendia_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'ascendia_excerpt_more');
