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
            <!-- wp:group {"className":"container-large background-color-purple","layout":{"type":"constrained"}} -->
            <div class="wp-block-group container-large  background-color-purple">

<!-- wp:group {"className":"container-large section_header108 color-scheme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group container-large section_header108 color-scheme-1">
    <!-- wp:html -->
    <div class="gradient-border"></div>
    <!-- /wp:html -->

    <!-- wp:group {"className":"padding-top padding-xlarge"} -->
    <div class="wp-block-group padding-top padding-xlarge">
        <!-- wp:group {"className":"max-width-large align-center"} -->
        <div class="wp-block-group max-width-large align-center">

            <!-- wp:heading {"level":1,"className":"heading-style-h1 has-text-align-center"} -->
            <h1 class="heading-style-h1 has-text-align-center">Electronic medical records built by a global community</h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"text-size-medium has-text-align-center"} -->
            <p class="text-size-medium has-text-align-center">Thousands of people come together to accelerate global health equity together</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"margin-top margin-medium"} -->
            <div class="wp-block-buttons margin-top margin-medium">
                <!-- wp:button {"className":"is-style-fill"} -->
                <div class="wp-block-button"><a class="wp-block-button__link" href="/community/join-our-community">Join us</a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-secondary"} -->
                <div class="wp-block-button is-style-secondary"><a class="wp-block-button__link" href="#">Learn more</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:columns {"className":"margin-top margin-medium text-align-center"} -->
            <div class="wp-block-columns margin-top margin-medium text-align-center">
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
'
,
        )
    );
}
add_action('init', 'openmrs_register_patterns');
