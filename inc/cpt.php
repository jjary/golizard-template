<?php

function custom_post_type()
{
    $labels = array(
        'name'                => _x('Referencje', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Referencja', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Referencje', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie referencje', 'golizard-template'),
        'view_item'           => __('Zobacz referencję', 'golizard-template'),
        'add_new_item'        => __('Dodaj nową referencję', 'golizard-template'),
        'add_new'             => __('Dodaj nową', 'golizard-template'),
        'edit_item'           => __('Edytuj referencję', 'golizard-template'),
        'update_item'         => __('Aktualizuj referencję', 'golizard-template'),
        'search_items'        => __('Szukaj opinii', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Referencje', 'golizard-template'),
        'description'         => __('Sekcja wystawionych referencji', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-testimonial',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('reference', $args);

    $labels = array(
        'name'                => _x('Usługi', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Usługa', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Usługi', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie usługi', 'golizard-template'),
        'view_item'           => __('Zobacz usługę', 'golizard-template'),
        'add_new_item'        => __('Dodaj nową usługę', 'golizard-template'),
        'add_new'             => __('Dodaj nową usługę', 'golizard-template'),
        'edit_item'           => __('Edytuj usługę', 'golizard-template'),
        'update_item'         => __('Aktualizuj usługę', 'golizard-template'),
        'search_items'        => __('Szukaj usługi', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Usługi', 'golizard-template'),
        'description'         => __('Sekcja usług firmy', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-clipboard',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('services', $args);

    $labels = array(
        'name'                => _x('Współpraca', 'Post Type General Name', 'golizard-template'),
        'singular_name'       => _x('Współpraca', 'Post Type Singular Name', 'golizard-template'),
        'menu_name'           => __('Współpraca', 'golizard-template'),
        'parent_item_colon'   => __('Wpis nadrzędny', 'golizard-template'),
        'all_items'           => __('Wszystkie firmy współpracujące', 'golizard-template'),
        'view_item'           => __('Zobacz firmę', 'golizard-template'),
        'add_new_item'        => __('Dodaj nową firmę współpracującą', 'golizard-template'),
        'add_new'             => __('Dodaj nową', 'golizard-template'),
        'edit_item'           => __('Edytuj firmę współpracującą', 'golizard-template'),
        'update_item'         => __('Aktualizuj firmę współpracującą', 'golizard-template'),
        'search_items'        => __('Szukaj firmy współpracującej', 'golizard-template'),
        'not_found'           => __('Nie znaleziono', 'golizard-template'),
        'not_found_in_trash'  => __('Nie znaleziono w koszu', 'golizard-template'),
    );
        
    $args = array(
        'label'               => __('Współpraca', 'golizard-template'),
        'description'         => __('Sekcja firm współpracujących', 'golizard-template'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon'           => 'dashicons-businessman',
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('collaboration', $args);
}

add_action('init', 'custom_post_type', 0);
