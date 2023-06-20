<?php

/**
 * Display the post meta information.
 *
 * @return void
 */
function ascendia_post_meta() {
    $date = get_the_date();
    $author = get_the_author();
    $authorURL = get_author_posts_url(get_the_author_meta("ID"));

    echo
    <<<POSTMETA
        Posted on <time class="post-date">$date</time> by
        <a href="$authorURL">$author</a>
    POSTMETA;
}



/**
 * Display the "Read More" link with title attribute.
 *
 * @return void
 */
function ascendia_read_more_link() {
    $permalink = esc_url(get_the_permalink());
    $title = esc_attr(get_the_title());
    $titleAttribute = esc_attr($title);

    echo
    <<<READ_MORE
        <a href="$permalink" title="$titleAttribute" class='card-link'>
            Read More <span class="visually-hidden">about $title</span>
        </a>
    READ_MORE;
}



/**
 * Display the Delete post button.
 *
 * @return void
 */
function ascendia_delete_post() {
    $URL = add_query_arg([
        'action' => 'ascendia_delete_post',
        'post' => get_the_ID()
    ], home_url());

    $title = esc_attr(get_the_title());

    if (!current_user_can('delete_post', get_the_ID())) return;

    echo
    <<<DELETE_POST
        <a href="$URL" class='card-link text-danger'>
            Delete Post <span class="visually-hidden">about $title</span>
        </a>
    DELETE_POST;
}
