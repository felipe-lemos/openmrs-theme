<?php
/**
 * Customizable Product Image and Content Pattern
 *
 * @package OpenMRS Theme
 */

// Register the pattern
register_block_pattern('openmrs-theme/product-image-content', array(
    'title'         => __('Product image and content', 'openmrs-theme'),
    'description'   => __('A section displaying product information with images', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('product', 'technology', 'image', 'content'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"layout478_component"} -->
<div class="wp-block-group layout478_component"><!-- wp:group {"className":"layout478_content"} -->
<div class="wp-block-group layout478_content"><!-- wp:group {"className":"layout478_image-group"} -->
<div class="wp-block-group layout478_image-group"><!-- wp:group {"className":"layout478_image-wrapper2"} -->
<div class="wp-block-group layout478_image-wrapper2"><!-- wp:image {"sizeSlug":"full","className":"layout478_image2"} -->
<figure class="wp-block-image size-full layout478_image2"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860a1847d592fa286c51a_Placeholder%20Image.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_image-wrapper1"} -->
<div class="wp-block-group layout478_image-wrapper1"><!-- wp:image {"sizeSlug":"full","className":"layout478_image1"} -->
<figure class="wp-block-image size-full layout478_image1"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_content-right"} -->
<div class="wp-block-group layout478_content-right"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-teal"} -->
<div class="wp-block-group tag is-teal"><!-- wp:paragraph {"className":"text-size-small text-color-teal"} -->
<p class="text-size-small text-color-teal">Technology</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">An open-source health stack</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">OpenMRS is built on and champions open-source and open standards to make working with it straight-forward for any development team and so interoperability is at the core of the product.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group"} -->
<div class="wp-block-group button-group"><!-- wp:paragraph -->
<p><a href="/product/technology" class="button is-link is-icon w-inline-block"><span>Understand our technology</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->'
));

// Register the same pattern with community styling
register_block_pattern('openmrs-theme/community-image-content', array(
    'title'         => __('Community image and content', 'openmrs-theme'),
    'description'   => __('A section displaying community information with images', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('community', 'image', 'content'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"layout478_component"} -->
<div class="wp-block-group layout478_component"><!-- wp:group {"className":"layout478_content"} -->
<div class="wp-block-group layout478_content"><!-- wp:group {"className":"layout478_image-group"} -->
<div class="wp-block-group layout478_image-group"><!-- wp:group {"className":"layout478_image-wrapper2"} -->
<div class="wp-block-group layout478_image-wrapper2"><!-- wp:image {"sizeSlug":"full","className":"layout478_image2"} -->
<figure class="wp-block-image size-full layout478_image2"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860a1847d592fa286c51a_Placeholder%20Image.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_image-wrapper1"} -->
<div class="wp-block-group layout478_image-wrapper1"><!-- wp:image {"sizeSlug":"full","className":"layout478_image1"} -->
<figure class="wp-block-image size-full layout478_image1"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_content-right"} -->
<div class="wp-block-group layout478_content-right"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-purple"} -->
<div class="wp-block-group tag is-purple"><!-- wp:paragraph {"className":"text-size-small text-color-scampi"} -->
<p class="text-size-small text-color-scampi">Community</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">A global community of developers</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">OpenMRS is supported by a global community of developers, health professionals, and implementers who collaborate to improve healthcare delivery in resource-constrained environments.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group"} -->
<div class="wp-block-group button-group"><!-- wp:paragraph -->
<p><a href="/community" class="button is-link is-purple is-icon w-inline-block"><span>Join our community</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->'
));

// Register the same pattern with about-us styling
register_block_pattern('openmrs-theme/about-us-image-content', array(
    'title'         => __('About Us image and content', 'openmrs-theme'),
    'description'   => __('A section displaying About Us information with images', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('about', 'about us', 'image', 'content'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"layout478_component"} -->
<div class="wp-block-group layout478_component"><!-- wp:group {"className":"layout478_content"} -->
<div class="wp-block-group layout478_content"><!-- wp:group {"className":"layout478_image-group"} -->
<div class="wp-block-group layout478_image-group"><!-- wp:group {"className":"layout478_image-wrapper2"} -->
<div class="wp-block-group layout478_image-wrapper2"><!-- wp:image {"sizeSlug":"full","className":"layout478_image2"} -->
<figure class="wp-block-image size-full layout478_image2"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860a1847d592fa286c51a_Placeholder%20Image.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_image-wrapper1"} -->
<div class="wp-block-group layout478_image-wrapper1"><!-- wp:image {"sizeSlug":"full","className":"layout478_image1"} -->
<figure class="wp-block-image size-full layout478_image1"><img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"layout478_content-right"} -->
<div class="wp-block-group layout478_content-right"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-orange"} -->
<div class="wp-block-group tag is-orange"><!-- wp:paragraph {"className":"text-size-small text-color-tango"} -->
<p class="text-size-small text-color-orange">About Us</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">Our mission and vision</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">OpenMRS aims to improve healthcare delivery in resource-constrained environments by coordinating a global community that creates a robust, scalable, user-driven, open source medical record system platform.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group"} -->
<div class="wp-block-group button-group"><!-- wp:paragraph -->
<p><a href="/about-us/history" class="button is-link is-orange is-icon w-inline-block"><span>Learn about our history</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->'
));

// If you also want to keep the dynamic block registration:
if (function_exists('openmrs_register_product_image_content_block')) {
    // Keep this if you need the dynamic block
    // Otherwise you can remove the dynamic block functionality to simplify
}