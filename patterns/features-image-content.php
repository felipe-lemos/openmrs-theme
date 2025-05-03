<?php
/**
 * Features Image and Content Pattern
 *
 * @package OpenMRS Theme
 */

register_block_pattern('openmrs-theme/features-image-content', array(
    'title'         => __('Features image and content', 'openmrs-theme'),
    'description'   => __('A section displaying features information with images', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('features', 'image', 'content'),
    'viewportWidth' => 1200,
    'content'       => '
<!-- wp:group {"className":"section_layout456 color-scheme-1"} -->
<div class="wp-block-group section_layout456 color-scheme-1">
  <!-- wp:group {"className":"padding-global"} -->
  <div class="wp-block-group padding-global">
    <!-- wp:group {"className":"container-large"} -->
    <div class="wp-block-group container-large">
      <!-- wp:group {"className":"padding-section-large"} -->
      <div class="wp-block-group padding-section-large">
        <!-- wp:group {"className":"layout456_component"} -->
        <div class="wp-block-group layout456_component">
          <!-- wp:group {"className":"margin-bottom margin-xxlarge"} -->
          <div class="wp-block-group margin-bottom margin-xxlarge">
            <!-- wp:group {"className":"layout456_content"} -->
            <div class="wp-block-group layout456_content">
              <!-- wp:group {"className":"max-width-large"} -->
              <div class="wp-block-group max-width-large">
                <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                <div class="wp-block-group margin-bottom margin-xsmall">
                  <!-- wp:group {"className":"tag is-teal"} -->
                  <div class="wp-block-group tag is-teal">
                    <!-- wp:paragraph {"className":"text-size-small text-color-teal"} -->
                    <p class="text-size-small text-color-teal">Features</p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"className":"margin-bottom margin-small"} -->
                <div class="wp-block-group margin-bottom margin-small">
                  <!-- wp:heading {"className":"heading-style-h2"} -->
                  <h2 class="heading-style-h2">A rich-feature set to meet all your facility use cases</h2>
                  <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:paragraph {"className":"text-size-medium"} -->
                <p class="text-size-medium">OpenMRS is designed to be extremely flexible and configurable for any use case.</p>
                <!-- /wp:paragraph -->
                <!-- wp:group {"className":"margin-top margin-medium"} -->
                <div class="wp-block-group margin-top margin-medium">
                  <!-- wp:group {"className":"button-group"} -->
                  <div class="wp-block-group button-group">
                    <!-- wp:paragraph -->
                    <p>
                      <a href="#" class="button is-link is-icon w-inline-block">
                        <span>View all features</span>
                        <span class="icon-embed-xxsmall w-embed">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 3L11 8L6 13" stroke="CurrentColor" stroke-width="1.5"></path></svg>
                        </span>
                      </a>
                    </p>
                    <!-- /wp:paragraph -->
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
          <!-- wp:group {"className":"layout456_image-group"} -->
          <div class="wp-block-group layout456_image-group">
            <!-- wp:group {"className":"layout456_image-wrapper"} -->
            <div class="wp-block-group layout456_image-wrapper">
              <!-- wp:image {"sizeSlug":"full","className":"layout456_image1"} -->
              <figure class="wp-block-image size-full layout456_image1">
                <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/>
              </figure>
              <!-- /wp:image -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"className":"layout456_image-inner-group"} -->
            <div class="wp-block-group layout456_image-inner-group">
              <!-- wp:group {"className":"layout456_image-wrapper"} -->
              <div class="wp-block-group layout456_image-wrapper">
                <!-- wp:image {"sizeSlug":"full","className":"layout456_image2"} -->
                <figure class="wp-block-image size-full layout456_image2">
                  <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/>
                </figure>
                <!-- /wp:image -->
              </div>
              <!-- /wp:group -->
              <!-- wp:group {"className":"layout456_image-wrapper"} -->
              <div class="wp-block-group layout456_image-wrapper">
                <!-- wp:image {"sizeSlug":"full","className":"layout456_image3"} -->
                <figure class="wp-block-image size-full layout456_image3">
                  <img src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c85c3f929ab76d7539510f_placeholder-image.svg" alt=""/>
                </figure>
                <!-- /wp:image -->
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