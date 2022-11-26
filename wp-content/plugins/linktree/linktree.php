<?php
/**
 * Plugin Name: Portfolio de liens
 * Description: Manage some personals links like linktr.ee
 * Author: Oscar PALISSOT
 * Author URI: https://github.com/OscarPALISSOT
 */

add_action('init', function () {
    register_post_type('links', [
        'label' => __('Link', 'linktree'),
        'menu_icon' => 'dashicons-admin-site-alt3',
        'has_archive' => true,
        'labels' => [
            'name' => __('Links', 'linktree'),
            'singular_name' => __('Link', 'linktree'),
            'add_new' => __('Add new link', 'linktree'),
            'add_new_item' => __('Add new link', 'linktree'),
            'new_item' => __('New link', 'linktree'),
            'edit_item' => __('Edit link', 'linktree'),
            'view_item' => __('View link', 'linktree'),
            'all_items' => __('links', 'linktree'),
            'search_items' => __('Search links', 'linktree'),
            'parent_item_colon' => __('Parent link:', 'linktree'),
            'not_found' => __('No links found.', 'linktree'),
            'not_found_in_trash' => __('No links found in Trash.', 'linktree'),
            'archives' => __('link archives', 'linktree'),
            'insert_into_item' => __('Insert into link', 'linktree'),
            'uploaded_to_this_item' => __('Uploaded to this link', 'linktree'),
            'filter_items_list' => __('Filter links list', 'linktree'),
            'items_list_navigation' => __('links list navigation', 'linktree'),
            'items_list' => __('links list', 'linktree'),
        ],
        'public' => true,
        'exclude_from_search' => false,
        'support' => [
            'title',
            'editor',
            'excerpt',
        ]
    ]);
});


register_activation_hook(__FILE__, 'flush_rewrite_rules');
register_deactivation_hook(__FILE__, 'flush_rewrite_rules');