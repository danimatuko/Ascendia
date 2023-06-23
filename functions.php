<?php

require 'lib/customizer.php';
require 'lib/helpers.php';
require 'lib/enqueue-assets.php';
require 'lib/sidebars.php';
require 'lib/filters.php';

require 'Bootstrap_5_Nav_walker.php';
require 'lib/navigation.php';
require 'lib/theme-support.php';
require 'lib/metaboxes.php';

function ascendia_on_post_delete() {
    if (isset($_GET['action']) && $_GET['action'] === 'ascendia_delete_post') {
        if (!isset($_GET['nonce']) || !wp_verify_nonce($_GET['nonce'], 'ascendia_delete_post_' . $_GET['post'])) {
            return;
        }

        $post_id = isset($_GET['post']) ? $_GET['post'] : null;
        $post = get_post((int)$post_id);

        if (empty($post)) {
            return;
        }



        if (!current_user_can('delete_post', $post_id)) {
            return;
        }

        wp_trash_post($post_id);
        wp_safe_redirect(home_url());

        exit;
    }
}

add_action('init', 'ascendia_on_post_delete');
