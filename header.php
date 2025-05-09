<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/webflow.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/openmrs.webflow.css">
    <style>
        .navbar6_menu-left ul {
            display: flex;
            gap: 15px; /* Adjust spacing between items */
        }
        .navbar6_menu-left ul li {
            list-style: none;
        }
        .navbar6_menu-left ul li a,
        .navbar6_menu-left ul li span.navbar6_link {
            text-decoration: none !important;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="navbar6_component color-scheme-1 w-nav">
            <div class="navbar6_container">
                <a href="<?php echo home_url(); ?>" class="navbar6_logo-link w-nav-brand">
                    <img src="<?php echo get_theme_mod('openmrs_logo', get_template_directory_uri() . '/assets/images/relume-53435.png'); ?>" alt="Logo" class="navbar6_logo">
                </a>
       
                <nav role="navigation" class="navbar6_menu w-nav-menu">
                    <div class="navbar6_menu-left align-center">
                        <?php
                        // Display the WordPress navigation menu without list item dots
                        if (has_nav_menu('primary-menu')) {
                          wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'navbar6_menu-left align-center',
                            'container' => false,
                            'fallback_cb' => false,
                            'items_wrap' => '<ul class="%2$s" style="margin: 0; padding: 0;">%3$s</ul>',
                            'link_before' => '<span class="navbar6_link w-nav-link">',
                            'link_after' => '</span>',
                          ));
                        } else {
                          echo '<p>Please assign a menu to the Primary Menu location in the WordPress admin panel.</p>';
                        }
                        ?>
                    </div>
                    <div class="navbar6_menu-right">
                       
                        <a href="#" class="button is-secondary is-small w-button">
                            <?php echo get_theme_mod('openmrs_menu_button_text', __('Go to our demo', 'openmrs')); ?>
                        </a>
                    </div>
                </nav>
                </div>
                <div class="navbar6_menu-button w-nav-button">
                    <div class="menu-icon5">
                        <div class="menu-icon1_line-top"></div>
                        <div class="menu-icon1_line-middle">
                            <div class="menu-icon1_line-middle-inner"></div>
                        </div>
                        <div class="menu-icon1_line-bottom"></div>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <?php wp_footer(); ?>
</body>
</html>