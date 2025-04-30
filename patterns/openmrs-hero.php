<?php
/**
 * Configurable Hero Pattern
 *
 * @package OpenMRS Theme
 */

// Register the pattern only - all block registration and rendering happens in functions.php
register_block_pattern('openmrs-theme/configurable-hero', array(
    'title'         => __('Configurable Hero', 'openmrs'),
    'description'   => __('Configurable hero section with customizable color, title, and description', 'openmrs'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('hero', 'header', 'configurable', 'community', 'product', 'about'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:openmrs-theme/hero-block {"style":"community","breadcrumb":"Community","heading":"A generous, talented<br>global community","description":"Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.","className":"has-community-background"} /-->'
));

// Additional patterns to provide preset configurations
register_block_pattern('openmrs-theme/community-hero', array(
    'title'         => __('Community Hero', 'openmrs'),
    'description'   => __('Hero section for community pages', 'openmrs'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('hero', 'community', 'header'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:openmrs-theme/hero-block {"style":"community","breadcrumb":"Community","heading":"A generous, talented<br>global community","description":"Hundreds of developers, technologists, informaticists, health policy officers and<br>government officials come together to build and support our eco-system.","className":"has-community-background"} /-->'
));

register_block_pattern('openmrs-theme/product-hero', array(
    'title'         => __('Product Hero', 'openmrs'),
    'description'   => __('Hero section for product pages', 'openmrs'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('hero', 'product', 'header'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:openmrs-theme/hero-block {"style":"product","breadcrumb":"Products","heading":"Quality information<br>at your fingertips","description":"Get quality information for your patients, providers and funders.","className":"has-product-background"} /-->'
));

register_block_pattern('openmrs-theme/about-us-hero', array(
    'title'         => __('About Us Hero', 'openmrs'),
    'description'   => __('Hero section for about us pages', 'openmrs'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('hero', 'about', 'header', 'about us'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:openmrs-theme/hero-block {"style":"about-us","breadcrumb":"About Us","heading":"Sustaining open source<br>medical records","description":"Sustaining our community infrastructure requires significant resources.","className":"has-about-us-background"} /-->'
));
?>