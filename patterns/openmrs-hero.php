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


?>