<?php
register_block_pattern('openmrs-theme/about-us-hero', array(
    'title'         => __('About Us Hero', 'openmrs'),
    'description'   => __('Hero section for about us page with title', 'openmrs'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('hero', 'about', 'header', 'about us'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-section-large border-top-16px border-orange"} -->
<div class="wp-block-group padding-section-large border-top-16px border-orange">
    <!-- wp:group {"className":"header44_component"} -->
    <div class="wp-block-group header44_component">
        <!-- wp:group {"className":"max-width-large"} -->
        <div class="wp-block-group max-width-large">
            <!-- wp:group {"className":"margin-bottom margin-xsmall flex align-middle _8px-gap"} -->
            <div class="wp-block-group margin-bottom margin-xsmall flex align-middle _8px-gap">
                <!-- wp:paragraph -->
                <p><a href="/" class="text-style-breadcrumb">Home</a><span class="code-icon is-small"><svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.70697 11.9496L7.41397 6.24264L1.70697 0.535645L0.292969 1.94964L4.58597 6.24264L0.292969 10.5356L1.70697 11.9496Z" fill="#666666"></path>
                </svg></span><a href="#" class="text-style-breadcrumb is-current">About Us</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"margin-bottom margin-small"} -->
            <div class="wp-block-group margin-bottom margin-small">
                <!-- wp:heading {"level":1,"className":"heading-style-h1 text-color-orange"} -->
                <h1 class="wp-block-heading heading-style-h1 text-color-orange">#WeAreOpenMRS</h1>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:paragraph {"className":"text-size-medium"} -->
            <p class="text-size-medium">Sustaining our community infrastructure requires significant resources.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->'
));