<?php
/**
 * Template Name: About Us
 */

get_header();
?>
<footer class="footer10_component color-scheme-3">
  
  <div class="padding-global">
    <div class="container-large">
      <div class="padding-vertical padding-xxlarge">
        <div class="w-layout-grid footer10_top-wrapper ">
        <div class="w-layout-grid footer10_left-wrapper">
  <a href="<?php echo home_url(); ?>" class="footer10_logo-link w-nav-brand">
    <img 
      src="<?php echo get_template_directory_uri(); ?>/assets/images/relume-53436.png" 
      alt="Footer Logo" 
      class="footer10_logo" 
      sizes="124.3203125px" 
      height="32px" 
      loading="eager" 
      srcset="<?php echo get_template_directory_uri(); ?>/assets/images/relume-53436-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/relume-53436.png 711w">
  </a>
  <?php
    wp_nav_menu( array(
      'theme_location' => 'footer',
      'container'      => false,
      'items_wrap'     => '%3$s', // No <ul>
      'walker'         => new Footer_Columns_Walker(),
      'fallback_cb'    => false,
    ) );
  ?>
</div>
        </div>
        <div class="padding-top padding-medium">
          <div class="footer10_bottom-wrapper">
            <div class="w-layout-grid footer10_legal-list">
              <div class="footer10_credit-text">
                © <?php echo date('Y'); ?> OpenMRS. All rights reserved.
              </div>
              <a href="#" class="footer10_legal-link">Privacy Policy</a>
              <a href="#" class="footer10_legal-link">Terms of Service</a>
              <a href="#" class="footer10_legal-link">Cookies Settings</a>
            </div>
            <div class="w-layout-grid footer10_social-list">
  <?php
    wp_nav_menu( array(
      'theme_location' => 'social',
      'container'      => false,
      // Remove items_wrap and walker to use defaults
      'fallback_cb'    => false,
    ) );
  ?>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>