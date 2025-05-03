<?php
/**
 * Get Involved Section Pattern
 *
 * @package OpenMRS Theme
 */

register_block_pattern('openmrs-theme/get-involved', array(
    'title'         => __('Get Involved Section', 'openmrs-theme'),
    'description'   => __('A section with heading, description, button, and YouTube video lightbox.', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('get involved', 'community', 'youtube', 'video', 'section'),
    'viewportWidth' => 1200,
    'content'       => '
<!-- wp:group {"className":"section_layout112 color-scheme-1"} -->
<div class="wp-block-group section_layout112 color-scheme-1">
    <!-- wp:group {"className":"padding-global"} -->
    <div class="wp-block-group padding-global">
        <!-- wp:group {"className":"container-large"} -->
        <div class="wp-block-group container-large">
            <!-- wp:group {"className":"padding-section-large"} -->
            <div class="wp-block-group padding-section-large">
                <!-- wp:group {"className":"layout112_component"} -->
                <div class="wp-block-group layout112_component">
                    <!-- wp:group {"className":"margin-bottom margin-xxlarge"} -->
                    <div class="wp-block-group margin-bottom margin-xxlarge">
                        <!-- wp:columns {"className":"w-layout-grid layout112_content"} -->
                        <div class="wp-block-columns w-layout-grid layout112_content">
                            <!-- wp:column {"className":"layout112_content-left"} -->
                            <div class="wp-block-column layout112_content-left">
                                <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                                <div class="wp-block-group margin-bottom margin-xsmall">
                                    <!-- wp:paragraph {"className":"tag is-purple text-size-small text-color-scampi"} -->
                                    <p class="tag is-purple text-size-small text-color-scampi">Get involved</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                                <!-- wp:heading {"level":2,"className":"heading-style-h3"} -->
                                <h2 class="heading-style-h3">How to get involved</h2>
                                <!-- /wp:heading -->
                                <!-- wp:buttons {"className":"display-inlineflex margin-top margin-medium"} -->
                                <div class="wp-block-buttons display-inlineflex margin-top margin-medium">
                                    <!-- wp:paragraph -->                            
                                        <a href="#">View our getting started guide</a>                                  
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->
                            <!-- wp:column {"className":"layout112_content-right"} -->
                            <div class="wp-block-column layout112_content-right">
                                <!-- wp:paragraph {"className":"text-size-medium"} -->
                                <p class="text-size-medium">There are many ways for you to contribute to OpenMRS and help us achieve our vision of improving patient care. Even better, you don’t have to be able to code in order to contribute!</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:html -->
                    <a href="https://www.youtube.com/watch?v=9K9ApHfiUF4" class="layout112_lightbox w-inline-block w-lightbox" aria-label="open lightbox" aria-haspopup="dialog" target="_blank" rel="noopener">
                        <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20-p-500.jpeg 500w, https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20-p-800.jpeg 800w, https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20-p-1080.jpeg 1080w, https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20-p-1600.jpeg 1600w, https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20.jpeg 2000w" alt="YouTube Video" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20.jpeg" loading="lazy" class="layout112_lightbox-image">
                        <span class="lightbox-play-icon">
                            <span class="icon-embed-large w-embed">
                                <svg width="100%" height="100%" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.33301 32C5.33301 17.2724 17.2721 5.33334 31.9997 5.33334C39.0721 5.33334 45.8549 8.14286 50.8559 13.1438C55.8568 18.1448 58.6663 24.9276 58.6663 32C58.6663 46.7276 46.7273 58.6667 31.9997 58.6667C17.2721 58.6667 5.33301 46.7276 5.33301 32ZM27.1198 43.4134L42.6664 33.7067C43.2482 33.3341 43.6001 32.6909 43.6001 32C43.6001 31.3092 43.2482 30.6659 42.6664 30.2934L27.0664 20.5867C26.452 20.1993 25.6758 20.1755 25.0388 20.5244C24.4018 20.8734 24.004 21.5403 23.9998 22.2667V41.7334C23.9912 42.4774 24.3963 43.1647 25.0514 43.5174C25.7065 43.8702 26.5033 43.8301 27.1198 43.4134Z" fill="CurrentColor"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="video-overlay-layer"></span>
                    </a>
                    <!-- /wp:html -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
'
));
?>