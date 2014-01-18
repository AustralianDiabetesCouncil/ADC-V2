<?php
//
// Recipes 
//
add_action( 'init', 'register_cpt_recipe' );

function register_cpt_recipe() {

    $labels = array( 
        'name' => _x( 'Recipes', 'recipe' ),
        'singular_name' => _x( 'Recipe', 'recipe' ),
        'add_new' => _x( 'Add New', 'recipe' ),
        'add_new_item' => _x( 'Add New Recipe', 'recipe' ),
        'edit_item' => _x( 'Edit Recipe', 'recipe' ),
        'new_item' => _x( 'New Recipe', 'recipe' ),
        'view_item' => _x( 'View Recipe', 'recipe' ),
        'search_items' => _x( 'Search Recipes', 'recipe' ),
        'not_found' => _x( 'No recipes found', 'recipe' ),
        'not_found_in_trash' => _x( 'No recipes found in Trash', 'recipe' ),
        'parent_item_colon' => _x( 'Parent Recipe:', 'recipe' ),
        'menu_name' => _x( 'Recipes', 'recipe' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'recipe_categories' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'recipe', $args );
}

//
// Recipe Categories Taxonomy
//
add_action( 'init', 'register_taxonomy_recipe_categories' );

function register_taxonomy_recipe_categories() {

    $labels = array( 
        'name' => _x( 'Recipe Categories', 'recipe_categories' ),
        'singular_name' => _x( 'Recipe Category', 'recipe_categories' ),
        'search_items' => _x( 'Search Recipe Categories', 'recipe_categories' ),
        'popular_items' => _x( 'Popular Recipe Categories', 'recipe_categories' ),
        'all_items' => _x( 'All Recipe Categories', 'recipe_categories' ),
        'parent_item' => _x( 'Parent Recipe Category', 'recipe_categories' ),
        'parent_item_colon' => _x( 'Parent Recipe Category:', 'recipe_categories' ),
        'edit_item' => _x( 'Edit Recipe Category', 'recipe_categories' ),
        'update_item' => _x( 'Update Recipe Category', 'recipe_categories' ),
        'add_new_item' => _x( 'Add New Recipe Category', 'recipe_categories' ),
        'new_item_name' => _x( 'New Recipe Category', 'recipe_categories' ),
        'separate_items_with_commas' => _x( 'Separate recipe categories with commas', 'recipe_categories' ),
        'add_or_remove_items' => _x( 'Add or remove recipe categories', 'recipe_categories' ),
        'choose_from_most_used' => _x( 'Choose from the most used recipe categories', 'recipe_categories' ),
        'menu_name' => _x( 'Recipe Categories', 'recipe_categories' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'recipe_categories', array('recipe'), $args );
}

//
// Recipe Tags
//
add_action( 'init', 'register_taxonomy_recipe_tags' );

function register_taxonomy_recipe_tags() {

    $labels = array( 
        'name' => _x( 'Recipe Tags', 'recipe_tags' ),
        'singular_name' => _x( 'Recipe Tag', 'recipe_tags' ),
        'search_items' => _x( 'Search Recipe Tags', 'recipe_tags' ),
        'popular_items' => _x( 'Popular Recipe Tags', 'recipe_tags' ),
        'all_items' => _x( 'All Recipe Tags', 'recipe_tags' ),
        'parent_item' => _x( 'Parent Recipe Tag', 'recipe_tags' ),
        'parent_item_colon' => _x( 'Parent Recipe Tag:', 'recipe_tags' ),
        'edit_item' => _x( 'Edit Recipe Tag', 'recipe_tags' ),
        'update_item' => _x( 'Update Recipe Tag', 'recipe_tags' ),
        'add_new_item' => _x( 'Add New Recipe Tag', 'recipe_tags' ),
        'new_item_name' => _x( 'New Recipe Tag', 'recipe_tags' ),
        'separate_items_with_commas' => _x( 'Separate recipe tags with commas', 'recipe_tags' ),
        'add_or_remove_items' => _x( 'Add or remove Recipe Tags', 'recipe_tags' ),
        'choose_from_most_used' => _x( 'Choose from most used Recipe Tags', 'recipe_tags' ),
        'menu_name' => _x( 'Recipe Tags', 'recipe_tags' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'recipe_tags', array('recipe'), $args );
}

//
// Event Post Type
//
add_action( 'init', 'register_cpt_event' );

function register_cpt_event() {

    $labels = array( 
        'name' => _x( 'Events', 'event' ),
        'singular_name' => _x( 'Event', 'event' ),
        'add_new' => _x( 'Add New', 'event' ),
        'add_new_item' => _x( 'Add New Event', 'event' ),
        'edit_item' => _x( 'Edit Event', 'event' ),
        'new_item' => _x( 'New Event', 'event' ),
        'view_item' => _x( 'View Event', 'event' ),
        'search_items' => _x( 'Search Events', 'event' ),
        'not_found' => _x( 'No events found', 'event' ),
        'not_found_in_trash' => _x( 'No events found in Trash', 'event' ),
        'parent_item_colon' => _x( 'Parent Event:', 'event' ),
        'menu_name' => _x( 'Events', 'event' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'event_categories' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'event', $args );
}

//
// Event Categories Taxonomy
//
add_action( 'init', 'register_taxonomy_event_categories' );

function register_taxonomy_event_categories() {

    $labels = array( 
        'name' => _x( 'Event Categories', 'event_categories' ),
        'singular_name' => _x( 'Event Category', 'event_categories' ),
        'search_items' => _x( 'Search Event Categories', 'event_categories' ),
        'popular_items' => _x( 'Popular Event Categories', 'event_categories' ),
        'all_items' => _x( 'All Event Categories', 'event_categories' ),
        'parent_item' => _x( 'Parent Event Category', 'event_categories' ),
        'parent_item_colon' => _x( 'Parent Event Category:', 'event_categories' ),
        'edit_item' => _x( 'Edit Event Category', 'event_categories' ),
        'update_item' => _x( 'Update Event Category', 'event_categories' ),
        'add_new_item' => _x( 'Add New Event Category', 'event_categories' ),
        'new_item_name' => _x( 'New Event Category', 'event_categories' ),
        'separate_items_with_commas' => _x( 'Separate event categories with commas', 'event_categories' ),
        'add_or_remove_items' => _x( 'Add or remove event categories', 'event_categories' ),
        'choose_from_most_used' => _x( 'Choose from the most used event categories', 'event_categories' ),
        'menu_name' => _x( 'Event Categories', 'event_categories' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'event_categories', array('event'), $args );
}

// 
// News Post Type
//
add_action( 'init', 'register_cpt_news' );

function register_cpt_news() {

    $labels = array( 
        'name' => _x( 'News', 'news' ),
        'singular_name' => _x( 'News', 'news' ),
        'add_new' => _x( 'Add New', 'news' ),
        'add_new_item' => _x( 'Add New News', 'news' ),
        'edit_item' => _x( 'Edit News', 'news' ),
        'new_item' => _x( 'New News', 'news' ),
        'view_item' => _x( 'View News', 'news' ),
        'search_items' => _x( 'Search News', 'news' ),
        'not_found' => _x( 'No news found', 'news' ),
        'not_found_in_trash' => _x( 'No news found in Trash', 'news' ),
        'parent_item_colon' => _x( 'Parent News:', 'news' ),
        'menu_name' => _x( 'News', 'news' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
        'taxonomies' => array( 'news_categories' ),
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

    register_post_type( 'news', $args );
}

//
// News Categories
//
add_action( 'init', 'register_taxonomy_news_categories' );

function register_taxonomy_news_categories() {

    $labels = array( 
        'name' => _x( 'News Categories', 'news_categories' ),
        'singular_name' => _x( 'News Category', 'news_categories' ),
        'search_items' => _x( 'Search News Categories', 'news_categories' ),
        'popular_items' => _x( 'Popular News Categories', 'news_categories' ),
        'all_items' => _x( 'All News Categories', 'news_categories' ),
        'parent_item' => _x( 'Parent News Category', 'news_categories' ),
        'parent_item_colon' => _x( 'Parent News Category:', 'news_categories' ),
        'edit_item' => _x( 'Edit News Category', 'news_categories' ),
        'update_item' => _x( 'Update News Category', 'news_categories' ),
        'add_new_item' => _x( 'Add New News Category', 'news_categories' ),
        'new_item_name' => _x( 'New News Category', 'news_categories' ),
        'separate_items_with_commas' => _x( 'Separate news categories with commas', 'news_categories' ),
        'add_or_remove_items' => _x( 'Add or remove news categories', 'news_categories' ),
        'choose_from_most_used' => _x( 'Choose from the most used news categories', 'news_categories' ),
        'menu_name' => _x( 'News Categories', 'news_categories' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'news_categories', array('news'), $args );
}

//
// News Tags
//
add_action( 'init', 'register_taxonomy_news_tags' );

function register_taxonomy_news_tags() {

    $labels = array( 
        'name' => _x( 'News Tags', 'news_tags' ),
        'singular_name' => _x( 'News Tag', 'news_tags' ),
        'search_items' => _x( 'Search News Tags', 'news_tags' ),
        'popular_items' => _x( 'Popular News Tags', 'news_tags' ),
        'all_items' => _x( 'All News Tags', 'news_tags' ),
        'parent_item' => _x( 'Parent News Tag', 'news_tags' ),
        'parent_item_colon' => _x( 'Parent News Tag:', 'news_tags' ),
        'edit_item' => _x( 'Edit News Tag', 'news_tags' ),
        'update_item' => _x( 'Update News Tag', 'news_tags' ),
        'add_new_item' => _x( 'Add New News Tag', 'news_tags' ),
        'new_item_name' => _x( 'New News Tag', 'news_tags' ),
        'separate_items_with_commas' => _x( 'Separate news tags with commas', 'news_tags' ),
        'add_or_remove_items' => _x( 'Add or remove News Tags', 'news_tags' ),
        'choose_from_most_used' => _x( 'Choose from most used News Tags', 'news_tags' ),
        'menu_name' => _x( 'News Tags', 'news_tags' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => false,
        'hierarchical' => false,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'news_tags', array('news'), $args );
}

//
// Resources
//
add_action( 'init', 'register_cpt_resource' );

function register_cpt_resource() {

    $labels = array( 
        'name' => _x( 'Resources', 'resource' ),
        'singular_name' => _x( 'Resource', 'resource' ),
        'add_new' => _x( 'Add New', 'resource' ),
        'add_new_item' => _x( 'Add New Resource', 'resource' ),
        'edit_item' => _x( 'Edit Resource', 'resource' ),
        'new_item' => _x( 'New Resource', 'resource' ),
        'view_item' => _x( 'View Resource', 'resource' ),
        'search_items' => _x( 'Search Resources', 'resource' ),
        'not_found' => _x( 'No resources found', 'resource' ),
        'not_found_in_trash' => _x( 'No resources found in Trash', 'resource' ),
        'parent_item_colon' => _x( 'Parent Resource:', 'resource' ),
        'menu_name' => _x( 'Resources', 'resource' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields', 'page-attributes' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 10,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'resource', $args );
}

//
// Slides
//
add_action( 'init', 'register_cpt_slide' );

function register_cpt_slide() {

    $labels = array( 
        'name' => _x( 'Slides', 'slide' ),
        'singular_name' => _x( 'Slide', 'slide' ),
        'add_new' => _x( 'Add New', 'slide' ),
        'add_new_item' => _x( 'Add New Slide', 'slide' ),
        'edit_item' => _x( 'Edit Slide', 'slide' ),
        'new_item' => _x( 'New Slide', 'slide' ),
        'view_item' => _x( 'View Slide', 'slide' ),
        'search_items' => _x( 'Search Slides', 'slide' ),
        'not_found' => _x( 'No slides found', 'slide' ),
        'not_found_in_trash' => _x( 'No slides found in Trash', 'slide' ),
        'parent_item_colon' => _x( 'Parent Slide:', 'slide' ),
        'menu_name' => _x( 'Slides', 'slide' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'slide', $args );
}