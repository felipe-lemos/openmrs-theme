<?php

// === Enqueue Theme and Editor Styles ===

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'openmrs-theme-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style(
        'openmrs-block-patterns',
        get_template_directory_uri() . '/assets/css/block-patterns.css',
        [],
        wp_get_theme()->get('Version')
    );
});

add_action('enqueue_block_editor_assets', function() {
    add_editor_style('assets/css/style.css');
    add_editor_style('assets/css/block-patterns.css');
    wp_enqueue_style(
        'openmrs-editor-styles',
        get_template_directory_uri() . '/assets/css/editor-styles.css',
        [],
        wp_get_theme()->get('Version')
    );
});

// === Enqueue Hero Block Editor Assets ===

add_action('enqueue_block_editor_assets', function() {
    $block_dir = get_template_directory() . '/blocks/hero-block/';
    $block_uri = get_template_directory_uri() . '/blocks/hero-block/';
    if (file_exists($block_dir . 'block.js')) {
        wp_enqueue_script(
            'openmrs-hero-block-editor',
            $block_uri . 'block.js',
            ['wp-blocks', 'wp-element', 'wp-block-editor', 'wp-components'],
            filemtime($block_dir . 'block.js'),
            true
        );
    }
    if (file_exists($block_dir . 'editor.css')) {
        wp_enqueue_style(
            'openmrs-hero-block-editor-style',
            $block_uri . 'editor.css',
            [],
            filemtime($block_dir . 'editor.css')
        );
    }
});

// === Register Custom Block Styles ===

add_action('init', function() {
    $styles = [
        ['icon-code', __('Code Icon', 'openmrs-theme')],
        ['icon-contributors', __('Contributors Icon', 'openmrs-theme')],
        ['icon-globe', __('Globe Icon', 'openmrs-theme')],
        ['icon-buildings', __('Buildings Icon', 'openmrs-theme')],
    ];
    foreach ($styles as [$name, $label]) {
        register_block_style('core/image', [
            'name'  => $name,
            'label' => $label,
        ]);
    }
});

// === Register Case Study Post Type ===

add_action('init', function() {
    $labels = [
        'name'               => _x('Case Studies', 'post type general name', 'openmrs-theme'),
        'singular_name'      => _x('Case Study', 'post type singular name', 'openmrs-theme'),
        'menu_name'          => _x('Case Studies', 'admin menu', 'openmrs-theme'),
        'name_admin_bar'     => _x('Case Study', 'add new on admin bar', 'openmrs-theme'),
        'add_new'            => _x('Add New', 'case study', 'openmrs-theme'),
        'add_new_item'       => __('Add New Case Study', 'openmrs-theme'),
        'new_item'           => __('New Case Study', 'openmrs-theme'),
        'edit_item'          => __('Edit Case Study', 'openmrs-theme'),
        'view_item'          => __('View Case Study', 'openmrs-theme'),
        'all_items'          => __('All Case Studies', 'openmrs-theme'),
        'search_items'       => __('Search Case Studies', 'openmrs-theme'),
        'parent_item_colon'  => __('Parent Case Studies:', 'openmrs-theme'),
        'not_found'          => __('No case studies found.', 'openmrs-theme'),
        'not_found_in_trash' => __('No case studies found in Trash.', 'openmrs-theme'),
    ];
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'case-study'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
        'show_in_rest'       => true,
    ];
    register_post_type('case_study', $args);
});

// === Register Event Post Type and Taxonomy ===

add_action('init', function() {
    // Event CPT
    $labels = [
        'name'               => _x('Events', 'post type general name', 'openmrs-theme'),
        'singular_name'      => _x('Event', 'post type singular name', 'openmrs-theme'),
        'menu_name'          => _x('Events', 'admin menu', 'openmrs-theme'),
        'name_admin_bar'     => _x('Event', 'add new on admin bar', 'openmrs-theme'),
        'add_new'            => _x('Add New', 'event', 'openmrs-theme'),
        'add_new_item'       => __('Add New Event', 'openmrs-theme'),
        'new_item'           => __('New Event', 'openmrs-theme'),
        'edit_item'          => __('Edit Event', 'openmrs-theme'),
        'view_item'          => __('View Event', 'openmrs-theme'),
        'all_items'          => __('All Events', 'openmrs-theme'),
        'search_items'       => __('Search Events', 'openmrs-theme'),
        'parent_item_colon'  => __('Parent Events:', 'openmrs-theme'),
        'not_found'          => __('No events found.', 'openmrs-theme'),
        'not_found_in_trash' => __('No events found in Trash.', 'openmrs-theme'),
    ];
    $args = [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => ['slug' => 'event'],
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => ['title', 'editor', 'excerpt', 'thumbnail'],
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-calendar-alt',
    ];
    register_post_type('event', $args);

    // Event Category Taxonomy
    register_taxonomy('event_category', 'event', [
        'label'        => __('Event Categories', 'openmrs-theme'),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => ['slug' => 'event-category'],
    ]);
});

