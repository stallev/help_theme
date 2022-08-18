<?php
/**
 * Hide editor on specific pages.
 *
 */
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {

    remove_post_type_support('page', 'editor');
    remove_post_type_support('post', 'editor');

}