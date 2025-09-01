<?php
/**
 * Title: Main Header
 * Slug: job-rack/headers/main-header
 * Categories: header
 * Description: A header section.
 */
?>

<!-- wp:group {"tagName":"header","className":"site-header"} -->
<header class="wp-block-group site-header"><!-- wp:group {"className":"header header-transparent dark"} -->
    <div class="wp-block-group header header-transparent dark"><!-- wp:group {"className":"container"} -->
        <div class="wp-block-group container">
            <!-- wp:group {"className":"navigation navigation-landscape","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
            <div class="wp-block-group navigation navigation-landscape"><!-- wp:group {"className":"nav-header"} -->
                <div class="wp-block-group nav-header">
                    <!-- wp:image {"linkDestination":"none","className":"size-full is-resized header-logo"} -->
                    <figure class="wp-block-image size-full is-resized header-logo"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.png"
                            alt="Main Logo" /></figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:group -->

                <!-- wp:navigation {"ref":5,"textColor":"jr-paleblue","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"fontFamily":"jr-jost","layout":{"type":"flex","justifyContent":"right"}} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</header>
<!-- /wp:group -->