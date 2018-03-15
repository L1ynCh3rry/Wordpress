<?php

/**
 * Checks to see if we're on the homepage or not.
 */
function portfolio_is_frontpage() {
    return ( is_front_page() && !is_home() );
}

// hook into the init action and call create_custom_taxonomies when it fires
add_action('init', 'create_custom_taxonomies', 0);

/**
 * Create custom taxonomies
 */

function create_custom_taxonomies() {
    // Add new taxonomy, NOT hierarchical (like tags)
    $labels = array(
        'name' => _x('Experience', 'taxonomy general name', 'portfolio'),
        'singular_name' => _x('Position', 'taxonomy singular name', 'portfolio'),
        'search_items' => __('Search Positions', 'portfolio'),
        'popular_items' => __('Popular Positions', 'portfolio'),
        'all_items' => __('All Positions', 'portfolio'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Position', 'portfolio'),
        'update_item' => __('Update Position', 'portfolio'),
        'add_new_item' => __('Add New Position', 'portfolio'),
        'new_item_name' => __('New Position Name', 'portfolio'),
        'separate_items_with_commas' => __('Separate positions with commas', 'portfolio'),
        'add_or_remove_items' => __('Add or remove positions', 'portfolio'),
        'choose_from_most_used' => __('Choose from the most used positions', 'portfolio'),
        'not_found' => __('No positions found.', 'portfolio'),
        'menu_name' => __('Positions', 'portfolio'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'position'),
    );

    register_taxonomy('position', 'team', $args);
}


/**
 * Create custom post type
 */

function custom_post_type() {
    // EXPERIENCE
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Experience','References', 'Post Type General Name', 'portfolio'),
        'singular_name' => _x('Experience', 'Post Type Singular Name', 'portfolio'),
        'menu_name' => __('Work Experience', 'portfolio'),
        'parent_item_colon' => __('Parent Experience', 'portfolio'),
        'all_items' => __('All References', 'portfolio'),
        'view_item' => __('View reference', 'portfolio'),
        'add_new_item' => __('Add New Experience', 'portfolio'),
        'add_new' => __('Add New', 'portfolio'),
        'edit_item' => __('Edit', 'portfolio'),
        'update_item' => __('Update', 'portfolio'),
        'search_items' => __('Search References', 'portfolio'),
        'not_found' => __('Not Found', 'portfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'portfolio'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('experience', 'portfolio'),
        'description' => __('Work Experiences', 'portfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'), //'custom-fields',
        'taxonomies' => array('experience'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-clipboard'
    );

    // Registering your Custom Post Type
    register_post_type('experience', $args);
    
    
    
    
    // Education
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Education','References', 'Post Type General Name', 'portfolio'),
        'singular_name' => _x('Education', 'Post Type Singular Name', 'portfolio'),
        'menu_name' => __('Education', 'portfolio'),
        'parent_item_colon' => __('Parent Education', 'portfolio'),
        'all_items' => __('All References', 'portfolio'),
        'view_item' => __('View reference', 'portfolio'),
        'add_new_item' => __('Add New Education', 'portfolio'),
        'add_new' => __('Add New', 'portfolio'),
        'edit_item' => __('Edit', 'portfolio'),
        'update_item' => __('Update', 'portfolio'),
        'search_items' => __('Search References', 'portfolio'),
        'not_found' => __('Not Found', 'portfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'portfolio'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('education', 'portfolio'),
        'description' => __('Work Educations', 'portfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'), //'custom-fields',
        'taxonomies' => array('education'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-id-alt'
    );

    // Registering your Custom Post Type
    register_post_type('education', $args);
    
    // REFERENCE 
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Reference','References', 'Post Type General Name', 'portfolio'),
        'singular_name' => _x('Reference', 'Post Type Singular Name', 'portfolio'),
        'menu_name' => __('Reference', 'portfolio'),
        'parent_item_colon' => __('Parent Reference', 'portfolio'),
        'all_items' => __('All References', 'portfolio'),
        'view_item' => __('View reference', 'portfolio'),
        'add_new_item' => __('Add New Reference', 'portfolio'),
        'add_new' => __('Add New', 'portfolio'),
        'edit_item' => __('Edit', 'portfolio'),
        'update_item' => __('Update', 'portfolio'),
        'search_items' => __('Search References', 'portfolio'),
        'not_found' => __('Not Found', 'portfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'portfolio'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('reference', 'portfolio'),
        'description' => __('Work References', 'portfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'), //'custom-fields',
        'taxonomies' => array('reference'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-id-alt'
    );

    // Registering your Custom Post Type
    register_post_type('reference', $args);
    
    // SKILLSS
    // Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Professional Skills','References', 'Post Type General Name', 'portfolio'),
        'singular_name' => _x('Professional Skills', 'Post Type Singular Name', 'portfolio'),
        'menu_name' => __('Professional Skills', 'portfolio'),
        'parent_item_colon' => __('Parent Professional Skills', 'portfolio'),
        'all_items' => __('All References', 'portfolio'),
        'view_item' => __('View reference', 'portfolio'),
        'add_new_item' => __('Add New Professional skill', 'portfolio'),
        'add_new' => __('Add New', 'portfolio'),
        'edit_item' => __('Edit', 'portfolio'),
        'update_item' => __('Update', 'portfolio'),
        'search_items' => __('Search References', 'portfolio'),
        'not_found' => __('Not Found', 'portfolio'),
        'not_found_in_trash' => __('Not found in Trash', 'portfolio'),
    );

// Set other options for Custom Post Type

    $args = array(
        'label' => __('professional skills', 'portfolio'),
        'description' => __('Work Professional Skillss', 'portfolio'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'), //'custom-fields',
        'taxonomies' => array('professional skills'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-clipboard'
    );

    // Registering your Custom Post Type
    register_post_type('professional skills', $args);
}

/* Hook into the 'init' action so that the function
 * Containing our post type registration is not 
 * unnecessarily executed. 
 */

add_action('init', 'custom_post_type', 0);

