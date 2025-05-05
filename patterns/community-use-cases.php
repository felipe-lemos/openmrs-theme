<?php
register_block_pattern(
    'openmrs-theme/community-case-studies',
    array(
        'title' => __('Community Case Studies', 'openmrs'),
        'description' => __('Displays featured case studies from the community', 'openmrs'),
        'categories' => array('openmrs-theme'),
        'keywords' => array('case studies', 'community', 'featured', 'blog'),
        'viewportWidth' => 1200,
        'content' => '<!-- wp:group {"tagName":"section","className":"section_blog56 color-scheme-1"} -->
<section class="wp-block-group section_blog56 color-scheme-1">
    <!-- wp:group {"className":"padding-global"} -->
    <div class="wp-block-group padding-global">
        <!-- wp:group {"className":"container-large"} -->
        <div class="wp-block-group container-large">
            <!-- wp:group {"className":"padding-section-large"} -->
            <div class="wp-block-group padding-section-large">
                <!-- wp:group {"className":"blog56_component"} -->
                <div class="wp-block-group blog56_component">
                    <!-- wp:group {"className":"margin-bottom margin-xxlarge"} -->
                    <div class="wp-block-group margin-bottom margin-xxlarge">
                        <!-- wp:group {"className":"max-width-large"} -->
                        <div class="wp-block-group max-width-large">
                            <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                            <div class="wp-block-group margin-bottom margin-xsmall">
                                 <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                                <div class="wp-block-group margin-bottom margin-xsmall">
                                    <!-- wp:paragraph {"className":"tag is-purple text-size-small text-color-scampi"} -->
                                    <p class="tag is-purple text-size-small text-color-scampi">Community case studies</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"className":"heading-style-h2"} -->
                            <h2 class="wp-block-heading heading-style-h2">At the heart of thousands of implementations around the world</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"className":"text-size-medium"} -->
                            <p class="text-size-medium">Learn more about real-world OpenMRS implementations.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"margin-top margin-small display-inlineflex"} -->
                            <div class="wp-block-group margin-top margin-small display-inlineflex">
                                <!-- wp:paragraph -->
                                <p><a href="' . esc_url(home_url('/case-study')) . '" class="button is-link is-icon">
                                    <span>View all case studies</span>
                                    <span class="icon-embed-xxsmall">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                        </svg>
                                    </span>
                                </a></p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group {"className":"blog56_list-wrapper"} -->
                    <div class="wp-block-group blog56_list-wrapper">
                        <!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":0,"postType":"case_study","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template {"className":"w-layout-grid blog56_list"} -->
                            <!-- wp:group {"className":"blog56_item"} -->
                            <div class="wp-block-group blog56_item">
                                <!-- wp:group {"tagName":"a","className":"blog56_item-link","attrs":{"href":"{{post_link}}"}} -->
                                <a class="wp-block-group blog56_item-link" href="{{post_link}}">
                                    <!-- wp:group {"className":"blog56_image-wrapper"} -->
                                    <div class="wp-block-group blog56_image-wrapper">
                                        <!-- wp:post-featured-image {"isLink":false,"className":"blog56_image"} /-->
                                    </div>
                                    <!-- /wp:group -->

                                    <!-- wp:group {"className":"blog56_item-content"} -->
                                    <div class="wp-block-group blog56_item-content">
                                        <!-- wp:group {"className":"margin-bottom margin-xxsmall"} -->
                                        <div class="wp-block-group margin-bottom margin-xxsmall">
                                            <!-- wp:post-title {"level":3,"isLink":false,"className":"heading-style-h5"} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"className":"text-size-regular"} -->
                                        <div class="wp-block-group text-size-regular">
                                            <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":20} /-->
                                        </div>
                                        <!-- /wp:group -->

                                        <!-- wp:group {"className":"margin-top margin-small"} -->
                                        <div class="wp-block-group margin-top margin-small">
                                            <!-- wp:group {"className":"button-group"} -->
                                            <div class="wp-block-group button-group">
                                                <!-- wp:paragraph {"className":"button is-link is-icon"} -->
                                                <p class="button is-link is-icon">
                                                    <span>Read more</span>
                                                    <span class="icon-embed-xxsmall">
                                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path>
                                                        </svg>
                                                    </span>
                                                </p>
                                                <!-- /wp:paragraph -->
                                            </div>
                                            <!-- /wp:group -->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                </a>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:post-template -->

                            <!-- wp:query-no-results -->
                            <!-- wp:group {"className":"no-case-studies"} -->
                            <div class="wp-block-group no-case-studies">
                                <!-- wp:paragraph -->
                                <p>No case studies found. Please add some case studies first.</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:group -->
                            <!-- /wp:query-no-results -->
                        </div>
                        <!-- /wp:query -->
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
</section>
<!-- /wp:group -->'
    )
);