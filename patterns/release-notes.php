<?php
/**
 * Release Notes Pattern
 *
 * @package OpenMRS Theme
 */

// Register the main pattern
register_block_pattern('openmrs-theme/release-notes', array(
    'title'         => __('Release Notes', 'openmrs-theme'),
    'description'   => __('A section displaying release notes information', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('release', 'notes', 'product', 'updates'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"timeline17_component"} -->
<div class="wp-block-group timeline17_component"><!-- wp:group {"className":"max-width-large align-center"} -->
<div class="wp-block-group max-width-large align-center"><!-- wp:group {"className":"text-align-center"} -->
<div class="wp-block-group text-align-center"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-teal"} -->
<div class="wp-block-group tag is-teal"><!-- wp:paragraph {"className":"text-size-small text-color-teal"} -->
<p class="text-size-small text-color-teal">Release notes</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">What\'s in the latest release?</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">We regularly release new features, updates and security patches. You can learn more about all the changes in our release notes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group is-center"} -->
<div class="wp-block-group button-group is-center"><!-- wp:paragraph -->
<p><a href="/release-notes" class="button is-link is-icon w-inline-block"><span>View release notes</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
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

// Register the community styled version
register_block_pattern('openmrs-theme/community-release-notes', array(
    'title'         => __('Community Release Notes', 'openmrs-theme'),
    'description'   => __('A section displaying release notes with community styling', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('release', 'notes', 'community', 'updates'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"timeline17_component"} -->
<div class="wp-block-group timeline17_component"><!-- wp:group {"className":"max-width-large align-center"} -->
<div class="wp-block-group max-width-large align-center"><!-- wp:group {"className":"text-align-center"} -->
<div class="wp-block-group text-align-center"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-purple"} -->
<div class="wp-block-group tag is-purple"><!-- wp:paragraph {"className":"text-size-small text-color-scampi"} -->
<p class="text-size-small text-color-scampi">Community updates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">Community contributions</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">Our global community regularly contributes code, documentation, and other resources. See the latest community contributions in our update notes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group is-center"} -->
<div class="wp-block-group button-group is-center"><!-- wp:paragraph -->
<p><a href="/community/updates" class="button is-link is-purple is-icon w-inline-block"><span>View community updates</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
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

// Register the about-us styled version
register_block_pattern('openmrs-theme/about-us-release-notes', array(
    'title'         => __('About Us Release Notes', 'openmrs-theme'),
    'description'   => __('A section displaying organizational updates with about-us styling', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('about', 'updates', 'organization', 'news'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"className":"padding-global"} -->
<div class="wp-block-group padding-global"><!-- wp:group {"className":"container-large"} -->
<div class="wp-block-group container-large"><!-- wp:group {"className":"padding-section-large"} -->
<div class="wp-block-group padding-section-large"><!-- wp:group {"className":"timeline17_component"} -->
<div class="wp-block-group timeline17_component"><!-- wp:group {"className":"max-width-large align-center"} -->
<div class="wp-block-group max-width-large align-center"><!-- wp:group {"className":"text-align-center"} -->
<div class="wp-block-group text-align-center"><!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
<div class="wp-block-group margin-bottom margin-xsmall"><!-- wp:group {"className":"tag is-orange"} -->
<div class="wp-block-group tag is-orange"><!-- wp:paragraph {"className":"text-size-small text-color-orange"} -->
<p class="text-size-small text-color-orange">Organization updates</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"margin-bottom margin-small"} -->
<div class="wp-block-group margin-bottom margin-small"><!-- wp:heading {"className":"heading-style-h2"} -->
<h2 class="heading-style-h2">Latest from the organization</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"text-size-medium"} -->
<p class="text-size-medium">Stay up to date with the latest organizational news, strategic decisions, and leadership updates from OpenMRS.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"margin-top margin-medium"} -->
<div class="wp-block-group margin-top margin-medium"><!-- wp:group {"className":"button-group is-center"} -->
<div class="wp-block-group button-group is-center"><!-- wp:paragraph -->
<p><a href="/about-us/updates" class="button is-link is-orange is-icon w-inline-block"><span>View organizational updates</span><span class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg></span></a></p>
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