<?php
/**
 * Customizable Product Image and Content Pattern
 *
 * @package OpenMRS Theme
 */

// Refactored pattern
register_block_pattern('openmrs-theme/landing-section1', array(
    'title'         => __('Landing Page Section - blocks 1', 'openmrs-theme'),
    'description'   => __('A section displaying product information with images', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('product', 'technology', 'image', 'content'),
    'viewportWidth' => 1200,
    'content'       => '<section class="section_layout239"><div class="padding-global"><div class="container-large"><div class="padding-section-medium"><div class="layout239_component"><div class="margin-bottom margin-large"><div class="text-align-center"><div class="max-width-large align-center"><div class="margin-bottom margin-xsmall"><div bind="1acd48c5-f366-243d-7b42-d8dbfbe51aa6" class="tag is-teal"><div sym-bind="{&quot;children&quot;:{&quot;type&quot;:&quot;Select&quot;,&quot;val&quot;:{&quot;from&quot;:{&quot;type&quot;:&quot;Variable&quot;,&quot;val&quot;:&quot;data&quot;},&quot;prop&quot;:&quot;76d3c7fc-4352-e8b0-a65c-613cb5ca5922&quot;}}}" class="text-size-small text-color-teal">Product</div></div></div><div class="margin-bottom margin-small"><h2 class="heading-style-h2">Setting the standard for digital patient records</h2></div><p class="text-size-medium">Our community builds and maintains the world’s leading open-source medical records system.</p></div></div></div><div class="w-layout-grid layout239_list"><div class="layout239_item"><div class="margin-bottom margin-medium"><div class="layout239_image-wrapper"></div></div><div class="margin-bottom margin-small"><h3 class="heading-style-h5">We are open-source</h3></div><p>No license fees or vendor lock-in. Our source code is open and free.</p></div><div class="layout239_item"><div class="margin-bottom margin-medium"><div class="layout239_image-wrapper"></div></div><div class="margin-bottom margin-small"><h3 class="heading-style-h5">We build on standards</h3></div><p>Our REST and FHIR APIs make it easier to integrate with other end-user tools and systems.</p></div><div class="layout239_item"><div class="margin-bottom margin-medium"><div class="layout239_image-wrapper"></div></div><div class="margin-bottom margin-small"><h3 class="heading-style-h5">Adapting to local needs</h3></div><p>Quickly adapt for Primary Care, NCD, MCH /ANC, HIV, TB, Malaria, COVID, and more in your language.</p></div></div><div class="margin-top margin-large"><div class="button-group is-center"><a href="/product" class="button is-link is-icon w-inline-block"><div>More about our product</div><div bind="39ee9b92-2e7a-8644-d748-02f375ec8137" class="icon-embed-xxsmall w-embed"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"></svg></div></a></div></div></div></div></div></section>'
));
