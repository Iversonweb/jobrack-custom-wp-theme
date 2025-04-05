<?php

namespace JobListingsTheme\Core;

class Theme_Setup {
    /**
     * Hook theme setup logic to WordPress 'after_setup_theme' action.
     */
    public function init(): void {
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
    }

    /**
     * Register theme supports and editor styles.
     */
    public function setup_theme(): void {
        load_theme_textdomain( 'job-listings', JOB_LISTINGS_THEME_DIR . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'editor-styles' );

        add_editor_style( [ 'assets/css/blocks.css', 'assets/css/style-shared.css' ] );
        add_theme_support( 'responsive-embeds' );
    }
}