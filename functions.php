<?php
// Enqueue cleaned CSS
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('openmrs-theme-style', get_template_directory_uri() . '/assets/css/style.css');
});

/**
 * Enqueue block pattern specific styles
 */
function openmrs_enqueue_block_pattern_styles() {
    wp_enqueue_style(
        'openmrs-block-patterns',
        get_template_directory_uri() . '/assets/css/block-patterns.css',
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action('wp_enqueue_scripts', 'openmrs_enqueue_block_pattern_styles');

/**
 * Enqueue styles for the block editor
 */
function openmrs_enqueue_editor_styles() {
    // Add editor styles
    add_editor_style('assets/css/style.css');
    add_editor_style('assets/css/block-patterns.css');
    
    // Enqueue custom editor stylesheet with more specific styles
    wp_enqueue_style(
        'openmrs-editor-styles',
        get_template_directory_uri() . '/assets/css/editor-styles.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('enqueue_block_editor_assets', 'openmrs_enqueue_editor_styles');

// Register custom block styles
function openmrs_register_block_styles() {
    // Register icon styles for the Community Stats pattern
    register_block_style('core/image', [
        'name' => 'icon-code',
        'label' => __('Code Icon', 'openmrs-theme'),
    ]);
    
    register_block_style('core/image', [
        'name' => 'icon-contributors',
        'label' => __('Contributors Icon', 'openmrs-theme'),
    ]);
    
    register_block_style('core/image', [
        'name' => 'icon-globe',
        'label' => __('Globe Icon', 'openmrs-theme'),
    ]);
    
    register_block_style('core/image', [
        'name' => 'icon-buildings',
        'label' => __('Buildings Icon', 'openmrs-theme'),
    ]);
}
add_action('init', 'openmrs_register_block_styles');

/**
 * Register Case Study post type
 */
function openmrs_register_case_study_post_type() {
    $labels = array(
        'name'               => _x( 'Case Studies', 'post type general name', 'openmrs-theme' ),
        'singular_name'      => _x( 'Case Study', 'post type singular name', 'openmrs-theme' ),
        'menu_name'          => _x( 'Case Studies', 'admin menu', 'openmrs-theme' ),
        'name_admin_bar'     => _x( 'Case Study', 'add new on admin bar', 'openmrs-theme' ),
        'add_new'            => _x( 'Add New', 'case study', 'openmrs-theme' ),
        'add_new_item'       => __( 'Add New Case Study', 'openmrs-theme' ),
        'new_item'           => __( 'New Case Study', 'openmrs-theme' ),
        'edit_item'          => __( 'Edit Case Study', 'openmrs-theme' ),
        'view_item'          => __( 'View Case Study', 'openmrs-theme' ),
        'all_items'          => __( 'All Case Studies', 'openmrs-theme' ),
        'search_items'       => __( 'Search Case Studies', 'openmrs-theme' ),
        'parent_item_colon'  => __( 'Parent Case Studies:', 'openmrs-theme' ),
        'not_found'          => __( 'No case studies found.', 'openmrs-theme' ),
        'not_found_in_trash' => __( 'No case studies found in Trash.', 'openmrs-theme' )
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case-study' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'show_in_rest'       => true // Enable Gutenberg editor
    );

    register_post_type( 'case_study', $args );
}
add_action( 'init', 'openmrs_register_case_study_post_type' );

// Theme supports
add_action('after_setup_theme', function() {
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    // ✅ NEW: Support for breadcrumb block
    add_theme_support('block-breadcrumbs');
    
    // Register navigation menus
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'openmrs-theme'),
            'footer' => __('Footer Menu', 'openmrs-theme'),
        )
    );

    register_block_pattern_category('openmrs-theme', array(
        'label' => __('OpenMRS Theme Patterns', 'openmrs-theme')
    ));

    foreach (glob(__DIR__ . "/patterns/*.php") as $file) {
        require $file;
    }
});
?>