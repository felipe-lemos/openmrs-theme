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

/**
 * Enqueue configurable hero block editor assets
 */
function openmrs_enqueue_hero_block_assets() {
    // Check if the hero block script exists
    if (file_exists(get_template_directory() . '/blocks/hero-block/block.js')) {
        wp_enqueue_script(
            'openmrs-hero-block-editor',
            get_template_directory_uri() . '/blocks/hero-block/block.js',
            array('wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components'),
            filemtime(get_template_directory() . '/blocks/hero-block/block.js'),
            true
        );
    }
    
    // Check if the hero block editor style exists
    if (file_exists(get_template_directory() . '/blocks/hero-block/editor.css')) {
        wp_enqueue_style(
            'openmrs-hero-block-editor-style',
            get_template_directory_uri() . '/blocks/hero-block/editor.css',
            array(),
            filemtime(get_template_directory() . '/blocks/hero-block/editor.css')
        );
    }
}
add_action('enqueue_block_editor_assets', 'openmrs_enqueue_hero_block_assets');

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

/**
 * Register configurable hero block
 */
function openmrs_register_hero_block() {
    register_block_type('openmrs-theme/hero-block', array(
        'render_callback' => 'openmrs_render_hero_block',
        'attributes' => array(
            'style' => array(
                'type' => 'string',
                'default' => 'community',
            ),
            'breadcrumb' => array(
                'type' => 'string',
                'default' => 'Community',
            ),
            'heading' => array(
                'type' => 'string',
                'default' => 'A generous, talented<br>global community',
            ),
            'description' => array(
                'type' => 'string',
                'default' => 'Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.',
            ),
        ),
    ));
}
add_action('init', 'openmrs_register_hero_block');

/**
 * Render the hero block
 */
function openmrs_render_hero_block($attributes) {
    $style_map = array(
        'community' => array(
            'border' => 'border-purple',
            'text_color' => 'text-color-scampi'
        ),
        'product' => array(
            'border' => 'border-teal',
            'text_color' => 'text-color-teal'
        ),
        'about-us' => array(
            'border' => 'border-orange',
            'text_color' => 'text-color-orange'
        ),
    );

    $style = isset($attributes['style']) ? $attributes['style'] : 'community';
    $border_class = isset($style_map[$style]) ? $style_map[$style]['border'] : $style_map['community']['border'];
    $text_color_class = isset($style_map[$style]) ? $style_map[$style]['text_color'] : $style_map['community']['text_color'];
    
    $breadcrumb = isset($attributes['breadcrumb']) ? $attributes['breadcrumb'] : 'Community';
    $heading = isset($attributes['heading']) ? $attributes['heading'] : 'A generous, talented<br>global community';
    $description = isset($attributes['description']) ? $attributes['description'] : 'Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.';
    
    ob_start();
    ?>
    <div class="wp-block-group padding-section-large border-top-16px <?php echo esc_attr($border_class); ?>">
        <div class="wp-block-group header44_component">
            <div class="wp-block-group max-width-large">
                <div class="wp-block-group margin-bottom margin-xsmall flex align-middle _8px-gap">
                    <p><a href="/" class="text-style-breadcrumb">Home</a><span class="code-icon is-small"><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.70697 11.9496L7.41397 6.24264L1.70697 0.535645L0.292969 1.94964L4.58597 6.24264L0.292969 10.5356L1.70697 11.9496Z" fill="#666666"></path>
                    </svg></span><a href="#" class="text-style-breadcrumb is-current"><?php echo esc_html($breadcrumb); ?></a></p>
                </div>
                
                <div class="wp-block-group margin-bottom margin-small">
                    <h1 class="wp-block-heading heading-style-h1 <?php echo esc_attr($text_color_class); ?>"><?php echo wp_kses_post($heading); ?></h1>
                </div>
                
                <p class="text-size-medium"><?php echo wp_kses_post($description); ?></p>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

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

/**
 * Enqueue editor styles for Gutenberg
 */
function openmrs_theme_editor_styles() {
    // Add editor styles
    add_theme_support('editor-styles');
    
    // Enqueue editor styles
    add_editor_style('assets/css/editor-style.css');
}
add_action('after_setup_theme', 'openmrs_theme_editor_styles');

/**
 * Create required directories for the hero block if they don't exist
 */
function openmrs_create_block_directories() {
    $block_dir = get_template_directory() . '/blocks/hero-block';
    
    if (!file_exists($block_dir)) {
        wp_mkdir_p($block_dir);
    }
}
add_action('after_setup_theme', 'openmrs_create_block_directories');
?>