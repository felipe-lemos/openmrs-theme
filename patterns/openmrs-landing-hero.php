<?php
// Register the pattern
function openmrs_register_patterns() {
    register_block_pattern(
        'openmrs/openmrs-landing-hero',
        array(
            'title'       => __('OpenMRS Landing Hero', 'openmrs-theme'),
            'description' => __('A hero section for the OpenMRS landing page.', 'openmrs-theme'),
            'keywords'    => array('features', 'image', 'content'),
            'categories'  => array('custom'),
            'content' => '
<!-- wp:group {"className":"section_header108 color-scheme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group section_header108 color-scheme-1">
    <!-- wp:group {"className":"padding-global"} -->
    <div class="wp-block-group padding-global">
        <!-- wp:group {"className":"container-large"} -->
        <div class="wp-block-group container-large">
            <!-- wp:html -->
            <div class="gradient-border"></div>
            <!-- /wp:html -->
            <!-- wp:group {"className":"padding-top padding-xlarge"} -->
            <div class="wp-block-group padding-top padding-xlarge">
                <!-- wp:group {"className":"max-width-large align-center"} -->
                <div class="wp-block-group max-width-large align-center">
                    <!-- wp:group {"className":"text-align-center"} -->
                    <div class="wp-block-group text-align-center">
                        <!-- wp:group {"className":"margin-bottom margin-small"} -->
                        <div class="wp-block-group margin-bottom margin-small">
                            <!-- wp:heading {"level":1,"className":"heading-style-h1"} -->
                            <h1 class="heading-style-h1">Electronic medical records built by a global community</h1>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:paragraph {"className":"text-size-medium"} -->
                        <p class="text-size-medium">Thousands of people come together to accelerate global health equity together</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:group {"className":"margin-top margin-medium"} -->
                        <div class="wp-block-group margin-top margin-medium">
                            <!-- wp:group {"className":"button-group is-center"} -->
                            <div class="button-group is-center">
                                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                        
                                    <!-- wp:button {"className":"button is-icon"} -->
                                    <div class="button is-icon">
                                        <a href="/community/join-our-community" class="button is-icon w-inline-block">
                                        <div>Join us</div>
                                         <div class="icon-embed-xsmall w-embed">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="48" height="48" viewBox="0 0 24 24"><path fill="currentColor" d="m11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707l-1.414 1.414L15.586 11H6v2h9.586z"></path></svg>
                                    </div>
                                        </a>
                                    </div>
                                    <!-- /wp:button -->
                                    <!-- wp:button {"className":"is-style-secondary"} -->
                                                                    <a href="#" class="button is-secondary w-inline-block"><div>Learn more</div></a>

                                    <!-- /wp:button -->
                                
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->
                        <!-- wp:group {"className":"margin-top margin-medium"} -->
                        <div class="wp-block-group margin-top margin-medium">
                            <!-- wp:columns {"className":"stats-columns"} -->
                            <div class="wp-block-columns stats-columns">
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">A collaboration of</p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:heading {"level":4,"className":"heading-style-h4 text-color-tango"} -->
                                    <h4 class="heading-style-h4 text-color-tango">4000+</h4>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">community members</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">Created</p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:heading {"level":4,"className":"heading-style-h4 text-color-tango"} -->
                                    <h4 class="heading-style-h4 text-color-tango">55 million</h4>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">lines of code</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">Deployed in</p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:heading {"level":4,"className":"heading-style-h4 text-color-tango"} -->
                                    <h4 class="heading-style-h4 text-color-tango">8,100+</h4>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">facilities worldwide</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                                <!-- wp:column -->
                                <div class="wp-block-column">
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">Supporting</p>
                                    <!-- /wp:paragraph -->
                                    <!-- wp:heading {"level":4,"className":"heading-style-h4 text-color-tango"} -->
                                    <h4 class="heading-style-h4 text-color-tango">22 million</h4>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph {"className":"text-size-tiny"} -->
                                    <p class="text-size-tiny">patient records</p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:column -->
                            </div>
                            <!-- /wp:columns -->
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
    <!-- wp:group {"className":"header108_content-bottom"} -->
<div class="wp-block-group header108_content-bottom">
    <!-- wp:group {"className":"header108_image-list"} -->
    <div class="wp-block-group header108_image-list">
        <!-- wp:group {"className":"header108_image-group-left"} -->
        <div class="wp-block-group header108_image-group-left">
            <!-- wp:group {"className":"header108_image-wrapper is-image-small"} -->
            <div class="wp-block-group header108_image-wrapper is-image-small">
                <!-- wp:image {"className":"header108_image1"} -->
                <figure class="wp-block-image header108_image1">
                    <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86010f28ad8b3c99261c2_default-35.jpeg" alt=""/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"header108_small-image-group"} -->
            <div class="wp-block-group header108_small-image-group">
                <!-- wp:group {"className":"header108_image-wrapper"} -->
                <div class="wp-block-group header108_image-wrapper">
                    <!-- wp:image {"className":"header108_image2"} -->
                    <figure class="wp-block-image header108_image2">
                        <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8603e7acc2777993476ac_default-16.jpeg" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                
                <!-- wp:group {"className":"header108_image-wrapper"} -->
                <div class="wp-block-group header108_image-wrapper">
                    <!-- wp:image {"className":"header108_image3"} -->
                    <figure class="wp-block-image header108_image3">
                        <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86017ed64f78ec262e036_default-1.jpeg" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"header108_image-wrapper is-image-large"} -->
        <div class="wp-block-group header108_image-wrapper is-image-large">
            <!-- wp:image {"className":"header108_image4"} -->
            <figure class="wp-block-image header108_image4">
                <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86016ca82b28f459535a1_default-25.jpeg" alt=""/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"header108_image-group-right"} -->
        <div class="wp-block-group header108_image-group-right">
            <!-- wp:group {"className":"header108_small-image-group"} -->
            <div class="wp-block-group header108_small-image-group">
                <!-- wp:group {"className":"header108_image-wrapper"} -->
                <div class="wp-block-group header108_image-wrapper">
                    <!-- wp:image {"className":"header108_image5"} -->
                    <figure class="wp-block-image header108_image5">
                        <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20.jpeg" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                
                <!-- wp:group {"className":"header108_image-wrapper"} -->
                <div class="wp-block-group header108_image-wrapper">
                    <!-- wp:image {"className":"header108_image6"} -->
                    <figure class="wp-block-image header108_image6">
                        <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8604588f37c5128bbda2f_default-43.jpeg" alt=""/>
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            
            <!-- wp:group {"className":"header108_image-wrapper is-image-small"} -->
            <div class="wp-block-group header108_image-wrapper is-image-small">
                <!-- wp:image {"className":"header108_image7"} -->
                <figure class="wp-block-image header108_image7">
                    <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860462cda33032623bcbd_default-21.jpeg" alt=""/>
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    
    <!-- wp:group {"className":"header108_ix-trigger"} -->
    <div class="wp-block-group header108_ix-trigger"></div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
'
        )
    );
}
add_action('init', 'openmrs_register_patterns');