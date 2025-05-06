<?php
/**
 * Editable Product Image and Content Pattern
 *
 * @package OpenMRS Theme
 */

register_block_pattern('openmrs-theme/landing-image-content', array(
  'title'         => __('Landing Page Images', 'openmrs-theme'),
  'description'   => __('Landing Page Images (editable)', 'openmrs-theme'),
  'categories'    => array('openmrs-theme'),
  'keywords'      => array('product', 'technology', 'image', 'content'),
  'viewportWidth' => 1200,
  'content'       => '
<div class="header108_content-bottom">
  <div class="header108_image-list">
    <div class="header108_image-group-left">
      <div class="header108_image-wrapper is-image-small">
        <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86010f28ad8b3c99261c2_default-35.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86010f28ad8b3c99261c2_default-35.jpeg" loading="eager" class="header108_image1">
      </div>
      <div class="header108_small-image-group">
        <div class="header108_image-wrapper">
          <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8603e7acc2777993476ac_default-16.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8603e7acc2777993476ac_default-16.jpeg" loading="eager" class="header108_image2">
        </div>
        <div class="header108_image-wrapper">
          <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86017ed64f78ec262e036_default-1.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86017ed64f78ec262e036_default-1.jpeg" loading="eager" class="header108_image3">
        </div>
      </div>
    </div>
    <div class="header108_image-wrapper is-image-large">
      <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86016ca82b28f459535a1_default-25.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86016ca82b28f459535a1_default-25.jpeg" loading="eager" class="header108_image4">
    </div>
    <div class="header108_image-group-right">
      <div class="header108_small-image-group">
        <div class="header108_image-wrapper">
          <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c86013f466af392b57a89a_default-20.jpeg" loading="eager" class="header108_image5">
        </div>
        <div class="header108_image-wrapper">
          <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8604588f37c5128bbda2f_default-43.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c8604588f37c5128bbda2f_default-43.jpeg" loading="eager" class="header108_image6">
        </div>
      </div>
      <div class="header108_image-wrapper is-image-small">
        <img sizes="(max-width: 2000px) 100vw, 2000px" srcset="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860462cda33032623bcbd_default-21.jpeg" alt="" src="https://cdn.prod.website-files.com/67c85c3f929ab76d75395065/67c860462cda33032623bcbd_default-21.jpeg" loading="eager" class="header108_image7">
      </div>
    </div>
  </div>
</div>
'
));
