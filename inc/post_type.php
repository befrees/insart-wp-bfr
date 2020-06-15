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
//    register_post_type('member', $args);

    // Clients post type
    $labels = array(
        'name' => 'Client',
        'singular_name' => 'Client',
        'menu_name' => 'Clients',
        'parent_item_colon' => 'Parent item',
        'all_items' => 'All Clients',
        'view_item' => 'View Client',
        'add_new_item' => 'Add new Client',
        'add_new' => 'Add new',
        'edit_item' => 'Edit Client',
        'update_item' => 'Update item',
        'search_items' => 'Search item',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
    );
    $args = array(
        'label' => 'Client',
        'description' => 'Client',
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
    register_post_type('client', $args);

    
	$labels = array(
		'name' => 'Company',
		'singular_name' => 'Company',
		'menu_name' => 'Company',
		'parent_item_colon' => 'Company',
		'all_items' => 'All Companies',
		'view_item' => 'Company',
		'add_new_item' => 'Add new Company',
		'add_new' => 'Add new',
		'edit_item' => 'Edit Company',
		'update_item' => 'Update Company',
		'search_items' => 'Find by Company',
		'not_found' => 'Не найдено',
		'not_found_in_trash' => 'Не найдено в мусоре',
	);
	$args = array(
		'label' => 'Companies',
		'description' => 'Companies',
		'labels' => $labels,
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt',  'custom-fields', 'page-attributes'),
		'taxonomies' => array('type','api-tags'),
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
        // 'show_in_rest' => true,
	);
    register_post_type('company', $args);
    
}
add_action('init', 'custom_post_type', 0);


add_action('init', 'create_type');

function create_type() {
    // заголовки
    $labels3 = array(
        'name' => __('Type'),
        'singular_name' => __('Type'),
        'all_items' => __('All types'),
        'parent_item' => __('Parent Type'),
        'parent_item_colon' => __('Parent Type:'),
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => __('Add New Type'),
        'new_item_name' => __('New Type Name'),
        'menu_name' => __('Type'),
    );
    // параметры
    $args3 = array(
        'label' => __('Type'), // определяется параметром $labels->name
        'labels' => $labels3,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
//        'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => true,
        'tax_position' => true,
//    'update_count_callback' => '',
        'rewrite' => array('slug' => 'api'),
//    'query_var'             => '',
//        'capabilities' => array(),
//        'meta_box_cb' => 'post_categories_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
       'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//        '_builtin' => true,
//        'show_in_quick_edit' => true, // по умолчанию значение show_ui
    );
    register_taxonomy('type', array( 'company'), $args3);
}

add_action('init', 'create_tags_api');

function create_tags_api() {
    // заголовки
    $labels3 = array(
        'name' => __('Tags'),
        'singular_name' => __('Tags'),
        'all_items' => __('All tags'),
        'parent_item' => __('Parent tags'),
        'parent_item_colon' => __('Parent tags:'),
        'edit_item' => 'Edit tags',
        'update_item' => 'Update tags',
        'add_new_item' => __('Add New tags'),
        'new_item_name' => __('New tags Name'),
        'menu_name' => __('Tags'),
    );
    // параметры
    $args3 = array(
        'label' => __('Tags'), // определяется параметром $labels->name
        'labels' => $labels3,
        'public' => true,
        'show_in_nav_menus' => true, // равен аргументу public
        'show_ui' => true, // равен аргументу public
       'show_tagcloud' => true, // равен аргументу show_ui
        'hierarchical' => false,
//    'update_count_callback' => '',
        'rewrite' => array('slug' => 'api-tags'),
//    'query_var'             => '',
//        'capabilities' => array(),
//        'meta_box_cb' => 'post_categories_meta_box', // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
       'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//        '_builtin' => true,
//        'show_in_quick_edit' => true, // по умолчанию значение show_ui
    );
    register_taxonomy('api-tags', array( 'company'), $args3);
}

// End custom post