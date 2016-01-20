<?php
add_action( 'init', 'register_cpt_sur_journal' );
function register_cpt_sur_journal() {

    $labels = array(
        'name' => _x( 'Sur Journals', 'surjournal' ),
        'singular_name' => _x( 'Sur Journal', 'surjournal' ),
        'add_new' => _x( 'Add New', 'surjournal' ),
        'add_new_item' => _x( 'Add New Sur Journal', 'surjournal' ),
        'edit_item' => _x( 'Edit Sur Journal', 'surjournal' ),
        'new_item' => _x( 'New Sur Journal', 'surjournal' ),
        'view_item' => _x( 'View Sur Journal', 'surjournal' ),
        'search_items' => _x( 'Search Sur Journals', 'surjournal' ),
        'not_found' => _x( 'No sur journals found', 'surjournal' ),
        'not_found_in_trash' => _x( 'No sur journals found in Trash', 'surjournal' ),
        'parent_item_colon' => _x( 'Parent Sur Journal:', 'surjournal' ),
        'menu_name' => _x( 'Sur Journals', 'surjournal' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'surjournal', $args );
}

add_action( 'init', 'register_cpt_book' );
function register_cpt_book() {

    $labels = array(
        'name' => _x( 'Books', 'book' ),
        'singular_name' => _x( 'Book', 'book' ),
        'add_new' => _x( 'Add New', 'book' ),
        'add_new_item' => _x( 'Add New Book', 'book' ),
        'edit_item' => _x( 'Edit Book', 'book' ),
        'new_item' => _x( 'New Book', 'book' ),
        'view_item' => _x( 'View Book', 'book' ),
        'search_items' => _x( 'Search Books', 'book' ),
        'not_found' => _x( 'No books found', 'book' ),
        'not_found_in_trash' => _x( 'No books found in Trash', 'book' ),
        'parent_item_colon' => _x( 'Parent Book:', 'book' ),
        'menu_name' => _x( 'Books', 'book' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'book', $args );
}

add_action( 'init', 'register_cpt_upcoming_book' );
function register_cpt_upcoming_book() {

    $labels = array(
        'name' => _x( 'Upcoming Books', 'upcoming-book' ),
        'singular_name' => _x( 'Upcoming Book', 'upcoming-book' ),
        'add_new' => _x( 'Add New', 'upcoming-book' ),
        'add_new_item' => _x( 'Add New Upcoming Book', 'upcoming-book' ),
        'edit_item' => _x( 'Edit Upcoming Book', 'upcoming-book' ),
        'new_item' => _x( 'New Upcoming Book', 'upcoming-book' ),
        'view_item' => _x( 'View Upcoming Book', 'upcoming-book' ),
        'search_items' => _x( 'Search Upcoming Books', 'upcoming-book' ),
        'not_found' => _x( 'No Upcoming Books found', 'upcoming-book' ),
        'not_found_in_trash' => _x( 'No Upcoming Books found in Trash', 'upcoming-book' ),
        'parent_item_colon' => _x( 'Parent Upcoming Book:', 'upcoming-book' ),
        'menu_name' => _x( 'Upcoming Books', 'upcoming-book' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies' => array( 'category' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'upcoming-book', $args );
}

add_action( 'init', 'register_cpt_essay' );
function register_cpt_essay() {

    $labels = array(
        'name' => _x( 'Essays', 'essay' ),
        'singular_name' => _x( 'Essay', 'essay' ),
        'add_new' => _x( 'Add New', 'essay' ),
        'add_new_item' => _x( 'Add New Essay', 'essay' ),
        'edit_item' => _x( 'Edit Essay', 'essay' ),
        'new_item' => _x( 'New Essay', 'essay' ),
        'view_item' => _x( 'View Essay', 'essay' ),
        'search_items' => _x( 'Search Essays', 'essay' ),
        'not_found' => _x( 'No essays found', 'essay' ),
        'not_found_in_trash' => _x( 'No essays found in Trash', 'essay' ),
        'parent_item_colon' => _x( 'Parent Essay:', 'essay' ),
        'menu_name' => _x( 'Essays', 'essay' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,

        'supports' => array( 'title', 'editor', 'thumbnail' ),

        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,

        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'essay', $args );
}
?>