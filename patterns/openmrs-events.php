<?php
register_block_pattern('openmrs-theme/community-events', array(
    'title'   => __('Community Events', 'openmrs-theme'),
    'categories' => array('openmrs'),
    'content' => '
<!-- wp:group {"className":"section_event2 background-color-purple"} -->
<div class="wp-block-group section_event2 background-color-purple" id="event2">
    <!-- wp:group {"className":"padding-global"} -->
    <div class="wp-block-group padding-global">
        <!-- wp:group {"className":"container-large"} -->
        <div class="wp-block-group container-large">
            <!-- wp:group {"className":"padding-section-large"} -->
            <div class="wp-block-group padding-section-large">
                <!-- wp:group {"className":"event2_component"} -->
                <div class="wp-block-group event2_component">
                    <!-- wp:group {"className":"margin-bottom margin-xxlarge"} -->
                    <div class="wp-block-group margin-bottom margin-xxlarge">
                        <!-- wp:group {"className":"max-width-large"} -->
                        <div class="wp-block-group max-width-large">
                            <!-- wp:paragraph {"className":"tag is-purple margin-bottom margin-xsmall text-size-small text-color-scampi"} -->
                            <p class="tag is-purple margin-bottom margin-xsmall text-size-small text-color-scampi">Events</p>
                            <!-- /wp:paragraph -->
                            <!-- wp:heading {"level":2,"className":"heading-style-h2 margin-bottom margin-small"} -->
                            <h2 class="heading-style-h2 margin-bottom margin-small">Join the conversation</h2>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph {"className":"text-size-medium"} -->
                            <p class="text-size-medium">Our global community web regularly to share experiences, problem-solve, create and sustain.</p>
                            <!-- /wp:paragraph -->
                    
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"event2_content"} -->
                <div class="wp-block-group event2_content">
                   
                    <!-- wp:group {"className":"event2_list-wrapper"} -->
                    <div class="wp-block-group event2_list-wrapper">
                        <!-- wp:group {"className":"event2_list"} -->
                        <div class="wp-block-group event2_list">
                            <!-- wp:group {"className":"event2_item"} -->
                            <div class="wp-block-group event2_item">
                                <!-- wp:group {"className":"event2_date-wrapper"} -->
                                <div class="wp-block-group event2_date-wrapper">
                                    <!-- wp:paragraph --><p>Thursdays</p><!-- /wp:paragraph -->
                                    <!-- wp:paragraph {"className":"heading-style-h6"} --><p class="heading-style-h6">16:00 ET</p><!-- /wp:paragraph -->
                                    <!-- wp:paragraph {"className":"heading-style-h6"} --><p class="heading-style-h6">08:00 ET</p><!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                                <!-- wp:separator {"className":"divider-vertical is-style-wide"} -->
                                <hr class="wp-block-separator divider-vertical is-style-wide"/>
                                <!-- /wp:separator -->
                                <!-- wp:group {"className":"event2_item-content"} -->
                                <div class="wp-block-group event2_item-content">
                                    <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                                    <div class="wp-block-group margin-bottom margin-xsmall">
                                        <!-- wp:group {"className":"event2_item-content-top"} -->
                                        <div class="wp-block-group event2_item-content-top">
                                            <!-- wp:paragraph {"className":"event2_title heading-style-h5"} --><p class="event2_title heading-style-h5">Weekly squad call</p><!-- /wp:paragraph -->
                                            <!-- wp:paragraph {"className":"text-size-small"} --><p class="text-size-small">Online</p><!-- /wp:paragraph -->
                                        </div>
                                        <!-- /wp:group -->
                                    </div>
                                    <!-- /wp:group -->
                                    <!-- wp:paragraph --><p>Weekly O3 squad call for: Demos, Feature Squad Check-ins, Design Reveals, and Technical Unblocking together, for anyone implementing &amp; working on OpenMRS 3.x. We start each session by: showing PRs from the last week to know about, and updates from Feature Squad leads.</p><!-- /wp:paragraph -->
                                
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