// === Register Event Meta Fields ===

add_action('init', function() {
    $fields = [
        'event_date', 'event_weekday', 'event_time', 'event_timezone',
        'event_time_alt', 'event_time_altzone', 'event_location',
        'calendar_link', 'details_link'
    ];
    foreach ($fields as $field) {
        register_post_meta('event', $field, [
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
            'auth_callback' => '__return_true',
        ]);
    }
});

// === Register Case Studies Block ===

add_action('init', function() {
    register_block_type('openmrs-theme/case-studies', [
        'render_callback' => 'openmrs_render_case_studies_block',
        'attributes' => [
            'title' => [
                'type'    => 'string',
                'default' => 'Work with us',
            ],
            'description' => [
                'type'    => 'string',
                'default' => 'Are you ready to contribute your skills and experience to helping us achieve our mission worldwide?',
            ],
            'tag' => [
                'type'    => 'string',
                'default' => 'Jobs',
            ],
            'button_url' => [
                'type'    => 'string',
                'default' => 'https://talk.openmrs.org/c/implementing/job-board/19',
            ],
            'button_text' => [
                'type'    => 'string',
                'default' => 'Go to job board',
            ],
        ],
    ]);
});



// === Register Hero Block ===

add_action('init', function() {
    register_block_type('openmrs-theme/hero-block', [
        'render_callback' => 'openmrs_render_hero_block',
        'attributes' => [
            'style' => [
                'type'    => 'string',
                'default' => 'community',
            ],
            'breadcrumb' => [
                'type'    => 'string',
                'default' => 'Community',
            ],
            'heading' => [
                'type'    => 'string',
                'default' => 'A generous, talented<br>global community',
            ],
            'description' => [
                'type'    => 'string',
                'default' => 'Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.',
            ],
        ],
    ]);
});

function openmrs_render_hero_block($attributes) {
    $style_map = [
        'community' => [
            'background' => 'background-color-purple',
            'border'     => 'border-purple',
            'heading'    => 'text-color-scampi',
            'icon'       => 'c4a7d726-b376-87f0-ba65-a76a5d0813b3',
        ],
        'product' => [
            'background' => 'background-color-teal',
            'border'     => 'border-teal',
            'heading'    => '',
            'icon'       => 'b1c41d3a-f7e8-8277-72d2-c8c7ecadbf80',
        ],
        'about-us' => [
            'background' => 'background-color-orange',
            'border'     => 'border-orange',
            'heading'    => 'text-color-tango',
            'icon'       => 'b949c26c-d007-4de5-a695-212ec38decd5',
        ],
    ];
    $style = isset($attributes['style'], $style_map[$attributes['style']]) ? $attributes['style'] : 'community';
    $s = $style_map[$style];
    $breadcrumb = $attributes['breadcrumb'] ?? 'Community';
    $heading = $attributes['heading'] ?? 'A generous, talented<br>global community';
    $description = $attributes['description'] ?? 'Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.';

    ob_start();
    ?>
    <header class="section_header44 <?php echo esc_attr($s['background']); ?>">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large border-top-16px <?php echo esc_attr($s['border']); ?>">
                    <div class="header44_component">
                        <div class="max-width-large">
                            <div class="margin-bottom margin-xsmall flex align-middle _8px-gap">
                                <a href="/" class="text-style-breadcrumb no-underline">Home</a>
                                <div bind="<?php echo esc_attr($s['icon']); ?>" class="code-icon is-small w-embed">
                                    <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.70697 11.9496L7.41397 6.24264L1.70697 0.535645L0.292969 1.94964L4.58597 6.24264L0.292969 10.5356L1.70697 11.9496Z" fill="#666666"></path>
                                    </svg>
                                </div>
                                <a href="#" class="text-style-breadcrumb is-current no-underline"><?php echo esc_html($breadcrumb); ?></a>
                            </div>
                            <div class="margin-bottom margin-small">
                                <h1 class="heading-style-h1 <?php echo esc_attr($s['heading']); ?>"><?php echo $heading; ?></h1>
                            </div>
                            <p class="text-size-medium"><?php echo $description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        .text-style-breadcrumb,
        .text-style-breadcrumb:visited,
        .text-style-breadcrumb:active,
        .text-style-breadcrumb:hover,
        .text-style-breadcrumb.is-current {
            text-decoration: none !important;
        }
    </style>
    <?php
    return ob_get_clean();
}

