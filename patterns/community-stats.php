<?php
register_block_pattern('openmrs-theme/community-stats', array(
    'title'         => __('Community Stats', 'openmrs-theme'),
    'description'   => __('A dark purple section displaying community statistics with icons', 'openmrs-theme'),
    'categories'    => array('openmrs-theme'),
    'keywords'      => array('statistics', 'community', 'icons', 'numbers'),
    'viewportWidth' => 1200,
    'content'       => '<!-- wp:group {"tagName":"section","className":"section_layout289 background-color-dark-purple"} -->
<section class="wp-block-group section_layout289 background-color-dark-purple">
    <!-- wp:group {"className":"padding-global padding-section-large"} -->
    <div class="wp-block-group padding-global padding-section-large">
        <!-- wp:group {"className":"container-large"} -->
        <div class="wp-block-group container-large">
            <!-- wp:group {"className":"layout289_component"} -->
            <div class="wp-block-group layout289_component">
                <!-- wp:columns {"className":"layout289_list w-layout-grid"} -->
                <div class="wp-block-columns layout289_list w-layout-grid">
                    <!-- wp:column {"className":"layout289_item"} -->
                    <div class="wp-block-column layout289_item">
                        <!-- wp:group {"className":"margin-bottom margin-small"} -->
                        <div class="wp-block-group margin-bottom margin-small">
                            <!-- wp:group {"className":"layout289_item-icon-wrapper"} -->
                            <div class="wp-block-group layout289_item-icon-wrapper">
                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-icon-code"} -->
                                <figure class="wp-block-image size-full is-style-icon-code"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTQwIDZIOEM1Ljc5NCA2IDQgNy43OTQgNCAxMFYzOEM0IDQwLjIwNiA1Ljc5NCA0MiA4IDQySDQwQzQyLjIwNiA0MiA0NCA0MC4yMDYgNDQgMzhWMTBDNDQgNy43OTQgNDIuMjA2IDYgNDAgNlpNOCAzOFYxNEg0MEw0MC4wMDQgMzhIOFoiIGZpbGw9IndoaXRlIj48L3BhdGg+CjxwYXRoIGQ9Ik0xOC41ODYgMTguNTg1OUwxMS4xNzIgMjUuOTk5OUwxOC41ODYgMzMuNDEzOUwyMS40MTQgMzAuNTg1OUwxNi44MjggMjUuOTk5OUwyMS40MTQgMjEuNDEzOUwxOC41ODYgMTguNTg1OVpNMjkuNDE0IDE4LjU4NTlMMjYuNTg2IDIxLjQxMzlMMzEuMTcyIDI1Ljk5OTlMMjYuNTg2IDMwLjU4NTlMMjkuNDE0IDMzLjQxMzlMMzYuODI4IDI1Ljk5OTlMMjkuNDE0IDE4LjU4NTlaIiBmaWxsPSJ3aGl0ZSI+PC9wYXRoPgo8L3N2Zz4=" alt="Code Icon"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                        <div class="wp-block-group margin-bottom margin-xsmall">
                            <!-- wp:heading {"level":3,"className":"heading-style-h5 text-color-white"} -->
                            <h3 class="wp-block-heading heading-style-h5 text-color-white">8,100+</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":"text-color-white"} -->
                        <p class="text-color-white">code commits in 2024</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"className":"layout289_item"} -->
                    <div class="wp-block-column layout289_item">
                        <!-- wp:group {"className":"margin-bottom margin-small"} -->
                        <div class="wp-block-group margin-bottom margin-small">
                            <!-- wp:group {"className":"layout289_item-icon-wrapper"} -->
                            <div class="wp-block-group layout289_item-icon-wrapper">
                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-icon-contributors"} -->
                                <figure class="wp-block-image size-full is-style-icon-contributors"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzgiIGhlaWdodD0iMzMiIHZpZXdCb3g9IjAgMCAzOCAzMyIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDE5QzE2LjU2IDE5IDIwIDE1LjU2IDIwIDExQzIwIDYuNDM5OTcgMTYuNTYgMi45OTk5NyAxMiAyLjk5OTk3QzcuNDQgMi45OTk5NyA0IDYuNDM5OTcgNCAxMUM0IDE1LjU2IDcuNDQgMTkgMTIgMTlaTTEyIDYuOTk5OTdDMTQuMzU2IDYuOTk5OTcgMTYgOC42NDM5NyAxNiAxMUMxNiAxMy4zNTYgMTQuMzU2IDE1IDEyIDE1QzkuNjQ0IDE1IDggMTMuMzU2IDggMTFDOCA4LjY0Mzk3IDkuNjQ0IDYuOTk5OTcgMTIgNi45OTk5N1pNMTQgMjFIMTBDNC40ODYgMjEgMCAyNS40ODYgMCAzMVYzM0g0VjMxQzQgMjcuNjkyIDYuNjkyIDI1IDEwIDI1SDE0QzE3LjMwOCAyNSAyMCAyNy42OTIgMjAgMzFWMzNIMjRWMzFDMjQgMjUuNDg2IDE5LjUxNCAyMSAxNCAyMVpNMzIuNzI4IDAuMjcxOTczTDI5LjkgMy4wOTk5N0MzMi41NDIgNS43NDU5NyAzNCA5LjI2MTk3IDM0IDEzQzM0IDE2LjczOCAzMi41NDIgMjAuMjU0IDI5LjkgMjIuOUwzMi43MjggMjUuNzI4QzM2LjEyOCAyMi4zMjYgMzggMTcuODA2IDM4IDEzQzM4IDguMTkzOTcgMzYuMTI4IDMuNjczOTcgMzIuNzI4IDAuMjcxOTczWiIgZmlsbD0id2hpdGUiPjwvcGF0aD4KPHBhdGggZD0iTTI3LjA2OTkgNS45MjgyMkwyNC4yNDE5IDguNzYwMjJDMjUuMzc1OSA5Ljg5MDIyIDI1Ljk5OTkgMTEuMzk2MiAyNS45OTk5IDEzLjAwMDJDMjUuOTk5OSAxNC42MDQyIDI1LjM3NTkgMTYuMTEwMiAyNC4yNDE5IDE3LjI0MDJMM0
cuMDY5OSAyMC4wNzIyQzI4Ljk1NzkgMTguMTg0MiAyOS45OTk5IDE1LjY3NDIgMjkuOTk5OSAxMy4wMDAyQzI5Ljk5OTkgMTAuMzI2MiAyOC45NTc5IDcuODE2MjIgMjcuMDY5OSA1LjkyODIyWiIgZmlsbD0id2hpdGUiPjwvcGF0aD4KPC9zdmc+" alt="Contributors Icon"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                        <div class="wp-block-group margin-bottom margin-xsmall">
                            <!-- wp:heading {"level":3,"className":"heading-style-h5 text-color-white"} -->
                            <h3 class="wp-block-heading heading-style-h5 text-color-white">1000</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":"text-color-white"} -->
                        <p class="text-color-white">individual contributors</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"className":"layout289_item"} -->
                    <div class="wp-block-column layout289_item">
                        <!-- wp:group {"className":"margin-bottom margin-small"} -->
                        <div class="wp-block-group margin-bottom margin-small">
                            <!-- wp:group {"className":"layout289_item-icon-wrapper"} -->
                            <div class="wp-block-group layout289_item-icon-wrapper">
                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-icon-globe"} -->
                                <figure class="wp-block-image size-full is-style-icon-globe"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTIwIDBDOC45NzIgMCAwIDguOTcyIDAgMjBDMCAzMS4wMjggOC45NzIgNDAgMjAgNDBDMzEuMDI4IDQwIDQwIDMxLjAyOCA0MCAyMEM0MCA4Ljk3MiAzMS4wMjggMCAyMCAwWk0zNS44NjIgMThIMzAuMzM0QzMwLjA4NzMgMTMuNjIyNSAyOC44NjI2IDkuMzU1OTMgMjYuNzUgNS41MTRDMjkuMTk4NCA2LjY1ODEgMzEuMzE3NyA4LjQwMjc5IDMyLjkxMDggMTAuNTg1OEMzNC41MDQgMTIuNzY4OCAzNS41MTkyIDE1LjMxOTMgMzUuODYyIDE4Wk0yMS4wNiA0LjA1NEMyMy4xMyA2Ljc4MiAyNS45MTQgMTEuNjE0IDI2LjMxNCAxOEgxNC4wNkMxNC4zMzggMTIuODA4IDE2LjA0OCA3Ljk0NCAxOC45NjIgNC4wNTJDMTkuMzA2IDQuMDMyIDE5LjY1IDQgMjAgNEMyMC4zNTggNCAyMC43MDggNC4wMzIgMjEuMDYgNC4wNTRaTTEzLjM3NiA1LjQ1NEMxMS40MDggOS4yMzYgMTAuMjcyIDEzLjUyNCAxMC4wNiAxOEg0LjEzOEM0LjQ4MzU0IDE1LjI5NTcgNS41MTMyNyAxMi43MjQyIDcuMTI5NzggMTAuNTI4OEM4Ljc0NjMgOC4zMzM0NiAxMC44OTYyIDYuNTg2NzggMTMuMzc2IDUuNDU0Wk00LjEzOCAyMkgxMC4wODZDMTAuMzU4IDI2Ljc1OCAxMS40MTYgMzAuOTU2IDEzLjE5OCAzNC40NkMxMC43NjI0IDMzLjMxMTkgOC42NTU0NiAzMS41Njg0IDcuMDcxOTIgMjkuMzkwNkM1LjQ4ODM4IDI3LjIxMjggNC40NzkzMyAyNC42NzA5IDQuMTM4IDIyWk0xOC45IDM1Ljk0NkMxNi4wOTggMzIuNTUgMTQuNDQ0IDI3Ljc5MiAxNC4wODIgMjJIMjYuMzA4QzI1Ljg5MiAyNy41NDYgMjQuMDc0IDMyLjM5MiAyMS4xMDIgMzUuOTQ0QzIwLjczOCAzNS45NjggMjAuMzc0IDM2IDIwIDM2QzE5LjYyOCAzNiAxOS4yNjYgMzUuOTY4IDE4LjkgMzUuOTQ2Wk0yNi45MjIgMzQuNDAyQzI4LjgzMiAzMC44MTQgMjkuOTk4IDI2LjYgMzAuMzA0IDIySDM1Ljg2QzM1LjUyMjUgMjQuNjQ4NiAzNC41Mjc5IDI3LjE3MDYgMzIuOTY2OSAyOS4zMzY3QzMxLjQwNTggMzEuNTAyOCAyOS4zMjc4IDMzLjI0NCAyNi45MjIgMzQuNDAyWiIgZmlsbD0id2hpdGUiPjwvcGF0aD4KPC9zdmc+" alt="Globe Icon"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                        <div class="wp-block-group margin-bottom margin-xsmall">
                            <!-- wp:heading {"level":3,"className":"heading-style-h5 text-color-white"} -->
                            <h3 class="wp-block-heading heading-style-h5 text-color-white">80+</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":"text-color-white"} -->
                        <p class="text-color-white">countries</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:column -->

                    <!-- wp:column {"className":"layout289_item"} -->
                    <div class="wp-block-column layout289_item">
                        <!-- wp:group {"className":"margin-bottom margin-small"} -->
                        <div class="wp-block-group margin-bottom margin-small">
                            <!-- wp:group {"className":"layout289_item-icon-wrapper"} -->
                            <div class="wp-block-group layout289_item-icon-wrapper">
                                <!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-icon-buildings"} -->
                                <figure class="wp-block-image size-full is-style-icon-buildings"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzYiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCAzNiA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTMyIDBIMTJDOS43OTQgMCA4IDEuNzk0IDggNFYxNkg0QzEuNzk0IDE2IDAgMTcuNzk0IDAgMjBWMzhDMCAzOC41MzA0IDAuMjEwNzE0IDM5LjAzOTEgMC41ODU3ODYgMzkuNDE0MkMwLjk2MDg1OSAzOS43ODkzIDEuNDY5NTcgNDAgMiA0MEgzNEMzNC41MzA0IDQwIDM1LjAzOTEgMzkuNzg5MyAzNS40MTQyIDM5LjQxNDJDMzUuNzg5MyAzOS4wMzkxIDM2IDM4LjUzMDQgMzYgMzhWNEMzNiAxLjc5NCAzNC4yMDYgMCAzMiAwWk00IDIwSDE2VjM2SDRWMjBaTTMyIDM2SDIwVjIwQzIwIDE3Ljc5NCAxOC4yMDYgMTYgMTYgMTZIMTJWNEgzMlYzNloiIGZpbGw9IndoaXRlIj48L3BhdGg+CjxwYXRoIGQ9Ik0xNiA4SDIwVjEySDE2VjhaTTI0IDhIMjhWMTJIMjRWOFpNMjQgMTYuMDYySDI4VjIwSDI0VjE2LjA2MlpNMjQgMjRIMjhWMjhIMjRWMjRaTTggMjQuMDAySEEyVjI4LjAwMkg4VjI0LjAwMloiIGZpbGw9IndoaXRlIj48L3BhdGg+Cjwvc3ZnPg==" alt="Buildings Icon"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:group {"className":"margin-bottom margin-xsmall"} -->
                        <div class="wp-block-group margin-bottom margin-xsmall">
                            <!-- wp:heading {"level":3,"className":"heading-style-h5 text-color-white"} -->
                            <h3 class="wp-block-heading heading-style-h5 text-color-white">XX</h3>
                            <!-- /wp:heading -->
                        </div>
                        <!-- /wp:group -->

                        <!-- wp:paragraph {"className":"text-color-white"} -->
                        <p class="text-color-white">partner Ministries of Health</p>
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
</section>
<!-- /wp:group -->'
));