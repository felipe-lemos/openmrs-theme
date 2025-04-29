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
            <div class="footer10_link-column">
              <div class="margin-bottom margin-xsmall">
                <div class="text-weight-semibold">Community</div>
              </div>
              <div class="footer10_link-list">
                <a href="#" class="footer10_link">Case studies</a>
                <a href="<?php echo home_url('/community'); ?>" class="footer10_link">Calls and events</a>
                <a href="<?php echo home_url('/community/join-our-community'); ?>" class="footer10_link">Get involved</a>
              </div>
            </div>
            <div class="footer10_link-column">
              <div class="margin-bottom margin-xsmall">
                <div class="text-weight-semibold">Product</div>
              </div>
              <div class="footer10_link-list">
                <a href="<?php echo home_url('/product/features'); ?>" class="footer10_link">EMR features</a>
                <a href="<?php echo home_url('/product/technology'); ?>" class="footer10_link">Technology</a>
                <a href="<?php echo home_url('/product/roadmap'); ?>" class="footer10_link">Roadmap</a>
              </div>
            </div>
            <div class="footer10_link-column">
              <div class="margin-bottom margin-xsmall">
                <div class="text-weight-semibold">About us</div>
              </div>
              <div class="footer10_link-list">
                <a href="<?php echo home_url('/about-us'); ?>" class="footer10_link">Our story</a>
                <a href="<?php echo home_url('/about-us/funding'); ?>" class="footer10_link">Funding</a>
                <a href="#" class="footer10_link">Work with us</a>
                <a href="<?php echo home_url('/about-us'); ?>" class="footer10_link">Contact us</a>
              </div>
            </div>
            <div class="footer10_link-column">
              <div class="margin-bottom margin-xsmall">
                <div class="text-weight-semibold">OpenMRS Online</div>
              </div>
              <div class="footer10_link-list">
                <a href="https://github.com/openmrs" target="_blank" class="footer10_link">GitHub</a>
                <a href="#" target="_blank" class="footer10_link">OpenMRS Talk Forum</a>
                <a href="https://slack.openmrs.org/" target="_blank" class="footer10_link">Slack</a>
                <a href="https://addons.openmrs.org/" target="_blank" class="footer10_link">Add-on directory</a>
              </div>
            </div>
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
              <a href="#" class="footer10_social-link w-inline-block">
                <div class="icon-embed-xsmall w-embed">
                  <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 12.0611C22 6.50451 17.5229 2 12 2C6.47715 2 2 6.50451 2 12.0611C2 17.0828 5.65684 21.2452 10.4375 22V14.9694H7.89844V12.0611H10.4375V9.84452C10.4375 7.32296 11.9305 5.93012 14.2146 5.93012C15.3088 5.93012 16.4531 6.12663 16.4531 6.12663V8.60261H15.1922C13.95 8.60261 13.5625 9.37822 13.5625 10.1739V12.0611H16.3359L15.8926 14.9694H13.5625V22C18.3432 21.2452 22 17.083 22 12.0611Z" fill="CurrentColor"></path>
                  </svg>
                </div>
              </a>
              <!-- Add other social links here -->
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