// === Register Event Section Pattern ===

add_action('init', function() {
    register_block_pattern(
        'openmrs-theme/event-section',
        [
            'title'       => __('Event Section', 'openmrs-theme'),
            'description' => __('Section displaying upcoming events.', 'openmrs-theme'),
            'content'     => '<!-- wp:openmrs-theme/event-list /-->',
            'categories'  => ['openmrs-theme'],
        ]
    );
});

// === Theme Supports, Menus, Patterns ===

add_action('after_setup_theme', function() {
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('block-breadcrumbs');

    register_nav_menus([
        'primary' => __('Primary Menu', 'openmrs-theme'),
        'footer'  => __('Footer Menu', 'openmrs-theme'),
    ]);

    register_block_pattern_category('openmrs-theme', [
        'label' => __('OpenMRS Theme Patterns', 'openmrs-theme')
    ]);

    foreach (glob(__DIR__ . "/patterns/*.php") as $file) {
        require $file;
    }
});

// === Editor Styles for Gutenberg (legacy support) ===

add_action('after_setup_theme', function() {
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
});

// === Ensure Hero Block Directory Exists ===

add_action('after_setup_theme', function() {
    $block_dir = get_template_directory() . '/blocks/hero-block';
    if (!file_exists($block_dir)) {
        wp_mkdir_p($block_dir);
    }
});

function openmrs_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('OpenMRS Primary Menu', 'openmrs'),
        'footer-menu'  => __('OpenMRS Footer Menu', 'openmrs'),
        'social' => __('OpenMRS Social Links Menu', 'openmrs-theme'),

    ));
}
add_action('after_setup_theme', 'openmrs_register_menus');

add_action('customize_register', function($wp_customize) {
    $wp_customize->add_setting('openmrs_logo', [
        'default' => get_template_directory_uri() . '/assets/images/relume-53435.png',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'openmrs_logo',
        [
            'label'    => __('Logo', 'openmrs-theme'),
            'section'  => 'title_tagline', // Or your custom section
            'settings' => 'openmrs_logo',
            'priority' => 8,
        ]
    ));
});

function openmrs_customize_register($wp_customize) {
    $wp_customize->add_section('openmrs_header_button', array(
        'title'    => __('Header Button', 'openmrs'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('openmrs_menu_button_text', array(
        'default'   => __('Go to our demo', 'openmrs'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_setting('openmrs_menu_button_url', array(
        'default'   => '#',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('openmrs_menu_button_text', array(
        'label'    => __('Button Text', 'openmrs'),
        'section'  => 'openmrs_header_button',
        'settings' => 'openmrs_menu_button_text',
        'type'     => 'text',
    ));

    $wp_customize->add_control('openmrs_menu_button_url', array(
        'label'    => __('Button URL', 'openmrs'),
        'section'  => 'openmrs_header_button',
        'settings' => 'openmrs_menu_button_url',
        'type'     => 'url',
    ));

    $wp_customize->add_section('openmrs_footer_section', array(
        'title'    => __('Footer Settings', 'openmrs-theme'),
        'priority' => 160,
    ));

    $wp_customize->add_setting('openmrs_footer_text', array(
        'default'   => '© ' . date('Y') . ' OpenMRS. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('openmrs_footer_text', array(
        'label'    => __('Footer Copyright Text', 'openmrs-theme'),
        'section'  => 'openmrs_footer_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'openmrs_customize_register');

class Footer_Columns_Walker extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        if ($depth === 0) {
            $output .= '<div class="footer10_link-list">';
        }
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        if ($depth === 0) {
            // Column heading
            $output .= '<div class="footer10_link-column">';
            $output .= '<div class="margin-bottom margin-xsmall"><div class="text-weight-semibold">' . esc_html($item->title) . '</div></div>';
        } else {
            // Link
            $output .= '<a href="' . esc_url($item->url) . '" class="footer10_link">' . esc_html($item->title) . '</a>';
        }
    }
    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
}

class Footer_Social_Walker extends Walker_Nav_Menu {
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        // Extract the icon HTML from the menu item title (Menu Icons plugin)
        if (preg_match('/(<span[^>]*class="menu-icon"[^>]*>.*?<\/span>)/i', $item->title, $icon_match)) {
            $icon_html = $icon_match[1];
        } else {
            $icon_html = '';
        }
        $output .= '<a href="' . esc_url($item->url) . '" class="footer10_social-link w-inline-block" target="_blank" rel="noopener">';
        $output .= '<div class="icon-embed-xsmall w-embed">' . $icon_html . '</div>';
        $output .= '</a>';
        error_log('Rendering social menu item: ' . print_r($item, true));
    }
}