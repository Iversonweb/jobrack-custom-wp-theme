<?php
/**
 * Job Listings Theme - Functions and definitions
 * 
 * @package JobListingsTheme
 */

defined( 'ABSPATH' ) || die( 'Seems like you stumbled here by accident mate!' );

if ( file_exists ( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// Job Rack Definitions
defined( 'JOB_LISTINGS_THEME_DIR' ) || define( 'JOB_LISTINGS_THEME_DIR', get_template_directory() );
defined( 'JOB_LISTINGS_THEME_URI' ) || define( 'JOB_LISTINGS_THEME_URI', get_template_directory_uri() );

use JobListingsTheme\Theme;

// Bootstrap the theme
add_action( 'after_setup_theme', function () {
    Theme::bootstrap();
} );