<?php
/**
 * Job Rack Theme - Functions and definitions
 * 
 * @package JobRackTheme
 */

defined( 'ABSPATH' ) || die( 'Seems like you stumbled here by accident mate!' );

if ( file_exists ( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// Job Rack Definitions
defined( 'JOB_RACK_THEME_DIR' ) || define( 'JOB_RACK_THEME_DIR', get_template_directory() );
defined( 'JOB_RACK_THEME_URI' ) || define( 'JOB_RACK_THEME_URI', get_template_directory_uri() );

use JobRackTheme\Theme;

// Bootstrap the theme
add_action( 'after_setup_theme', function () {
    Theme::bootstrap();
} );