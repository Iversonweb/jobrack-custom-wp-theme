<?php
/**
 * Title: Explore Categories
 * Slug: job-rack/sections/explore-categories
 * Categories: section
 * Description: Job Categories section.
 */
?>

<!-- wp:group {"tagName":"section","className":"explore-categories","style":{"color":{"background":"#f1f5f8"}}} -->
<section class="wp-block-group explore-categories has-background" style="background-color:#f1f5f8">
    <!-- wp:group {"className":"container max-width-600 sec-heading","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container max-width-600 sec-heading">
        <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|jr-paleblue"}}}},"textColor":"jr-paleblue","fontFamily":"jr-jost"} -->
        <h2
            class="wp-block-heading has-text-align-center has-jr-paleblue-color has-text-color has-link-color has-jr-jost-font-family">
            <?php esc_html_e( 'Explore Top Categories', 'job-rack' ) ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"8px"}}},"fontFamily":"jr-jost"} -->
        <p class="has-text-align-center has-jr-jost-font-family" style="margin-top:8px">
            <?php esc_html_e( 'At vero eos et accusamus et iusto odio dignissimos ducimus 
            qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores', 'job-rack' ) ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->