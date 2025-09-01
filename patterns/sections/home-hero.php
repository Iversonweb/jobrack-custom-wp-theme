<?php
/**
 * Title: Hero Section
 * Slug: job-rack/sections/home-hero
 * Categories: hero, featured
 * Description: A hero section for the home page.
 */
?>

 <!-- wp:group {"tagName":"section","className":"home-hero-banner","style":{"color":{"background":"#f1f5f8"},"spacing":{"padding":{"top":"13rem","bottom":"10rem"},"margin":{"top":"-50px"}},"border":{"radius":{"bottomLeft":"150px","bottomRight":"150px"}}}} -->
 <section class="wp-block-group home-hero-banner has-background"
    style="border-bottom-left-radius:150px;border-bottom-right-radius:150px;background-color:#f1f5f8;margin-top:-50px;padding-top:13rem;padding-bottom:10rem">
    <!-- wp:group {"className":"container max-width-900","layout":{"type":"constrained"}} -->
    <div class="wp-block-group container max-width-900">
        <!-- wp:heading {"textAlign":"center","className":"home-hero-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|jr-paleblue"}}}},"textColor":"jr-paleblue","fontFamily":"jr-jost"} -->
        <h2
            class="wp-block-heading has-text-align-center home-hero-title has-jr-paleblue-color has-text-color has-link-color has-jr-jost-font-family">
            <?php esc_html_e( 'Hire The Best Candidates For Your Smart Agency', 'job-rack' ) ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","className":"home-hero-text","style":{"spacing":{"margin":{"top":"8px"}}},"fontFamily":"jr-jost"} -->
        <p class="has-text-align-center home-hero-text has-jr-jost-font-family" style="margin-top:8px">
            <?php esc_html_e( 'Getting a new job is so much easier. Check what new jobs we have in store for you on Job Rack.', 'job-rack' ) ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->