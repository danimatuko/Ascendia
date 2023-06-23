<?php

/**
 * Render the HTML for the Ascendia post meta box.
 *
 * @param WP_Post $post The current post object.
 * @return void
 */
function ascendia_render_post_meta_box_html($post) {
    $subtitle = get_post_meta($post->ID, '__ascendia_post_subtitle', true);
?>
    <div>
        <label for="ascendia_post_subtitle"><?php esc_html_e('Post Subtitle'); ?></label>
        <input type="text" id="ascendia_post_subtitle" name="ascendia_post_subtitle_field" class="widefat" value="<?php echo esc_attr($subtitle); ?>">
    </div>
<?php
}

/**
 * Add the Ascendia post meta box to the post editor.
 *
 * @return void
 */
function ascendia_add_post_meta_box() {
    add_meta_box(
        'ascendia_post_meta_box',
        'Post Settings',
        'ascendia_render_post_meta_box_html',
        'post',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'ascendia_add_post_meta_box');

/**
 * Save the Ascendia post meta box data when the post is saved.
 *
 * @param int     $post_id The ID of the post being saved.
 * @param WP_Post $post    The post object being saved.
 * @return void
 */
function ascendia_save_post_meta_box($post_id, $post) {
    $subtitle = isset($_POST['ascendia_post_subtitle_field']) ? sanitize_text_field($_POST['ascendia_post_subtitle_field']) : '';
    update_post_meta($post_id, '__ascendia_post_subtitle', $subtitle);
}
add_action('save_post', 'ascendia_save_post_meta_box', 10, 2);
