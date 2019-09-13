<?php

function custom_post_type()
{
    // Members post type
    $labels = array(
        'name' => 'Member',
        'singular_name' => 'Member',
        'menu_name' => 'Members',
        'parent_item_colon' => 'Parent item',
        'all_items' => 'All members',
        'view_item' => 'View member',
        'add_new_item' => 'Add new member',
        'add_new' => 'Add new',
        'edit_item' => 'Edit member',
        'update_item' => 'Update item',
        'search_items' => 'Search item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
    );
    $args = array(
        'label' => 'Member',
        'description' => 'Member',
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'trackbacks'),
//        'taxonomies' => array('archive-page',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        // 'menu_icon' => get_bloginfo('template_url') . '/img/customer_review.png',
        'menu_icon' => 'dashicons-admin-multisite',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        //'show_in_rest' => true, // Important !
    );
    register_post_type('member', $args);
}
add_action('init', 'custom_post_type', 0);