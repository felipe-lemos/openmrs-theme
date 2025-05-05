<?php
register_block_pattern(
    'openmrs-theme/community-events',
    array(
        'title' => __('Community Events', 'openmrs'),
        'description' => __('Displays featured Events from the community', 'openmrs'),
        'categories' => array('openmrs-theme'),
        'keywords' => array('Events', 'community', 'featured', 'blog'),
        'viewportWidth' => 1200,
        'content' => '<!-- wp:group {"tagName":"section","className":"section_blog56 background-color-purple"} -->
<section class="wp-block-group section_blog56 background-color-purple">
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
                                    <p class="tag is-purple text-size-small text-color-scampi">Community Events</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"className":"heading-style-h2"} -->
                            <h2 class="wp-block-heading heading-style-h2">Join the conversation</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"className":"text-size-medium"} -->
                            <p class="text-size-medium">Our global community web regularly to share experiences, problem-solve, create and sustain.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:group {"className":"margin-top margin-small display-inlineflex"} -->
                            <div class="wp-block-group margin-top margin-small display-inlineflex">
                                <!-- wp:paragraph -->
                                <p><a href="' . esc_url(home_url('/case-study')) . '" class="button is-link is-icon">
                                    <span>View all Events</span>
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

                    <!-- wp:group {"className":"event2_list-wrapper"} -->
                    <div class="wp-block-group event2_list-wrapper">
                        <!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":0,"offset":0,"postType":"event","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                        <div class="wp-block-query">
                            <!-- wp:post-template {"className":"w-layout-grid event2_list"} -->
                                <!-- wp:group {"className":"event2_item"} -->
                                    <div class="wp-block-group event2_item">
                                        <!-- wp:group {"className": "event2_date-wrapper"} -->
                                            <div class="wp-block-group event2_date-wrapper">
                                                <!-- wp:post-date {"className":"event2_date"} /-->
                                             </div>
                                        <!-- /wp:group -->
                                        <!-- wp:group {"className": "event2_item-content"} -->
                                            <div class="wp-block-group event2_item-content">
                                             <!-- wp:post-title {"isLink":true,"className":"event2_title"} /-->
                                                <!-- wp:post-excerpt {"moreText":"Read more"} /-->
                                            </div>
                                            <!-- /wp:group -->
                                        
                                    </div>
                                <!-- /wp:group -->      
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                            <!-- wp:query-no-results -->
                            <!-- wp:group {"className":"no-case-studies"} -->
                            <div class="wp-block-group no-case-studies">
                                <!-- wp:paragraph -->
                                <p>No Events found. Please add some Events first.</p>
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